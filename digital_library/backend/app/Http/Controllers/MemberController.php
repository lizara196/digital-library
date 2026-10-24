<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return response()->json(Member::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'member_code' => 'required|string|unique:members,member_code',
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:members,email',
            'phone'       => 'nullable|string',
            'address'     => 'nullable|string',
        ]);

        $member = Member::create($validated);
        return response()->json($member, 201);
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return response()->json($member, 200);
    }

    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $validated = $request->validate([
            'member_code' => 'sometimes|required|string|unique:members,member_code,' . $id,
            'name'        => 'sometimes|required|string|max:255',
            'email'       => 'sometimes|required|email|unique:members,email,' . $id,
            'phone'       => 'nullable|string',
            'address'     => 'nullable|string',
        ]);

        $member->update($validated);
        return response()->json($member, 200);
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return response()->json(['message' => 'Anggota berhasil dihapus'], 200);
    }
}