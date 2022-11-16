@extends('_snippets/main')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">{{ $mhs->jurusan->nama }}</h6>
            <h5 class="card-title">{{ $mhs->nama_mahasiswa }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $mhs->nim_mahasiswa }} - {{ $mhs->jenis_kelamin }}</h6>
            <p class="card-text">{{ $mhs->alamat }}</p>
            <a href="#" class="card-link">{{ $mhs->telepon }} {{ $mhs->email }}</a>
            </div>
        </div>
    </div>
</div>
@endsection