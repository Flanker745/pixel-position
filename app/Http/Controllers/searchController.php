<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function __invoke()
    {
      $jobs =   Job::where("title" ,"LIKE" , "%".request('s')."%" )->get();
      return view("Jobs.search" , [
        "jobs" => $jobs
      ]);

    }
}