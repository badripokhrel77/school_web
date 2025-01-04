<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teamMembers = Team::all();
        return view('admin.team.index', compact('teamMembers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'post' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'mobile' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
        ]);

        $imagepath = $request->file('image')->store('team_images', 'public');

        Team::create(
            [
                'name' => $request->name,
                'post' => $request->post,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'image' => $imagepath,
            ]
        );
        return redirect(route('team.index'))->with('success', 'Team Member added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.team.edit', [
            'teamMember' => Team::findorFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'post' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Nullable for optional image upload
            'mobile' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:255',
        ]);

        $teamMember = Team::findOrFail($id);

        // Update fields
        $teamMember->name = $request->name;
        $teamMember->post = $request->post;
        $teamMember->mobile = $request->mobile;
        $teamMember->email = $request->email;

        // Update image if a new one is uploaded
        if ($request->hasFile('image')) {
            // Store the new image
            $imagePath = $request->file('image')->store('team_images', 'public');

            // Optionally, delete the old image
            // if ($teamMember->image) {
            //     Storage::disk('public')->delete($teamMember->image);
            // }

            $teamMember->image = $imagePath;
        }

        // Save updates
        $teamMember->save();

        return redirect(route('team.index'))->with('success', 'Team Member Updated Successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teamMember = Team::findOrFail($id);
        $teamMember->delete();
        return redirect(route('team.index'))->with('success', 'Team Member deleted successfully!');
    }
}
