<?php

namespace App\Http\Controllers;

use App\Models\img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator as ValidationValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\File;
use Illuminate\Support\Facades\File as FacadesFile;

class imgController extends Controller
{
    public function index(Request $req)
    {
        $data = img::find(10);
        $img = $data->image;
        return view('show', ["img" => $img]);
    }
    public function store1(Request $req)
    {
        $size = $req->file('image')->getSize();
        $name = $req->file('image')->getClientOriginalName();
        $ext =  $req->file('image')->getClientOriginalExtension();
        $req->file('image')->storeAs('public/images/', $name);
        $imgObj = new img();
        $imgObj->image = $name;
        $imgObj->save();
        return redirect()->back();
    }
    public function update(Request $req)
    {

        dd($req);
        $name = $req->name;
        // return $img;
    }
}
