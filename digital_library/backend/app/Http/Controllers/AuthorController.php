<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return response()->json(Author::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'bio'        => 'nullable|string',
            'birth_date' => 'nullable|date',
        ]);

        $author = Author::create($validated);
        return response()->json($author, 201);
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);
        return response()->json($author, 200);
    }

    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);

        $validated = $request->validate([
            'name'       => 'sometimes|required|string|max:255',
            'bio'        => 'nullable|string',
            'birth_date' => 'nullable|date',
        ]);

        $author->update($validated);
        return response()->json($author, 200);
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return response()->json(['message' => 'Penulis berhasil dihapus'], 200);
    }
}