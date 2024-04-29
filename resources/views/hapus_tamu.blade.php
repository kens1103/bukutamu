<!-- resources/views/daftar_tamu.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tamu</title>
</head>
<body>
    <h1>Daftar Tamu</h1>    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Kategori</th>
            <th>Tujuan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data_tamu as $tamu)
            <tr>
                <td>{{ $tamu->id }}</td>
                <td>{{ $tamu->nama }}</td>
                <td>{{ $tamu->email }}</td>
                <td>{{ $tamu->alamat }}</td>
                <td>{{ $tamu->kategori }}</td>
                <td>{{ $tamu->tujuan }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
