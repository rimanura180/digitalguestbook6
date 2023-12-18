@extends('layout.app')

@section('content')
<div class="container">
    <h1>Daftar Mahasiswa</h1>
    @if (session('success'))
    <div class="alert alert-success">session('success')
    </div>
    @endif
    
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        {{ csrf_field() }}
        Nama: <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
        Alamat: <input type="text" name="alamat" placeholder="Alamat" required><br>
        Tanggal lahir: <input type="date" name="tanggal_lahir" required><br>
        <input type="submit" value="Submit">


    </form>
</div>

{{-- <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <br>

    <label for="alamat">Alamat:</label>
    <textarea id="alamat" name="alamat" required></textarea>

    <br>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

    <br>

    <input type="submit" value="Submit"> --}}

@endsection