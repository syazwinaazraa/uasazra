@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Edit Data Pakaian</h3>
        <form action="{{ url('/pakaian/' .$row->id_pakaian)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">Transaksi Pakaian</label>
                <select name="transaksi_pakaian" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option>
                    @foreach ($transaksi as $transaksi)
                        <option value="{{$transaksi->id_transaksi}}">{{$transaksi->id_transaksi}}</option>
                    @endforeach
                </select>
            <div class="mb-3">
                <label for="">Jenis Pakaian</label>
                <input type="text" name="jenis_pakaian" class="form-control" value="{{$row->jenis_pakaian}}">
            </div>
            <div class="mb-3">
                <label for="">Jumlah Pakaian</label>
                <input type="text" name="jumlah_pakaian" class="form-control" value="{{$row->jumlah_pakaian}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection