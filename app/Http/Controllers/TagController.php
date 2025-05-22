<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag){

        // Get all jobs associated with the tag
    //    $jobs = $tag->Job();
        // dd($tag);
        // TODO: Add pagination, Search by tags
        return view('results', [
            "jobs"=> $tag->jobs,
        ]);
    }
}
