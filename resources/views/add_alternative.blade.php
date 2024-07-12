<!DOCTYPE html>
<html>
<head>
    <title>Tambah Alternatif</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Tambah Alternatif</h1>
    <form action="/add-alternative" method="POST">
        @csrf
        <label for="name">Nama Alternatif:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="location">Lokasi:</label>
        <input type="number" step="0.01" id="location" name="location" required><br>
        <label for="price">Harga:</label>
        <input type="number" step="0.01" id="price" name="price" required><br>
        <label for="geographical_condition">Kondisi Geografis:</label>
        <input type="number" step="0.01" id="geographical_condition" name="geographical_condition" required><br>
        <label for="environment">Lingkungan:</label>
        <input type="number" step="0.01" id="environment" name="environment" required><br>
        <button type="submit">Tambahkan</button>
    </form>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>
