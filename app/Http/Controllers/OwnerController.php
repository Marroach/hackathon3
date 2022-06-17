<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;



class OwnerController extends Controller
{
    public function owner_result($id) {
        // dd($id);
        return view('owner-pet', [
            'result' => Owner::findOrFail($id)
        ]);
    }
}
