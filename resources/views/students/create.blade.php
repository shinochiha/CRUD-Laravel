@extends('layout.main')

@section('title', 'Form Tambah data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah data Mahasiswa</h1>

                <form method="post" action="/students">
                  @csrf
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" placeholder="Masukan Nama" value="{{ old('name') }}" name="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="number" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan Nrp" value="{{ old('nrp') }}" name="nrp">
                    @error('nrp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" value="{{ old('email') }}" name="email">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="jurusan">jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan" value="{{ old('jurusan') }}" name="jurusan">
                    @error('jurusan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection