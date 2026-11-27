<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Memuat data relasi author dan publisher
        return response()->json(Book::with(['author', 'publisher'])->get(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'isbn'             => 'required|string|unique:books,isbn',
            'author_id'        => 'required|exists:authors,id',
            'publisher_id'     => 'required|exists:publishers,id',
            'publication_year' => 'required|integer',
            'stock'            => 'required|integer|min:0',
        ]);

        $book = Book::create($validated);
        return response()->json($book, 201);
    }

    public function show($id)
    {
        $book = Book::with(['author', 'publisher'])->findOrFail($id);
        return response()->json($book, 200);
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $validated = $request->validate([
            'title'            => 'sometimes|required|string|max:255',
            'isbn'             => 'sometimes|required|string|unique:books,isbn,' . $id,
            'author_id'        => 'sometimes|required|exists:authors,id',
            'publisher_id'     => 'sometimes|required|exists:publishers,id',
            'publication_year' => 'sometimes|required|integer',
            'stock'            => 'sometimes|required|integer|min:0',
        ]);

        $book->update($validated);
        return response()->json($book, 200);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(['message' => 'Buku berhasil dihapus'], 200);
    }
}