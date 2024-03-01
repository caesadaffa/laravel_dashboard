<?php

namespace App\Http\Controllers;


use App\Models\sayurs;
use Illuminate\Http\Request;


class sayurController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view("pages.sayur.all",[
            "title"=>'Sayur',
            "sayurs"=>sayurs::all()]);
    }
    public function show($sayurs)
    {
        return view("pages.sayur.detail", [
            "title"=> "sayur",
            "sayurs"=> sayurs::find($sayurs)
            ]);
    }
}