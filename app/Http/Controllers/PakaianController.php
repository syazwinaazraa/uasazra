<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pakaian;
use App\Models\Transaksi;

class PakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pakaian::all();
        return view('pakaian.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pakaian.create', [
            'transaksi' => Transaksi::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pakaian::create(
            [
                'transaksi_pakaian' => $request->transaksi_pakaian,
                'jenis_pakaian' => $request->jenis_pakaian,
                'jumlah_pakaian' => $request->jumlah_pakaian
            ]
        );

        return redirect('pakaian')->with('success','Data Berhasil Ditambahkan');
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
        $row = Pakaian::findOrFail($id);
        return view('pakaian.edit', [
            'transaksi' => Transaksi::get()
        ],
         compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pakaian::findOrFail($id);
        $row->update(
            [
                'transaksi_pakaian' => $request->transaksi_pakaian,
                'jenis_pakaian' => $request->jenis_pakaian,
                'jumlah_pakaian' => $request->jumlah_pakaian
            ]
        );
        return redirect('pakaian')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pakaian::findOrFail($id);
        $row->delete();

        return redirect('pakaian')->with('success', 'Data Berhasil Dihapus');
    }
}
