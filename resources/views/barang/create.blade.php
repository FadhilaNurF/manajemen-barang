@extends('layouts.app')

@section('content')

    <h1>Tambah barang baru</h1>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama_barang">Nama barang</label>
            <input type="text" name="nama_barang" id="nama_barang" required>
        </div>

        <div>
            <label for="jenis_barang">Jenis barang</label>
            <input type="text" name="jenis_barang" id="jenis_barang" required>
        </div>

        <div>
            <label for="stok">Stok:</label>
            <input type="number" name="stok" id="stok" required>
        </div>

        <div>
            <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="">-- Pilih Status --</option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Kosong">Kosong</option>
                </select>
        </div>

        <div>
            <label for="harga_satuan">Harga satuan</label>
            <input type="number" name="harga_satuan" id="harga_satuan" required>
        </div>

        <div>
            <button type="submit">simpan</button>
        </div>
    </form>


@endsection