@extends('../app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="{{ route('barang.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama*</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="brand_id">Brand*</label>
                <select name="brand_id" id="brand_id" class="form-control" required>
                    <option value="" selected disabled>Pilih brand...</option>
                    @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" id="stok" class="form-control">
            </div>
            <div class="form-group">
                <label for="disc">Disc</label>
                <input type="number" name="disc" id="disc" class="form-control" step="0.01">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right ml-2">Submit</button>
                <a class="btn btn-secondary float-right" href="{{ route('index') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection