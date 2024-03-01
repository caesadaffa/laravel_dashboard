<?php

namespace App\Http\Controllers;

use App\Models\buah;
use Illuminate\Http\Request;

class buahController extends Controller
{
    public function index()
    {
        return view ('buah.all', [
            "title" => "buah",
        ]);
    }

    public function create() {
        return view ('grade.create', [
            'title' => 'Add Data',
        ]);
    }

    public function add(Request $request) {
        $validateData = $request->validate([
            "kelas_siswa" => "required"
        ]);

        $result = buah::create($validateData);
        if($result) {
            return redirect('/grade/all')->with('success', 'Data kelas berhasil ditambahkan');
        }
    }

    public function edit(buah $buah) 
    {
        return view('grade.edit', [
            'title' => 'Edit Data',
            'grades' => $buah
        ]);
    }

    public function update(Request $request, buah $buah) {
        $validateData = $request->validate([
            "buah_" => "required",
        ]);

        $result = buah
        ::where('id', $buah->id)->update($validateData);
        if($result) {
            return redirect('/grade/all')->with('success', 'Data kelas berhasil diubah !');
        }
    }

    public function destroy(buah $buah) 
    {
        $result = buah::destroy($buah->buah_id);
        
        if($result) {
            return redirect('/grade/all')->with('success', 'Data berhasil dihapus !');
        }
    }

    public function show($buah)
    {
        return view ('grade.detail', [
            'title' => 'detail-grides',
            'grides' => $buah::find($buah)
        ]);
    }
}