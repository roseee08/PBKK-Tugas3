<form action="{{ route('Prodi.update', $studyprogram->id) }}" method="POST">
    @csrf
    @method('PUT')

    <link rel="stylesheet" href="{{ asset('css/createprodi.css') }}">

    <div>
        Nama Prodi:
        <input type="text" name="name" value="{{ old('name', $studyprogram->title) }}" />

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
