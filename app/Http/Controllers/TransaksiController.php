<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Harga;
use Illuminate\Http\Request;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.create', [
            'harga' => Harga::get(),
            'pelanggan' => Pelanggan::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create(
            [
                'tgl_transaksi' => $request->tgl_transaksi,
                'pelanggan_transaksi' => $request->pelanggan_transaksi,
                'harga_transaksi' => $request->harga_transaksi,
                'berat_transaksi' => $request->berat_transaksi,
                'tgl_transaksi_selesai' => $request->tgl_transaksi_selesai,
                'status_transaksi' => $request->status_transaksi
            ]
        );

        return redirect('transaksi')->with('success','Data Berhasil Ditambahkan');
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
        $row = Transaksi::findOrFail($id);
        return view('transaksi.edit',[
            'harga' => Harga::get(),
            'pelanggan' => Pelanggan::get()
        ],
         compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Transaksi::findOrFail($id);
        $row->update(
            [
                'tgl_transaksi' => $request->tgl_transaksi,
                'pelanggan_transaksi' => $request->pelanggan_transaksi,
                'harga_transaksi' => $request->harga_transaksi,
                'berat_transaksi' => $request->berat_transaksi,
                'tgl_transaksi_selesai' => $request->tgl_transaksi_selesai,
                'status_transaksi' => $request->status_transaksi
            ]
        );
        return redirect('transaksi')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Transaksi::findOrFail($id);
        $row->delete();

        return redirect('transaksi')->with('success', 'Data Berhasil Dihapus');
    }
}
