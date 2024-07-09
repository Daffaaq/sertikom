<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuratRequest;
use App\Http\Requests\UpdateSuratRequest;
use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\KategoriSurat;

class SuratController extends Controller
{
    public function index()
    {
        $surats = Surat::all();
        return view('surats.index', compact('surats'));
    }

    public function create()
    {
        $kategoriSurats = KategoriSurat::all();
        return view('surats.create', compact('kategoriSurats'));
    }

    public function store(StoreSuratRequest $request)
    {
        Surat::create($request->validated());

        return redirect()->route('surats.index')
            ->with('success', 'Surat created successfully.');
    }

    public function show($id)
    {
        $surat = Surat::findOrFail($id);
        return view('surats.show', compact('surat'));
    }

    public function edit($id)
    {
        $surat = Surat::findOrFail($id);
        $kategoriSurats = KategoriSurat::all();
        return view('surats.edit', compact('surat', 'kategoriSurats'));
    }

    public function update(UpdateSuratRequest $request, $id)
    {
        $surat = Surat::findOrFail($id);
        $surat->update($request->validated());

        return redirect()->route('surats.index')
            ->with('success', 'Surat updated successfully.');
    }

    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);
        $surat->delete();

        return redirect()->route('surats.index')
            ->with('success', 'Surat deleted successfully.');
    }
}
