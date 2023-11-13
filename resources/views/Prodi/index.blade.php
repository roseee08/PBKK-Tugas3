<link rel = "stylesheet" href="{{asset ('css/styleprodi.css') }}">

<h1>DAFTAR PRODI</h1>
<h2><a href="{{ route('Prodi.create') }}">Tambah</a>
    @if (session()->has('pesan'))
        <div style="color: green;">
            {{ session()->get('pesan') }}
    @endif </h2>
@show
@foreach ($studyprograms as $studyprogram)
    <div>
        Nama Prodi: {{ $studyprogram->name }}
        <br>
        Fakultas: {{ $studyprogram->faculty->name ??'Tidak Ada Fakultas' }}
        <br>
        Akreditasi: {{ $studyprogram->accreditation }}
        <br>
        Email: {{ $studyprogram->email }}
        <br>
        <a href="{{ route('Prodi.show', $studyprogram->id) }}">Lihat</a>
        <a href="{{ route('Prodi.edit', $studyprogram->id) }}">Edit</a>

        <form action="{{ route('Prodi.destroy', $studyprogram->id) }}" method="post">
            @csrf
            @method('DELETE')

            <input type="submit" value="Hapus">
        </form>
    </div>

    <hr>
@endforeach
