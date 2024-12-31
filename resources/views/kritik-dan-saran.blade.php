<title>Naina - Kritik & Saran</title>
@extends('layout')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="h1">Kritik dan Saran</div>
        @if (auth()->user()->role == 2)
            <div class="card">
                <div class="p-3">
                    <div class="card-body">
                        @session('alert.berhasil')
                            <div class="alert alert-success alert-dismissible" role="alert">
                                Data Berhasil Ditambahkan!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endsession
                        <form action="{{ route('kritikdansaran.store') }}" method="POST">
                            @csrf
                            <label class="mb-2">Masukkan Kritik dan Saran Anda</label>
                            <textarea class="form-control mb-3 @error('komentar') is-invalid @enderror" id="" cols="30" rows="10"
                                name="komentar"></textarea>
                            @error('komentar')
                                <div class="invalid-feedback mb-2">
                                    {{ $errors->first('komentar') }}
                                </div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        <div class="card mt-3 p-3">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Kritik Dan Saran</th>
                            <th>Created_At</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($komentar as $datakomentar)
                            <tr>
                                <td>{{ $datakomentar->username }}</td>
                                <td>{{ $datakomentar->komentar }}</td>
                                <td>{{ $datakomentar->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
