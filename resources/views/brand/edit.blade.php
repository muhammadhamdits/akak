@extends('../app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="{{ route('brand.update', [$brand]) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required value="{{ $brand->nama }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right ml-2">Submit</button>
                <a class="btn btn-secondary float-right" href="{{ route('index') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection