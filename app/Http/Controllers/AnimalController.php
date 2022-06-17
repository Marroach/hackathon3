<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function pet_result($id) {
        // dd($id);
        return view('owner-pet', [
            'result' => Animal::findOrFail($id)
        ]);
    }
}
