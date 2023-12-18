{{-- 

Menampilkan salah satu field 
@foreach ($mahasiswas as $item)
        {{ $item->nama }}
@endforeach 

--}}

@extends('layout.app')

@section('content')
<div>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped"  border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $item)
            <tr>
                <td>{{ $item->id }} </td>
                <td>{{ $item->nama }} </td>
                <td>{{ $item->alamat }} </td>
                <td>{{ $item->tanggal_lahir }} </td>
                <td>
                    <a href="{{  route('mahasiswa.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{  route('mahasiswa.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection