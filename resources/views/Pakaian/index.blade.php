@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Daftar Pakaian</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-primary btn-sm float-end" href="{{ url('pakaian/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Transaksi Pakaian</th>
                <th>Jenis Pakaian</th>
                <th>Jumlah Pakaian</th>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->id_pakaian}}</td>
                <td>{{ $row->transaksi->id_transaksi}}</td>
                <td>{{ $row->jenis_pakaian}}</td>
                <td>{{ $row->jumlah_pakaian}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('pakaian/' .$row->id_pakaian. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('pakaian/' .$row->id_pakaian)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection