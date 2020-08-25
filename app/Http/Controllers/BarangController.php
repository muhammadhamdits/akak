<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Brand;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        $brands = Brand::all();
        $judul = "Barang";
        return view("index", compact('barangs', 'brands', 'judul'));
    }

    public function create()
    {
        $judul = "Tambah Data Barang";
        $brands = Brand::all();
        return view('barang.create', compact('judul', 'brands'));
    }

    public function store(Request $request)
    {
        if($request->file('foto')->isValid()){
            $file = $request->file('foto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'img';
            $file->move($tujuan_upload,$nama_file);
        }else{
            $nama_file = '';
        }

        Barang::create([
            'nama' => $request->nama,
            'brand_id' => $request->brand_id,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'disc' => $request->disc,
            'foto' => $nama_file
        ]);

        return redirect(route('index'));
    }

    public function show(Barang $barang)
    {
        $judul = "Detail Data $barang->nama";
        return view('barang.show', compact('barang', 'judul'));
    }

    public function edit(Barang $barang)
    {
        $judul = "Edit Data Barang";
        $brands = Brand::all();
        return view('barang.edit', compact('barang', 'judul', 'brands'));
    }

    public function update(Request $request, Barang $barang)
    {
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'img';
            $file->move($tujuan_upload,$nama_file);
            unlink(public_path('img/'.$barang->foto));
        }else{
            $nama_file = $barang->foto;
        }

        $data = Barang::findOrFail($barang->id);
        $data->update([
            'nama' => $request->nama,
            'brand_id' => $request->brand_id,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'disc' => $request->disc,
            'foto' => $nama_file
        ]);
        return redirect(route('index'));
    }

    public function destroy(Barang $barang)
    {
        $data = Barang::findOrFail($barang->id);
        $data->delete();
        unlink(public_path('img/'.$barang->foto));
        return redirect(route('index'));
    }
}
