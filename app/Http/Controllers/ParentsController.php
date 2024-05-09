<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\JobType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Log;
class ParentsController extends Controller
{
    public function index()
    {
        $jobTypes = JobType::all();
        $parents = Parents::all();
        return view('parents.index', compact('parents','jobTypes'));
    }
    public function create()
    {
        $parents = Parents::all();
        $jobTypes = JobType::all();
        return view('parents.create')->with('jobTypes', $jobTypes);
    }


    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'ssn' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'phone' => 'required',
        'gender' => 'required|in:male,female',
        'job_id' => 'required|exists:job_type,job_id',
    ]);


    // Create a new ParentModel instance and fill it with the validated data
    $parent = new Parents();
    $parent->fill($validatedData);
    $parent->save();

    // Redirect to parents.create route
    return redirect()->route('followUp.create');
}


public function show($ssn)
{
    $parent = Parents::where('ssn', $ssn)->firstOrFail(); // Retrieve a parent by SSN
    return view('parents.show', ['parent' => $parent]);
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
            'job_id' => [
                'required',
                Rule::exists('job_types', 'id')->where(function ($query) {
                    return $query->where('id', request('job_id'));
                }),
            ],
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
