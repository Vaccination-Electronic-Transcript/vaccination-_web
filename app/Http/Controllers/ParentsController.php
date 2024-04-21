<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parentss;

class ParentsController extends Controller
{
    // Display a listing of the parentss.
    public function index()
    {
        $parents = Parentss::all(); // Retrieve all parents from the database
        return view('parents.index', compact('parents'));
    }

    // Show the form for creating a new parentss.
    public function create()
    {
        return view('parents.create');
    }

    // Store a newly created parentss in storage.
    public function store(Request $request)
    {
        $request->validate([
            'SSN' => 'required|unique:parentss',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
        ]);

        parentss::create($request->all());

        return redirect()->route('parentss.index')
            ->with('success', 'parentss created successfully.');
    }

    // Show the form for editing the specified parentss.
    public function edit($id)
    {
        $parentss = parentss::findOrFail($id);
        return view('parentss.edit', compact('parentss'));
    }

    // Update the specified parentss in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'SSN' => 'required|unique:parentss,SSN,'.$id,
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
        ]);

        $parentss = parentss::findOrFail($id);
        $parentss->update($request->all());

        return redirect()->route('parentss.index')
            ->with('success', 'parentss updated successfully');
    }

    // Remove the specified parentss from storage.
    public function destroy($id)
    {
        $parentss = parentss::findOrFail($id);
        $parentss->delete();

        return redirect()->route('parentss.index')
            ->with('success', 'parentss deleted successfully');
    }
}
