<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        @foreach($mahasiswa as $mhs)
            <li>{{ $mhs->nama }} - {{ $mhs->nim }}</li>
        @endforeach
    </ul>
</body>
</html>