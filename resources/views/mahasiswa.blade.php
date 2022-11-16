@extends('_snippets/main')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">NIM</th>
        <th scope="col">NAMA</th>
        <th scope="col">JP</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">TELEPON</th>
        <th scope="col">EMAIL</th>
        <th scope="col">JURUSAN</th>
        <th scope="col">AKSI</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mhs as $item)
            <tr>
                <td>{{ $item->nim_mahasiswa }}</td>
                <td>{{ $item->nama_mahasiswa }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->telepon }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->jurusan->nama }}</td>
                <td>
                    <a href="/mahasiswa/detail/{{ $item->id }}" class="btn btn-sm btn-secondary">detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection