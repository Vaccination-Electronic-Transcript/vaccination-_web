<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FollowUp;
use App\Models\Vaccine;
use App\Models\Child;

class FollowUpController extends Controller
{

    public function index()
    {
        $children = Child::all(); // Fetch all children
        $vaccines = Vaccine::all(); // Fetch all vaccines
        $followUps = FollowUp::all(); // Fetch all follow-ups
        $followUps = FollowUp::with('child')->get();
        //return view('followUp.index', compact('followUps'));
        return view('followUp.index', compact('children', 'vaccines', 'followUps'));
    }

    public function create()
    {
    $vaccines = Vaccine::all(); // Fetch all vaccines
    $children = Child::ALL(); // Fetch child SSNs from the database
    return view('followUp.create', compact('children','vaccines'));
}


public function store(Request $request)
{
    $validatedData = $request->validate([
        'childSSN' => 'required',
        'childName' => 'required',
        'height' => 'required',
        'weight' => 'required',
        'DOB' => 'required|date',
        'vaccineID' => 'required',
        // Add other validation rules as needed...
    ]);
    $data = $request->except('childSSN');
    $newFollow = FollowUp::create($data);

    // Redirect the user to the index page after successful creation
    return redirect()->route('dashboard');

}



public function show($id)
{
    $followUp = FollowUp::with('child')->find($id); // Eager load the child relationship

    // Check if the follow-up exists
    if (!$followUp) {
        abort(404); // Or handle the case where the follow-up is not found
    }

    // Check if the child record exists
    if (!$followUp->child) {
        // Handle the case where the child record is not found
        $childName = 'N/A'; // or any default value
    } else {
        // Access the child's name through the relationship
        $childName = $followUp->child->name;
    }

    return view('followUp.show', compact('followUp', 'childName'));
}




public function edit(FollowUp $followUp)
{
    return view('followUp.edit', compact('followUp'));
}




    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'childSSN' => 'required',
            'childName' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'DOB' => 'required|date',
            'vaccineID' => 'required',
        ]);

        $followUp = FollowUp::findOrFail($id);
        $followUp->update($validatedData);

        return redirect()->route('followUp.index')->with('success', 'Follow-up entry updated successfully.');
    }

    public function destroy(FollowUp $followUp)
    {
        $followUp->delete();
        return redirect()->route('followUp.index')->with('success', 'Follow-up entry deleted successfully.');
    }

}
