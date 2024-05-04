<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vaccine; // Update namespace to match the model name

class VaccineController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::all(); // Update model name to start with uppercase
        return view('vaccine.index', compact('vaccines'));
    }

    public function create()
    {
        return view('vaccine.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'dose' => 'required',
            'age' => 'required',
            'quantity' => 'required|numeric|min:0|max:200',
            'type' => 'required|in:Syrup,Injection',
        ]);

        $newVaccine = Vaccine::create([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'dose' => $request->input('dose'),
            'age' => $request->input('age'),
            'quantity' => $request->input('quantity'),
            'type' => $request->input('type'),
        ]);

        return redirect()->route('vaccine.index')->with('success', 'Vaccine created successfully');

        // Redirect the user to the index page after successful creation
    }

    public function show($id)
    {
        $vaccine = Vaccine::findOrFail($id); // Assuming you want to retrieve a specific vaccine by ID
        return view('vaccine.show', ['vaccine' => $vaccine]);
    }

    public function edit($id)
    {
        $vaccine = Vaccine::findOrFail($id);
        return view('vaccine.edit', compact('vaccine'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'vaccineid' => 'required',
            'name' => 'required|string',
            'dose' => 'required',
            'age' => 'required|numeric',
            'quantity' => 'required|numeric|min:0|max:200',
            'type' => 'required',
        ]);

        $vaccine = Vaccine::findOrFail($id);
        $vaccine->update($data);

        return redirect()->route('vaccine.index')->with('success', 'Vaccine updated successfully');
    }

    public function destroy($id)
    {
        $vaccine = Vaccine::findOrFail($id);
        $vaccine->delete();

        return redirect()->route('vaccine.index')->with('success', 'Vaccine deleted successfully');
    }
}
