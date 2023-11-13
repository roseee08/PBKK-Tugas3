<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Fakultas</title>
  <link rel="stylesheet" href="{{ asset('css/showprodi.css') }}">
</head>
<body>
    <div class="text-center">
        <h4>DATA PRODI</h4>
        <br>

        Nama Prodi: {{ $studyprogram->name }}
        <br>
        Fakultas: {{ $studyprogram->faculty_id }}
        <br>
        Akreditasi: {{ $studyprogram->accreditation }}
        <br>
        Email: {{ $studyprogram->email }}
    </div>
</body>
</html>