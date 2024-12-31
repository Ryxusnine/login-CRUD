@extends('layout')
@section('content')
    <div class="container rounded bg-white my-5 p-5">
        @session('alert.berhasil')
                    <div class="alert alert-success alert-dismissible" role="alert">
                    Data Berhasil Ditambahkan!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endsession
        <h3>Tambah Data Mahasiswa Teknik</h3>
        <form action="{{route('addmahasiswa.store')}}" method="POST">
            @csrf
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Silahkan Isi nama Anda">
                @error('nama')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('nama') }}
                        </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlReadOnlyInput1" class="form-label">NIM</label>
                <input name="nim" class="form-control @error('nim') is-invalid @enderror" type="text" id="exampleFormControlReadOnlyInput1" placeholder="Silahkan Isi NIM Anda">
                @error('nim')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('nim') }}
                        </div>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Pilih Program Studi</label>
                  <select name="prodi" class="form-select @error('prodi') is-invalid @enderror" id="exampleFormControlSelect1" aria-label="Default select example">
                      <option selected="" disabled>- Pilih -</option>
                      <option value="Teknik Industri">Teknik Industri</option>
                      <option value="Teknik Mesin">Teknik Mesin</option>
                      <option value="Teknik Elektro">Teknik Elektro</option>
                      <option value="Teknik Informatika">Teknik Informatika</option>
                      <option value="Teknik Sipil">Teknik Sipil</option>
                    </select>
                    @error('prodi')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('prodi') }}
                        </div>
                @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlReadOnlyInput1" class="form-label">Email</label>
                  <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" id="exampleFormControlReadOnlyInput1" placeholder="Silahkan Isi Email Anda">
                  @error('email')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('email') }}
                        </div>
                @enderror
                </div>
              <div>
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlTextarea1" rows="2" placeholder="Silahkan Isi Alamat Lengkap Anda"></textarea>
                @error('alamat')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('alamat') }}
                        </div>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
@endsection