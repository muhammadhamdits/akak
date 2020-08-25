@extends('../app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <img src="{{ url('img/'.$barang->foto) }}" alt="">
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $barang->nama }}" disabled class="form-control none">
        </div>
        <div class="form-group">
            <label for="brand_id">Brand</label>
            <input type="text" name="brand_id" id="brand_id" value="{{ $barang->brand->nama }}" disabled class="form-control none">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" value="{{ $barang->harga }}" disabled class="form-control none">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" value="{{ $barang->stok }}" disabled class="form-control none">
        </div>
        <div class="form-group">
            <label for="disc">Disc</label>
            <input type="text" name="disc" id="disc" value="{{ $barang->disc }}" disabled class="form-control none">
        </div>
        <div class="form-group">
            <a class="btn btn-primary float-right" href="{{ route('index') }}">Back</a>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $($('img')[0]).width($($('img')[0]).parent().width());
</script>
@endsection