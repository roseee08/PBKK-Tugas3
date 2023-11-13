<form action="{{ route('Fakultas.update', $faculty->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

    <div>
        <label for="id">ID:</label>
        <input type="text" name="id" value="{{ old('id', $faculty->id) }}" />
        <br>
        @error('id')
            <p>{{ $message }}</p>
        @enderror
    </div>
    
    <div>
        Nama Fakultas:
        <input type="text" name="name" value="{{ old('name', $faculty->name) }}" />
        <br>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Dekan:
        <input type="text" name="dean" value="{{ old('dean', $faculty->dean) }}" />
        <br>
        @error('dean')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Email:
        <input type="text" name="email" value="{{ old('email',$faculty->email) }}" />
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

