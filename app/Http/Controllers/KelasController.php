<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    public function index(Request $request) 
    {
        $filterSearch = request('search');

        $kelass = kelas::where('kelas', 'like', '%' . $filterSearch . '%')->get();

        return view ('kelas.all', [
            "title" => "Kelas",
            "kelass" => $kelass,
        ]);
    }

    public function show($kelas)
    {
        return view ('kelas.detail', [
            "title" => "detail-kelas",
            "kelas" => kelas::find($kelas),
        ]);
    }

    public function create() 
    {
        return view ('kelas.create', [
            "title" => "Kelas",
            "kelass" => kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kelas' => 'required|max:255',
        ]);

        $result = kelas::create($validateData);
        if ($result) {
            return redirect('/kelas')->with('success', 'Data berhasil ditambahkan !');
        }
    }

    public function destory(kelas $kelas) 
    {
        $result = kelas::destroy($kelas->id);
        if ($result) {
            return redirect('/kelas')->with('success', 'Data berhasil dihapus !');
        }
    }

    public function edit(kelas $kelas)
    {
        return view ('kelas.edit', [
            "title" => "edit-data",
            "kelas" => $kelas,
        ]);
    }

    public function update(Request $request, kelas $kelas)
    {
        $validateData = $request->validate([
            'kelas' => 'required|max:255',
        ]);

        $result = kelas::where('id', $kelas->id)->update($validateData);
        if ($result) {
            return redirect('/kelas')->with('success', 'Data berhasil diubah !');
        }
    }
}
