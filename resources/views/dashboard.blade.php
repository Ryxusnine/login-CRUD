<title>Naina - Dashboard</title>
@extends('layout')
@section('content')
    <div class="container bg-white rounded my-5">
        <div class="d-flex align-items-end row">
            <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title text-primary">Haloo {{ auth()->user()->username }}! 🎉</h5>
                    <p class="mb-4">
                        Selamat kamu berhasil login.
                    </p>
                </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User"
                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                        data-app-light-img="illustrations/man-with-laptop-light.png">
                </div>
            </div>
        </div>
    </div>

    <div class="container rounded mb-5 bg-white">
        @if (auth()->user()->role == 1)
            <a href="{{ route('addmahasiswa.index') }}" class="btn btn-success mx-auto align-left mt-4">Tambah Data</a>
            <a href="{{ route('generate.pdf') }}" class="btn btn-warning mx-auto align-left mt-4">Unduh PDF</a>
        @endif

        @session('alert.berhasil')
            <div class="alert alert-success alert-dismissible mt-3" role="alert">
                Data Berhasil Ditambahkan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession
        @session('alert.edit')
            <div class="alert alert-primary alert-dismissible mt-3" role="alert">
                Data Berhasil Diupdate!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession
        @session('alert.destroy')
            <div class="alert alert-danger alert-dismissible mt-3" role="alert">
                Data Berhasil Dihapus!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession

        <h5 class="card-header">Data Mahasiswa</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Program Studi</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        @if (auth()->user()->role == 1)
                            <th>Actions</th>
                        @endif
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($datamhs as $datamahasiswa)
                        <tr>
                            <td style="white-space: wrap">{{ $no++ }}</td>
                            <td>{{ $datamahasiswa->nama }}</td>
                            <td>{{ $datamahasiswa->nim }}</td>
                            <td>{{ $datamahasiswa->prodi }}</td>
                            <td>{{ $datamahasiswa->email }}</td>
                            <td>{{ $datamahasiswa->alamat }}</td>
                            @if (auth()->user()->role == 1)
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item"
                                                href="{{ route('addmahasiswa.edit', $datamahasiswa->id) }}">
                                                <i class="bx bx-edit-alt me-1"></i> Edit
                                            </a>
                                            <a class="dropdown-item"
                                                href="{{ route('addmahasiswa.delete', $datamahasiswa->id) }}">
                                                <i class="bx bx-trash me-1"></i>Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
