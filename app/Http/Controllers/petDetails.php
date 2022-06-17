<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class petDetails extends Controller
{
    
    function show(){
        $data= Animal::all();
        return view('pet', ['animals'=> $data]);
    }
}
