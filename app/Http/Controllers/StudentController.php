<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentController extends Controller
{
    public function index()
{
    $students = students::all();

    return view('student.all', [
        "title" => "Students",
        "students" => $students
    ]);
}
    public function show($student){
        return view('student.detail',[
            "title" => "Student-detail",
            "students" => students::find($student)
        ]
        );
    }
    public function create (){
        return view('student.create',[
            "title" => "Student-create",
        ]
        );
    }
    public function store (Request $request){

        $validateData = $request->validate([
            'nis' => 'required|max:225',
            'nama' => 'required|max:225',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);        
        
        $result = students::create($validateData);
        if ($result) {
            return redirect('/student/all')->with('success','data siswa berhasil di tambahkan');
        } 
    }
    public function destroy(students $student){
       $result = students::destroy($student->id);
       if ($result) {
        return redirect('/student/all')->with('success', 'Data berhasil di hapus');
       }
    }
    public function edit(students $student){
        return view('student.edit',[
            "title" => "edit-data",
            "student" => $student
        ]);
     }
     public function update(Request $request, students $student){
        $validateData = $request->validate([
            'nis' => 'required|max:225',
            'nama' => 'required|max:225',
            'tanggal_lahir' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        // Update the student data
        $result = students::where('id', $student->id)->update($validateData);

        // Check if the update was successful
        if ($result) {
            return redirect('/student/all')->with('success', 'Data siswa berhasil diupdate');
        } else {
            // If the update fails, you might want to handle it accordingly
            return redirect('/student/all')->with('error', 'Gagal mengupdate data siswa');
        }
    }
}
