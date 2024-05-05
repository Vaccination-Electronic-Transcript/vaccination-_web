<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\JobType;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function index()
    {
        $jobTypes = JobType::all();
        return view('parents.index', compact('jobTypes'));
    }

    public function create()
    {
        $jobTypes = JobType::all();
        return view('parents.create', compact('jobTypes'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ssn' => 'required',
            'id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'job_id' => 'required',
        ]);

        Parents::create($validatedData);

        return redirect()->route('parents.index')
            ->with('success', 'Parent created successfully.');
    }

    public function show(Parents $parents)
    {
        return view('parents.show', compact('parents'));
    }

    public function edit(Parents $parents)
    {
        return view('parents.edit', compact('parents'));
    }

    public function update(Request $request, Parents $parents)
    {
        $validatedData = $request->validate([
            'ssn' => 'required',
            'id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'job_id' => 'required',
        ]);

        $parents->update($validatedData);

        return redirect()->route('parents.index')
            ->with('success', 'Parent updated successfully.');
    }

    public function destroy(Parents $parents)
    {
        $parents->delete();

        return redirect()->route('parents.index')
            ->with('success', 'Parent deleted successfully.');
    }
}
