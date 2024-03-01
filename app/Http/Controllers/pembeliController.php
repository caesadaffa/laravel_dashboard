<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use Illuminate\Http\Request;

class pembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pages.pembeli.all", [
            "title"=>"pembeli",
            "pembeli"=>pembeli::all()
        ]);
    }

    public function show($pembeli)
    {
        return view("pages.pembeli.detail", [
            "title"=> "pembeli",
            "pembeli"=> pembeli::find($pembeli)
            ]);
    }
}
