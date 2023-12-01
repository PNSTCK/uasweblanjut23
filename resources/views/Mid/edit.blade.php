@extends('layout.be.template')
@section('title', 'Tambah Supplier ')

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

                        <form action="{{ route('mid-update', $data->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="">Judul Ujian</label>
                                <input type="text" name="judul_ujian" class="form-control " value="{{ $data->judul_ujian }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Isi Ujian</label>
                                <input type="text" name="isi_ujian" class="form-control" value="{{ $data->isi_ujian }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Penulis Soal</label>
                                <input type="text" name="penulis_soal" class="form-control" value="{{ $data->penulis_soal }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" value="{{ $data->keterangan }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Tahun Ujian</label>
                                <input type="number" name="tahun_ujian" class="form-control" value="{{ $data->tahun_ujian }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                            <a href="{{ route('mid-index') }}" class="btn btn-danger">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
