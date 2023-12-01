@extends('layout.be.template')
@section('title', 'Tambah Chasier ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Tambah Data nama</strong>
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

                        <form action="{{ route('product-store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control ">
                            </div>
                            <div class="mb-3">
                                <label for="">Descrition</label>
                                <input type="text" name="descrition" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="">Price</label>
                                <input type="double" name="price" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="">Category</label>

                                <select name="categori_id" class="form-select">
                                    @foreach ($data_category as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="category_id" class="form-control" > --}}
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
