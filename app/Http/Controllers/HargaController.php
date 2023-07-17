<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Harga;
class HargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Harga::all();
        return view('harga.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('harga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Harga::create(
            [
                'berat' => $request->berat,
                'harga_per_kilo' => $request->harga_per_kilo
            ]
        );

        return redirect('harga')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Harga::findOrFail($id);
        return view('harga.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Harga::findOrFail($id);
        $row->update(
            [
                'berat' => $request->berat,
                'harga_per_kilo' => $request->harga_per_kilo
            ]
        );
        return redirect('harga')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Harga::findOrFail($id);
        $row->delete();

        return redirect('harga')->with('success', 'Data Berhasil Dihapus');
    }
}
