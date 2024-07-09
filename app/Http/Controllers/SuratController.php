<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSuratRequest;
use App\Http\Requests\UpdateSuratRequest;
use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\KategoriSurat;
use Exception;

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
        try {
            Surat::create($request->validated());
            return redirect()->route('surats.index')
                ->with('success', 'Surat created successfully.');
        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while creating the Surat.');
        }
    }

    public function show($id)
    {
        try {
            $surat = Surat::findOrFail($id);
            return view('surats.show', compact('surat'));
        } catch (Exception $e) {
            return redirect()->route('surats.index')
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
