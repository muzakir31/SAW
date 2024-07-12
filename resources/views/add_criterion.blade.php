<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kriteria</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Tambah Kriteria</h1>
    <form action="/add-criterion" method="POST">
        @csrf
        <label for="name">Nama Kriteria:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="weight">Bobot:</label>
        <input type="number" step="0.01" id="weight" name="weight" required><br>
        <button type="submit">Tambahkan</button>
    </form>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>
