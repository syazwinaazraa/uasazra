@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Edit Data Harga</h3>
        <form action="{{ url('/harga/' .$row->harga_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">Berat</label>
                <input type="text" name="berat" class="form-control" value="{{$row->berat}}">
            </div><div class="mb-3">
                <label for="">Harga Per Kilo</label>
                <input type="text" name="harga_per_kilo" class="form-control" value="{{$row->harga_per_kilo}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection