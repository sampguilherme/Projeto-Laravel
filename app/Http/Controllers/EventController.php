<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){
        $name = "Ygor";

        $names = ["Ygor", "Matheus", "Gabriel", "Guilherme"];

        return view('welcome', 
            [
                'name' => $name,
                "names" => $names
            ]);
        }

    public function create() {
        return view('events.create');
    }

}
