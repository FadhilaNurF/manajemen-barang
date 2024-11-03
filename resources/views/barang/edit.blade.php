@extends('layouts.app')

@section('content')
<h1>update bar</h1>
    <form action="{{route('barang.update', $barang->id )}}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_barang">Nama barang:</label>
        <input type="text" value="{{$barang->nama_barang}}" name="nama_barang" id="nama_barang" required>
        
        <label for="jenis_barang">Jenis barang</label>
        <input type="text" value="{{$barang->jenis_barang}}" name="jenis_barang" id="jenis_barang" required>

        <label for="stok">stok</label>
        <input type="number" value="{{$barang->stok}}" name="stok" id="stok" required>
        
        <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="">-- Pilih Status --</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Kosong">Kosong</option>
                </select>
        

                <label for="harga_satuan">Harga satuan</label>
                <input type="number" value="{{$barang->harga_satuan}}" name="harga_satuan" id="harga_satuan" required>

        <button type="submit">Update</button>
    </form>

@endsection
