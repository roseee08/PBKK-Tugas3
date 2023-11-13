<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Studyprogram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

class StudyprogramController extends Controller
{
    public function index()
    {
        $studyprograms = Studyprogram::all(); 
        return view('Prodi.index', compact('studyprograms'));
    }
    public function create(){
        $faculties = Faculty::all();
        return view('Prodi.create', compact('faculties'));
    }
    public function store(Request $request)
    {
    //1. validasi
    $request->validate([
        'name' => 'required|max:255',
        'faculty_id' => 'required|max:255',
        'accreditation' => 'required|max:25',
        'email' => 'required|max:255|unique:studyprograms,email', 
    ]);

    //2. masukan data ke database
    $studyprogram = new Studyprogram();

    $studyprogram->name = $request->name; 
    $studyprogram->faculty_id = $request->faculty_id;
    $studyprogram->accreditation= $request->accreditation;
    $studyprogram->email = $request->email;

    $studyprogram->save();

    //3. redirect
    return redirect()
        ->route('Prodi.index')
        ->with('pesan', 'Data berhasil disimpan');
    }

    public function show(Studyprogram $studyprogram)
    {
        return view('Prodi.show', compact('studyprogram'));
    }
    public function edit(Studyprogram $studyprogram)
    {
        $faculties = Faculty::all();
        return view('Prodi.edit', compact('studyprogram', 'faculties'));
    }
    public function update(Request $request, Studyprogram $studyprogram )
    {
        //1. validasi
        $request->validate([
            'name' => 'required|max:255',
            'faculty_id' => 'required|max:255',
            'accreditation' => 'required|max:25|',
            'email' => 'required|max:255|unique:studyprograms,email,' . $studyprogram->id,
        ]);

        //2. masukan data ke database

        $studyprogram->name = $request->name; 
        $studyprogram->faculty_id = $request->faculty_id;
        $studyprogram->accreditation = $request->accreditation;
        $studyprogram->email = $request->email;

        $studyprogram->save();

        //3. redirect
        return redirect()
            ->route('Prodi.index')
            ->with('pesan', 'Data berhasil disimpan');
    }
    public function destroy(Studyprogram $studyprogram)
    {
        $studyprogram->delete();

        return redirect()
            ->route('Prodi.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}

