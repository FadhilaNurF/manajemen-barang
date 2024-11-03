<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_barang',
        'jenis_barang',
        'stok',
        'status',
        'harga_satuan'
        

    ];
}
