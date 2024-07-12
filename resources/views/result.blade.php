<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan SAW</title>
</head>
<body>
    <h1>Hasil Perhitungan SAW</h1>
    <div>
        @foreach ($alternatives as $alternative)
            <p>{{ $alternative->name }} - Score: {{ $scores[$alternative->id] }}</p>
        @endforeach
    </div>
</body>
</html>
