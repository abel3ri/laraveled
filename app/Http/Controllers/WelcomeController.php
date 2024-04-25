<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        return view("welcome");
    }
    public function hello(){
        return view("hello");
    }

    public function jsonRes(){
        return response()->json(data: ["status" => "success", "message" => "Hello From PHP JSON res."], status: 200);
    }
}
