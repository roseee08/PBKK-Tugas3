<form action="{{ route('Prodi.store') }}" method="POST">
    <h2><a href="{{ route('Prodi.index') }}">Data Program Studi</a></h2>

    @csrf
    <br>
    <link rel="stylesheet" href="{{ asset('css/createprodi.css') }}">
    <div>

    <div>
        Nama Prodi:
        <input type="text" name="name" value="{{ old('name') }}" />

        <br>

        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Fakultas:
        <select name="faculty_id">
            @foreach ($faculties as $faculty)
                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
            @endforeach
        </select>

        <br>

        @error('faculty')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Akreditasi:
        <input type="text" name="accreditation" value="{{ old('accreditation') }}" />

        <br>

        @error('accreditation')
            <p>{{ $message }}</p>
        @enderror
    </div>
        Email:
        <input type="text" name="email" value="{{ old('email') }}" />

        <br>

        @error('email')
            <p>{{ $message }}</p>
        @enderror
    <div>
        <input type="submit" value="Simpan">
    </div>
</form>
