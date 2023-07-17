@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Tambah Data Pelanggan</h3>
        <form action="{{ url('/pelanggan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">HP Pelanggan</label>
                <input type="text" name="hp_pelanggan" class="form-control" placeholder="HP Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">Alamat Pelanggan</label>
                <input type="text" name="alamat_pelanggan" class="form-control" placeholder="Alamat Pelanggan">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection