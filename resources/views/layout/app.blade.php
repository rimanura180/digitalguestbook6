<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documents</title>
</head>
<body>
    <div class="container">
    <h1>Daftar Mahasiswa</h1>
    <br>
    <a href= "{{ route('mahasiswa.index') }}" class="btn btn-primary">Home</a>
    <a href= "{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambahkan Mahasiswa</a>
    @yield('content')
    </div>
</body>
</html>