<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Fakultas</title>
  <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    <div class="text-center">
        <h4>DATA FAKULTAS</h4>
        <br>
        ID: {{ $faculty->id }}
        <br>
        Nama Fakultas: {{ $faculty->name }}
        <br>
        Dekan: {{ $faculty->dean }}
        <br>
        Email: {{ $faculty->email }}
    </div>
</body>
</html>

