@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Edit Data Siswa</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text"
                               class="form-control"
                               id="nama"
                               name="nama"
                               value="{{ $siswa->nama }}"
                               placeholder="Masukkan nama lengkap siswa"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text"
                               class="form-control"
                               id="kelas"
                               name="kelas"
                               value="{{ $siswa->kelas }}"
                               placeholder="Contoh: XII PPLG 1, XII PPLG 2"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control"
                                  id="alamat"
                                  name="alamat"
                                  rows="4"
                                  placeholder="Masukkan alamat lengkap siswa"
                                  required>{{ $siswa->alamat }}</textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Update Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection