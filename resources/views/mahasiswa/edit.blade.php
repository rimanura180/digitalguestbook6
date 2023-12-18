@extends('layout.app')

@section('content')
<div class="container">
    <h1>Daftar Mahasiswa</h1>
    {{-- @if (session('success'))
    <div class="alert alert-success">session('success')
    </div>
    @endif --}}
    
    <form action="{{ route('mahasiswa.update', $mahasiswas->id ) }}" method="POST">
        @csrf
        @method('PUT')
        Nama: <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
        Alamat: <input type="text" name="alamat" placeholder="Alamat" required><br>
        Tanggal lahir: <input type="date" name="tanggal_lahir" required><br>
        <input type="submit" value="Update">

    </form>
</div>

@endsection