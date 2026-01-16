@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Daftar Siswa</h4>
                <a href="{{ route('siswa.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus"></i> Tambah Siswa
                </a>
            </div>
            <div class="card-body">
                @if($siswas->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswas as $index => $siswa)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->kelas }}</td>
                                    <td>{{ Str::limit($siswa->alamat, 50) }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('siswa.show', $siswa->id) }}" 
                                               class="btn btn-info btn-sm">
                                                Detail
                                            </a>
                                            <a href="{{ route('siswa.edit', $siswa->id) }}" 
                                               class="btn btn-warning btn-sm">
                                                Edit
                                            </a>
                                            <form action="{{ route('siswa.destroy', $siswa->id) }}" 
                                                  method="POST" 
                                                  style="display: inline;"
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Setelah table -->
<div class="d-flex justify-content-center">{{ $siswas->links() }}</div>
                    </div>
                @else
                    <div class="text-center py-4">
                        <p class="text-muted">Belum ada data siswa.</p>
                        <a href="{{ route('siswa.create') }}" class="btn btn-primary">
                            Tambah Siswa Pertama
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection