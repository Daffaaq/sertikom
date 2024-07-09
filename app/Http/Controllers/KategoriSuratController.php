<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriSuratRequest;
use App\Http\Requests\UpdateKategoriSuratRequest;
use Illuminate\Http\Request;
use App\Models\KategoriSurat;

class KategoriSuratController extends Controller
{
    public function index()
    {
        $kategoriSurats = KategoriSurat::all();
        return view('kategori_surats.index', compact('kategoriSurats'));
    }

    public function create()
    {
        return view('kategori_surats.create');
    }

    public function store(StoreKategoriSuratRequest $request)
    {
        KategoriSurat::create($request->validated());

        return redirect()->route('kategori_surats.index')
        ->with('success', 'Kategori Surat created successfully.');
    }

    public function show($id)
    {
        $kategoriSurat = KategoriSurat::findOrFail($id);
        return view('kategori_surats.show', compact('kategoriSurat'));
    }

    public function edit($id)
    {
        $kategoriSurat = KategoriSurat::findOrFail($id);
        return view('kategori_surats.edit', compact('kategoriSurat'));
    }

    public function update(UpdateKategoriSuratRequest $request, $id)
    {
        $kategoriSurat = KategoriSurat::findOrFail($id);
        $kategoriSurat->update($request->validated());

        return redirect()->route('kategori_surats.index')
        ->with('success', 'Kategori Surat updated successfully.');
    }
    public function destroy($id)
    {
        $kategoriSurat = KategoriSurat::findOrFail($id);
        $kategoriSurat->delete();

        return redirect()->route('kategori_surats.index')
            ->with('success', 'Kategori Surat deleted successfully.');
    }
}
