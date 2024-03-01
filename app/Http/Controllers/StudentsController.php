<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\kelas;

class StudentsController extends Controller
{
    public function index() 
    {
        $filterSearch = request('search');

        $students = students::where('nama', 'like', '%' . $filterSearch . '%')->get();

        return view ('student.all', [
            "title" => "Students",
            "students" => $students,
        ]);
    }

    public function show($student)
    {
        return view ('student.detail', [
            "title" => "detail-student",
            "student" => students::find($student),
        ]);
    }

    public function create() 
    {
        return view ('student.create', [
            "title" => "Students",
            "kelass" => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis'           => 'required|max:255',
            'nama'          => 'required|max:255',
            'tanggal_lahir' => 'required',
            'kelas_id'      => 'required',
            'alamat'        => 'required',
        ]);

        $result = students::create($validateData);
        if ($result) {
            return redirect('/student')->with('success', 'Data berhasil ditambahkan !');
        }
    }

    public function destory(students $student) 
    {
        $result = students::destroy($student->id);
        if ($result) {
            return redirect('/student')->with('success', 'Data berhasil dihapus !');
        }
    }

    public function edit(students $student)
    {
        return view ('student.edit', [
            "title" => "edit-data",
            "student" => $student,
            "kelass" => kelas::all()
        ]);
    }

    public function update(Request $request, students $student)
    {
        $validateData = $request->validate([
            'nis'           => 'required|max:255',
            'nama'          => 'required|max:255',
            'tanggal_lahir' => 'required',
            'kelas_id'      => 'required',
            'alamat'        => 'required',
        ]);

        $result = students::where('id', $student->id)->update($validateData);
        if ($result) {
            return redirect('/student')->with('success', 'Data berhasil diubah !');
        }
    }
}
