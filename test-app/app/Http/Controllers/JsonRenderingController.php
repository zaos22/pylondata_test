<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonRenderingController extends Controller
{
    public function index()
    {
        $jsonFileData = json_decode(file_get_contents(public_path('resultados.json')), true);
        return view('front-page')->with('jsonFileData', $jsonFileData);
    }
}
