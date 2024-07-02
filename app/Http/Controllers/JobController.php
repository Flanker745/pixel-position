<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->get();

        $featuredJob = Job::latest()->where('featured' , true)->get();
        return view("Jobs.index",[
            "jobs" => $jobs,
            "featuredJob" => $featuredJob,
            "tags"=> Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        "title" => "required",
        "salary" => "required",
        "location" => "required",
        "schedule" => "required",
        "workTime" => "required",
        "url" => "required|active_url",
        "tags" => "nullable"
    ]);

    // Set the featured value
    $featured = $request->has('featured') ? true : false;

    // Merge the featured value into the validated data
    $validatedData['featured'] = $featured;
    $job = Auth::user()->employer->jobs()->create(Arr::except($validatedData, "tags"));
    if($validatedData['tags'] ?? false){
        foreach(explode(",", $validatedData["tags"]) as $tag){
            $job->tag(trim($tag));
        }
    }
    return redirect("/");
}

}
