<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $judul = "Tambah Data Brand";
        return view("brand.create", compact('judul'));
    }

    public function store(Request $request)
    {
        Brand::create($request->all());
        toastr()->success("Berhasil menambah brand $request->nama");
        return redirect(route('index'));
    }

    public function show(Brand $brand)
    {
        //
    }

    public function edit(Brand $brand)
    {
        $judul = "Edit Data Brand";
        return view("brand.edit", compact('brand', 'judul'));
    }

    public function update(Request $request, Brand $brand)
    {
        $data = Brand::findOrFail($brand->id);
        $data->update(['nama' => $request->nama]);
        toastr()->success("Berhasil mengedit brand");
        return redirect(route('index'));
    }
    
    public function destroy(Brand $brand)
    {
        try {
            $data = Brand::findOrFail($brand->id);
            $data->delete();
            toastr()->success("Berhasil menghapus brand $brand->nama");
            return redirect(route('index'));
        } catch (\Throwable $th) {
            toastr()->error("Gagal menghapus brand $brand->nama");
            return redirect(route('index'));
        }
    }
}
