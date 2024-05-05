<?php

namespace App\Http\Controllers;
use App\Models\JobType; // Make sure to import the JobType model

use Illuminate\Http\Request;

class JobTypeController extends Controller
{

public function index()
{
    $jobTypes = JobType::all(); // Assuming you want to fetch all job types
    return view('parents', compact('jobTypes'));
}

}
