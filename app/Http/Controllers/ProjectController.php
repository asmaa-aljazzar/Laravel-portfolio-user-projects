<?php

namespace App\Http\Controllers; // The namespace this class belongs to


use Illuminate\Http\Request; // need for request form data

use App\Models\Project; // need for model
use App\Models\User; // need for model

// PascalCase
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::findOrFail(1);
        $projects = $user->projects;
        return view('portfolio.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolio.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //? 	Receives form data and saves a new record
    // Validates the submitted title and description and userId.
    // Creates a project in the database.
    // Redirects to the projects list with a success message.
    // Create just the valid data
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id' // check if submitted user_id is in users table
        ]);

        Project::create($data);
        return redirect()->route('projects.index')->with('success', 'Project created successfully');
        // In tinker check the saved project with:
        //* App\Models\Project::latest('id')->first();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = User::findOrFail(1)->projects()->findOrFail ($id);
        return view ('portfolio.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {

    }
}
