<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request){

        $jobs = Jobs::where('title', 'like', '%' . request('q') . '%')->get();
        // dd($jobs);

        return view('results', [
            "jobs"=> $jobs,
        ]);
    }
}
