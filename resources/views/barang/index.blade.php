@extends('layouts.app')
@section('content')

    <h2>MANAJEMEN BARANG</h2>
    <a href="{{route('barang.create')}}">barang baru</a>
    <ul>
        <table border="2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Harga Satuan</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$barang->nama_barang}}</td>
                    <td>{{$barang->jenis_barang}}</td>
                    <td>{{$barang->stok}}</td>
                    <td>{{$barang->status}}</td>
                    <td>{{$barang->harga_satuan}}</td>
                    <td><a href="{{route ('barang.edit', $barang->id)}}">EDIT</a>
                    <form action="{{route ('barang.destroy', $barang->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    </td>
                </tr>  
            </tbody>
            @endforeach
        </table>
     
    </ul>
@endsection