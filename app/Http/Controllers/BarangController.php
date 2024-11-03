<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
   
   public function index()
   {
     $barangs = Barang::all();
     return view('barang.index', compact('barangs'));
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       return view('barang.create');
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
    
    $request->validate([
        'nama_barang' => 'required|max:100',
        'jenis_barang' => 'required|max:100',
        'stok' => 'nullable|integer',
        'status' => 'nullable|string|max:20',
        'harga_satuan' => 'nullable|integer',
    ]);

        Barang::create($request->all());

        return redirect()->route('barang.index');
    
   }

   /**
    * Display the specified resource.
    */
   public function show(Barang $barang)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(Barang $barang)
   {
       return view('barang.edit', compact('barang'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, Barang $barang)
   {
       $barang->update($request->all());
       return redirect()->route('barang.index');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Barang $barang)
   {
       $barang->delete();
       return redirect()->route('barang.index');
   }
}
