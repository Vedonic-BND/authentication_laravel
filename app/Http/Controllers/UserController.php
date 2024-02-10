<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Hello from UserController';
    }

    public function show($id)
    {
        $data = array(
            "id" => $id,
            "name" => "Venn Edward Nicolas",
            "age" => 23,
            "email" => "vdnicolas@uc-bcf.edu.ph",
        );
        // return view('user', ['data' => $data]);
        return view('user', $data);
    }
}
