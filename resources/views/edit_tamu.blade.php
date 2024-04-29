<!-- resources/views/edit_tamu.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tamu</title>
</head>
<body>
    <h1>Edit Tamu</h1>
    <form action="{{ route('daftar_tamu', $tamu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ $tamu->nama }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $tamu->email }}" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="{{ $tamu->alamat }}" required>

        <label for="kategori">Kategori:</label>
        <input type="text" id="kategori" name="kategori" value="{{ $tamu->kategori }}" required>

        <label for="tujuan">Tujuan:</label>
        <input type="text" id="tujuan" name="tujuan" value="{{ $tamu->tujuan }}" required>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>