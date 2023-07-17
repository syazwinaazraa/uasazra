@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Tambah Data Harga</h3>
        <form action="{{ url('/harga')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Berat</label>
                <input type="text" name="berat" class="form-control" placeholder="Berat">
            </div><div class="mb-3">
                <label for="">Harga Per Kilo</label>
                <input type="text" name="harga_per_kilo" class="form-control" placeholder="Harga Per Kilo">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection