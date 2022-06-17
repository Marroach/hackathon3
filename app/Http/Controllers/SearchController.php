<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Animal;


class SearchController extends Controller
{
    public function search(Request $request)
    {
        
        if ($request->has('search-owner')) {

            $search_term = $request->input('search-owner');

            $results = Owner::where('first_name', 'like', '%' . $search_term . '%')
                ->orderBy('first_name', 'asc')
                ->get();
                // dd($results);
        } elseif ($request->has('search-pet')) {

            $search_term = $request->input('search-pet');
            
            $results = Animal::where('name', 'like', '%' . $search_term . '%')
                ->orderBy('name', 'asc')
                ->get();

          
        } else{
              // no searching
              $search_term = '';
              $results = collect();
        }

        return view('search_result', [
            'search_term' => $search_term,
            'results' => $results
        ]);
    }
}
