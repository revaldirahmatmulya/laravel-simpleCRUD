@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Simple CRUD</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">

                <a href="" class="btn btn-primary mb-3">Add New Data</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataSiswa as $siswa)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>{{ $siswa->no_telp }}</td>
                                <td>{{ $siswa->email }}</td>

                                <td>
                                    <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                    <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
