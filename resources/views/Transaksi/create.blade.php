@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Tambah Data Transaksi</h3>
        <form action="{{ url('/transaksi')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Tanggal Transaksi</label>
                <input type="date" name="tgl_transaksi" class="form-control" placeholder="Tanggal Transaksi">
            </div>
            <div class="mb-3">
                <label for="">Pelanggan Transaksi</label>
                <select name="pelanggan_transaksi" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option>
                    @foreach ($pelanggan as $pel)
                        <option value="{{$pel->id_pelanggan}}">{{$pel->id_pelanggan}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">Harga Transaksi</label>
                <select name="harga_transaksi" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option>
                    @foreach ($harga as $harga)
                        <option value="{{$harga->harga_id}}">{{$harga->harga_per_kilo}}</option>
                    @endforeach
                </select>    
            </div>
            <div class="mb-3">
                <label for="">Berat Transaksi</label>
                <input type="text" name="berat_transaksi" class="form-control" placeholder="Berat Transaksi">
            </div>
            <div class="mb-3">
                <label for="">Tanggal Transaksi Selesai</label>
                <input type="date" name="tgl_transaksi_selesai" class="form-control" placeholder="Tanggal Transaksi Selesai">
            </div>
            <div class="mb-3">
                <label for="">Status Transaksi</label>
               <select class= "form-control" name="status_transaksi" id="">
                    <option value="">Dipilih Qaqa</option>
                    <option value="Y">Selesai</option>
                    <option value="N">Sedang Berlangsung</option>
            </td>  
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection