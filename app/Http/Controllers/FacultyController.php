<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

class FacultyController extends Controller
{
    public function index(){
        $faculties = Faculty::all();
        return view('Fakultas.index', compact('faculties'));
      
    }
    public function create(){
        return view('Fakultas.create');
    }
    public function store(Request $request)
    {
        //1. validasi
        $request->validate([
            'name' => 'required|max:255',
            'dean' => 'required|max:255|',
            'email' => 'required|max:255|unique:faculties,email',
        ]);

        //2. masukan data ke database
        $faculty = new Faculty();

        $faculty->name = $request->name; 
        $faculty->dean = $request->dean;
        $faculty->email = $request->email;

        $faculty->save();

        //3. redirect
        return redirect()
            ->route('Fakultas.index')
            ->with('pesan', 'Data berhasil disimpan');
    }
    public function show(Faculty $faculty)
    {
        return view('Fakultas.show', compact('faculty'));
    }
    public function edit(Faculty $faculty)
    {
        return view('Fakultas.edit', compact('faculty'));
    }
    public function update(Request $request, Faculty $faculty )
    {
        //1. validasi
        $request->validate([
            'name' => 'required|max:255',
            'dean' => 'required|max:255|',
            'email' => 'required|max:255|unique:faculties,email,' . $faculty->id,
        ]);

        //2. masukan data ke database

        $faculty->name = $request->name; 
        $faculty->dean = $request->dean;
        $faculty->email = $request->email;

        $faculty->save();

        //3. redirect
        return redirect()
            ->route('Fakultas.index')
            ->with('pesan', 'Data berhasil disimpan');
    }
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();

        return redirect()
            ->route('Fakultas.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}
