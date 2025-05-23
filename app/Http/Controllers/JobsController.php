<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Jobs::latest()->with(['employer','tags'])->get()->groupBy('featured');

        $tags = Tag::all();
        return view('jobs.index', [
            "jobs" => $jobs[0],
            "featuredJobs" => $jobs[1],
            "tags" => $tags,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            "title" => ["required","string","max:255"],
            "salary" => ["required"],
            "location" => ["required"],
            "schedule" => ["required", Rule::in("Full Time", "Part Time")],
            "url" => ["required","url"],
            "tags" => ['nullable'],
        ]);

        $attributes['featured'] = $request->has("featured");

        // Get the logged user employer
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, "tags"));

        //Deal with Tags
        if ($attributes['tags'] ?? false){
            foreach(explode(",", $attributes['tags']) as $tag){
                $job->tag($tag);
            }
        }

        return redirect("/");
    }


}
