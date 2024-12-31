@extends('layout')
@section('content')
    <div class="container rounded bg-white my-5 p-5">
        <h3>Edit Data Mahasiswa Teknik</h3>
        <form action="{{ route('addmahasiswa.update', $datamhs->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                        id="exampleFormControlInput1" placeholder="Silahkan Isi nama Anda"
                        value="{{ old('nama', $datamhs->nama) }}">
                    @error('nama')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('nama') }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">NIM</label>
                    <input name="nim" class="form-control @error('nim') is-invalid @enderror" type="text"
                        id="exampleFormControlReadOnlyInput1" placeholder="Silahkan Isi NIM Anda"
                        value="{{ old('nama', $datamhs->nim) }}">
                    @error('nim')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('nim') }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Pilih Program Studi</label>
                    <select name="prodi" class="form-select @error('prodi') is-invalid @enderror"
                        id="exampleFormControlSelect1" aria-label="Default select example">
                        <option {{ old('prodi', $datamhs->prodi) == '' ? 'selected' : '' }} disabled>- Pilih -</option>
                        <option {{ old('prodi', $datamhs->prodi) == 'Teknik Industri' ? 'selected' : '' }}
                            value="Teknik Industri">Teknik Industri</option>
                        <option {{ old('prodi', $datamhs->prodi) == 'Teknik Mesin' ? 'selected' : '' }}
                            value="Teknik Mesin">Teknik Mesin</option>
                        <option {{ old('prodi', $datamhs->prodi) == 'Teknik Elektro' ? 'selected' : '' }}
                            value="Teknik Elektro">Teknik Elektro</option>
                        <option {{ old('prodi', $datamhs->prodi) == 'Teknik Informatika' ? 'selected' : '' }}
                            value="Teknik Informatika">Teknik Informatika</option>
                        <option {{ old('prodi', $datamhs->prodi) == 'Teknik Sipil' ? 'selected' : '' }}
                            value="Teknik Sipil">Teknik Sipil</option>
                    </select>
                    @error('prodi')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('prodi') }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlReadOnlyInput1" class="form-label">Email</label>
                    <input name="email" class="form-control @error('email') is-invalid @enderror" type="email"
                        id="exampleFormControlReadOnlyInput1" placeholder="Silahkan Isi Email Anda"
                        value="{{ old('email', $datamhs->email) }}">
                    @error('email')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('email') }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlTextarea1"
                        rows="2" placeholder="Silahkan Isi Alamat Lengkap Anda">{{ old('alamat', $datamhs->alamat) }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback mb-2">
                            {{ $errors->first('alamat') }}
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
@endsection
