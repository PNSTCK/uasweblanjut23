@extends('layout.be.template')
@section('title', 'Data Mid ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('mid-create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Data
                </a>
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Data Chasier</strong></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="text-align: center">
                                    <th>No</th>
                                    <th>judul ujian</th>
                                    <th>Isi Ujian</th>
                                    <th>Penulisan Soal</th>
                                    <th>Keterangan</th>
                                    <th>Tahun Ujian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr style="text-align: center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->judul_ujian }}</td>
                                        <td>{{ $row->isi_ujian }}</td>
                                        <td>{{ $row->penulis_soal }}</td>
                                        <td>{{ $row->keterangan }}</td>
                                        <td>{{ $row->tahun_ujian }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('mid-delete', $row->id) }}">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                                <a href="{{ route('mid-edit', $row->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
