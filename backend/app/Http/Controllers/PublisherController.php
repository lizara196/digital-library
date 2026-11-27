<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        return response()->json(Publisher::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone'   => 'nullable|string',
        ]);

        $publisher = Publisher::create($validated);
        return response()->json($publisher, 201);
    }

    public function show($id)
    {
        $publisher = Publisher::findOrFail($id);
        return response()->json($publisher, 200);
    }

    public function update(Request $request, $id)
    {
        $publisher = Publisher::findOrFail($id);

        $validated = $request->validate([
            'name'    => 'sometimes|required|string|max:255',
            'address' => 'nullable|string',
            'phone'   => 'nullable|string',
        ]);

        $publisher->update($validated);
        return response()->json($publisher, 200);
    }

    public function destroy($id)
    {
        $publisher = Publisher::findOrFail($id);
        $publisher->delete();
        return response()->json(['message' => 'Penerbit berhasil dihapus'], 200);
    }
}