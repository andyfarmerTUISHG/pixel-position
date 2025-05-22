<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobsRequest;
use App\Http\Requests\UpdateJobsRequest;
use App\Models\Jobs;
use App\Models\Tag;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Jobs::all()->groupBy('featured');

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobsRequest $request, Jobs $jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jobs $jobs)
    {
        //
    }
}
