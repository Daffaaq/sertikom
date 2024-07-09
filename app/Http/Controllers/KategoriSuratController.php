<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriSuratRequest;
use App\Http\Requests\UpdateKategoriSuratRequest;
use Illuminate\Http\Request;
use Exception;
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
        try {
            KategoriSurat::create($request->validated());
            return redirect()->route('kategori_surats.index')
                ->with('success', 'Kategori Surat created successfully.');
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while creating the Kategori Surat.');
        }
    }

    public function show($id)
    {
        try {
            $kategoriSurat = KategoriSurat::findOrFail($id);
            return view('kategori_surats.show', compact('kategoriSurat'));
        } catch (Exception $e) {
            return redirect()->route('kategori_surats.index')
                ->with('error', 'Kategori Surat not found.');
        }
    }

    public function edit($id)
    {
        try {
            $kategoriSurat = KategoriSurat::findOrFail($id);
            return view('kategori_surats.edit', compact('kategoriSurat'));
        } catch (Exception $e) {
            return redirect()->route('kategori_surats.index')
                ->with('error', 'Kategori Surat not found.');
        }
    }

    public function update(UpdateKategoriSuratRequest $request, $id)
    {
        try {
            $kategoriSurat = KategoriSurat::findOrFail($id);
            $kategoriSurat->update($request->validated());

            return redirect()->route('kategori_surats.index')
                ->with('success', 'Kategori Surat updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while updating the Kategori Surat.');
        }
    }
    public function destroy($id)
    {
        try {
            $kategoriSurat = KategoriSurat::findOrFail($id);
            $kategoriSurat->delete();

            return redirect()->route('kategori_surats.index')
                ->with('success', 'Kategori Surat deleted successfully.');
        } catch (Exception $e) {
            return redirect()->route('kategori_surats.index')
                ->with('error', 'An error occurred while deleting the Kategori Surat.');
        }
    }
}
