<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $notices = Notice::orderBy('id', 'desc')->get();

        // $notices = Notice::all(); // Get all notices for the main content
        $latestNotices = Notice::latest()->take(5)->get(); // Get the latest 5 notices for the marquee
        return view('admin.notice.index', compact('notices', 'latestNotices'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'published_date' => 'required|date', // Ensure the date is in the correct format
        ]);

        // Create a new notice object
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->published_date = $request->published_date;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Store the image in the 'notices' folder under public disk
            $path = $request->file('image')->store('notices', 'public');
            $notice->image = $path;
        }

        // Save the notice to the database
        $notice->save();

        // Redirect to the notices index page with a success message
        return redirect(route('notice.index'))->with('success', 'Notice created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $notice = Notice::findOrFail($id);

    return view('admin.notice.show', [
        'notice' => $notice
    ]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.notice.edit',[
            'notice'=>Notice::findorFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'published_date' => 'required|date', // Ensure the date is in the correct format
        ]);

        // Create a new notice object
        $notice = Notice::findorFail($id);
        $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->published_date = $request->published_date;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Store the image in the 'notices' folder under public disk
            $path = $request->file('image')->store('notices', 'public');
            $notice->image = $path;
        }

        // Save the notice to the database
        $notice->save();

        // Redirect to the notices index page with a success message
        return redirect(route('notice.index'))->with('success', 'Notice Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();
        return redirect(route('notice.index'))->with('success', 'Notice deleted successfully!');
    }
}
