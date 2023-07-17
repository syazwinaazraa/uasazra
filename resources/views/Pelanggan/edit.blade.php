@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Edit Data Pelanggan</h3>
        <form action="{{ url('/pelanggan/' .$row->id_pelanggan)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" value="{{$row->nama_pelanggan}}">
            </div>
            <div class="mb-3">
                <label for="">HP Pelanggan</label>
                <input type="text" name="hp_pelanggan" class="form-control" value="{{$row->hp_pelanggan}}">
            </div>
            <div class="mb-3">
                <label for="">Alamat Pelanggan</label>
                <input type="text" name="alamat_pelanggan" class="form-control" value="{{$row->alamat_pelanggan}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection