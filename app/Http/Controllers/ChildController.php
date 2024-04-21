<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;

class ChildController extends Controller
{
    //
    public function index(){
        //return view('child.index');
        $childs = Child::all(); // Assuming you have a Child model and want to fetch all child records
        return view('child.index', compact('childs'));
    }

    public function create(){
        return view('child.create');

    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'childSSN' => 'required|numeric', // Add validation rules for childSSN
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'DOB' => 'required|date',
            'gender' => 'required|in:male,female',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'address' => 'nullable|string',
        ]);

        // Create a new child record with the validated data
        $newChild = Child::create($request->all());

        // Redirect the user to the index page after successful creation
        return redirect()->route('child.index');

    }

    public function show($id){
        $child = Child::findOrFail($id); // Assuming you want to retrieve a specific child by ID
        return view('child.show', ['child' => $child]);
    }
    public function edit($id)
    {
        $child = Child::find($id);
        return view('child.edit', compact('child'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'DOB' => 'required|date',
            'gender' => 'required|in:male,female',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'address' => 'nullable|string',
        ]);

        $child = Child::findOrFail($id);
        $child->update($data);

        return redirect()->route('child.index')->with('success', 'Child updated successfully');
    }
    public function destroy($id)
    {
        $child = Child::findOrFail($id);
        $child->delete();

        return redirect()->route('child.index')->with('success', 'Child deleted successfully');
    }

}
