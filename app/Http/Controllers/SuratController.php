<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuratRequest;
use App\Http\Requests\UpdateSuratRequest;
use Illuminate\Http\Request;
use App\Models\Surat;
use Illuminate\Support\Facades\Log;
use App\Models\KategoriSurat;
use Exception;

class SuratController extends Controller
{
    public function index()
    {
        $surats = Surat::with('kategoriSurat')->get();
        return view('Arsip.index', compact('surats'));
    }

    public function create()
    {
        $kategoriSurats = KategoriSurat::all();
        return view('Arsip.arsip', compact('kategoriSurats'));
    }

    public function store(StoreSuratRequest $request)
    {
        // dd($request->all());
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public'); // Store file in the 'public/uploads' directory
        }

        // Create the Surat record with the file path
        $suratin = Surat::create([
            'nomor_surat' => $request->nomor_surat,
            'judul' => $request->judul,
            'file' => $filePath,
            'kategori_surat_id' => $request->kategori_surat_id,
        ]);
        // dd($suratin);

        return redirect()->route('arsip_surat.index')
            ->with('success', 'Surat created successfully.');
    }

    public function show($id)
    {
        try {
            $surat = Surat::with('kategoriSurat')->findOrFail($id);
            return view('Arsip.detail', compact('surat'));
        } catch (Exception $e) {
            return redirect()->route('arsip_surat.index')
                ->with('error', 'Surat not found.');
        }
    }


    public function edit($id)
    {
        try {
            $surat = Surat::findOrFail($id);
            $kategoriSurats = KategoriSurat::all();
            return view('surats.edit', compact('surat', 'kategoriSurats'));
        } catch (Exception $e) {
            return redirect()->route('surats.index')
                ->with('error', 'Surat not found.');
        }
    }

    public function update(UpdateSuratRequest $request, $id)
    {
        try {
            $surat = Surat::findOrFail($id);
            $surat->update($request->validated());
            return redirect()->route('surats.index')
                ->with('success', 'Surat updated successfully.');
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while updating the Surat.');
        }
    }

    public function destroy($id)
    {
        try {
            $surat = Surat::findOrFail($id);
            $surat->delete();
            return redirect()->route('surats.index')
                ->with('success', 'Surat deleted successfully.');
        } catch (Exception $e) {
            return redirect()->route('surats.index')
                ->with('error', 'An error occurred while deleting the Surat.');
        }
    }
}
