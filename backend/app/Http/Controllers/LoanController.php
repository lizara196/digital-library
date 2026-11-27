<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        // Memuat data relasi member dan book
        return response()->json(Loan::with(['member', 'book'])->get(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id'   => 'required|exists:books,id',
            'loan_date' => 'required|date',
            'due_date'  => 'required|date|after_or_equal:loan_date',
            'status'    => 'nullable|in:borrowed,returned,late',
        ]);

        $loan = Loan::create($validated);
        return response()->json($loan, 201);
    }

    public function show($id)
    {
        $loan = Loan::with(['member', 'book'])->findOrFail($id);
        return response()->json($loan, 200);
    }

    public function update(Request $request, $id)
    {
        $loan = Loan::findOrFail($id);

        $validated = $request->validate([
            'member_id'   => 'sometimes|required|exists:members,id',
            'book_id'     => 'sometimes|required|exists:books,id',
            'loan_date'   => 'sometimes|required|date',
            'due_date'    => 'sometimes|required|date',
            'return_date' => 'nullable|date',
            'status'      => 'sometimes|required|in:borrowed,returned,late',
        ]);

        $loan->update($validated);
        return response()->json($loan, 200);
    }

    public function destroy($id)
    {
        $loan = Loan::findOrFail($id);
        $loan->delete();
        return response()->json(['message' => 'Data peminjaman berhasil dihapus'], 200);
    }
}