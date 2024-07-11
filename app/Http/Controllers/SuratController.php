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
    public function index(Request $request)
    {
        $query = Surat::with('kategoriSurat');

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nomor_surat', 'like', "%{$search}%")
                ->orWhere('judul', 'like', "%{$search}%")
                ->orWhereHas('kategoriSurat', function ($q) use ($search) {
                    $q->where('nama_kategori', 'like', "%{$search}%");
                });
        }

        $surats = $query->paginate(5); // Change the number as needed

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
            return view('Arsip.edit', compact('surat', 'kategoriSurats'));
        } catch (Exception $e) {
            return redirect()->route('arsip_surat.index')
                ->with('error', 'Surat not found.');
        }
    }

    public function update(UpdateSuratRequest $request, $id)
    {
        try {
            $surat = Surat::findOrFail($id);

            // Check if a new file has been uploaded
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filePath = $file->store('uploads', 'public'); // Store file in the 'public/uploads' directory
            } else {
                // Keep the existing file path
                $request->merge(['file' => $surat->file]);
            }

            $surat->update([
                'nomor_surat' => $request->nomor_surat,
                'judul' => $request->judul,
                'file' => $filePath,
                'kategori_surat_id' => $request->kategori_surat_id,
            ]);

            return redirect()->route('arsip_surat.index')
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
            if (request()->expectsJson()) {
                return response()->json(['success' => true, 'message' => 'Kategori Surat deleted successfully.']);
            }
            return redirect()->route('surats.index')
                ->with('success', 'Surat deleted successfully.');
        } catch (Exception $e) {
            if (request()->expectsJson()) {
                return response()->json(['success' => false, 'message' => 'An error occurred while deleting the Kategori Surat.'], 500);
            }
            return redirect()->route('surats.index')
                ->with('error', 'An error occurred while deleting the Surat.');
        }
    }
}
