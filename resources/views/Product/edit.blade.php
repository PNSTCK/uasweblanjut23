@extends('layout.be.template')
@section('title', 'Tambah tambah product ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Edit Data Mid</strong>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('product-update', $data->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control " value="{{ $data->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Descrition</label>
                                <input type="text" name="descrition" class="form-control" value="{{ $data->descrition }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Price</label>
                                <input type="double" name="price" class="form-control" value="{{ $data->price }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Category id</label>
                                <input type="text" name="category_id" class="form-control" value="{{ $data->category_id }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="{{ route('product-index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
