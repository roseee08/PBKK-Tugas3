<form action="{{ route('Fakultas.store') }}" method="POST">
    
    <h2><a href="{{ route('Fakultas.index') }}">Data Fakultas</a></h2>
    @csrf
    <br>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <div>
        <label for="name">ID:</label>
        <input type="text" name="id" value="{{ old('id') }}" />
        <br>
        @error('id')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Nama Fakultas:
        <input type="text" name="name" value="{{ old('name') }}" />
        <br>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Dekan:
        <input type="text" name="dean" value="{{ old('dean') }}" />
        <br>
        @error('dean')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Email:
        <input type="text" name="email" value="{{ old('email') }}" />
        <br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value="Simpan">
    </div>
    <br>
</form>

