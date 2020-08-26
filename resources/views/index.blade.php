@extends('app')

@section('content')
<div class="row content">
    <div class="col-12" id="tabelBarang" style="display: none">
        <a class="btn btn-primary float-right mb-3" href="{{ route('barang.create') }}"><i class="fa fa-plus mr-1"></i> Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Brand</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $barang)
                <tr>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->brand->nama }}</td>
                    <td class="text-center">
                        <a href="{{ route('barang.show', [$barang]) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('barang.edit', [$barang]) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('barang.destroy', [$barang]) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin menghapus data ini?')" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
    </div>
    <div class="col-12" id="tabelBrand" style="display: none">
        <a class="btn btn-primary float-right mb-3" href="{{ route('brand.create') }}"><i class="fa fa-plus mr-1"></i> Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                <tr>
                    <td>{{ $brand->nama }}</td>
                    <td class="text-center">
                        <a href="{{ route('brand.edit', [$brand]) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('brand.destroy', [$brand]) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin menghapus data ini?')" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
    </div>
</div>
@endsection

@section('js')
<script>
    $(".table").DataTable({
        "dom": 'ftipr'
    });

    $(".indeks").show();
    $("#tabelBarang").show();
    $("#tabelBrand").hide();
    $(".kiri").attr('disabled', true);

    $(".kanan").on("click", function(){
        $("#tabelBarang").hide();
        $("#tabelBrand").show();
        $(".kiri").attr('disabled', false);
        $(".kanan").attr('disabled', true);
        $(".judul").html("Brand");
    });

    $(".kiri").on("click", function(){
        $("#tabelBarang").show();
        $("#tabelBrand").hide();
        $(".kiri").attr('disabled', true);
        $(".kanan").attr('disabled', false);
        $(".judul").html("Barang");
    });
</script>
@endsection