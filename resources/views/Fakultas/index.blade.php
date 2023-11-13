<link rel = "stylesheet" href="{{asset ('css/style.css') }}">

<h1>Daftar Fakultas</h1>
<h2><a href="{{ route('Fakultas.create') }}">Tambah</a>
    @if (session()-> has('pesan'))
        <div style="color:rgb(0, 0, 0)">
            {{session()->get('pesan')}}
    @endif </h2>
@show
@foreach ($faculties as $faculty) 
    <div class="Fakultas-item">
        <div>
            ID: {{ $faculty->id }}
            <br>
            Nama Fakultas: {{ $faculty->name }}
            <br>
            Deakan: {{$faculty->email }}
            <br>
            Email: {{ $faculty->email }}
        </div>
        <div>
            <a href="{{ route('Fakultas.show', $faculty->id) }}">Lihat</a>
            <a href="{{ route('Fakultas.edit', $faculty->id) }}">Edit</a>
           
            <form action="{{ route('Fakultas.destroy', $faculty->id) }}" method="post" class="delete-form">
                @csrf
                @method('DELETE')
                <input type="submit" value="Hapus">
            </form>
        </div>
    </div>
    <hr>
@endforeach
