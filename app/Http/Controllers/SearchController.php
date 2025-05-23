<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request){

        $jobs = Jobs::where('title', 'like', '%' . request('q') . '%')
            ->with(['employer','tags'])
            ->get();
        // dd($jobs);
        // TODO: Add pagination, Search by tags
        return view('results', [
            "jobs"=> $jobs,
        ]);
    }
}
