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
        </tr>
        @foreach ($data_tamu as $tamu)
            <tr>
                <td>{{ $tamu->id }}</td>
                <td>{{ $tamu->nama }}</td>
                <td>{{ $tamu->email }}</td>
                <td>{{ $tamu->alamat }}</td>
                <td>{{ $tamu->kategori }}</td>
                <td>{{ $tamu->tujuan }}</td>
                <td>                                                                      
                    <a href="{{ route('edit_tamu', $tamu->id) }}">Edit</a>
                    <!-- Formulir untuk menghapus tamu -->
                    <form action="{{ route('hapus_tamu', $tamu->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus data tamu ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
