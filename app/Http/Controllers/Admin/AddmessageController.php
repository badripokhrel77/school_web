<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class AddmessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();
        return view('admin.message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:5120', // Optional image validation
        ]);

        // Create a new message instance
        $message = new Message();
        $message->title = $request->title;
        $message->author = $request->author;
        $message->content = $request->content;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('messages', 'public');
            $message->image = $imagePath;
        }

        // Save the message
        $message->save();

        // Redirect to the messages index page with a success message
        return redirect('admin/message')->with('success', 'Message created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);

        return view('admin.message.view', [
            'message' => $message
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.message.edit', [
            'message' => Message::findorFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:5120', // Optional image validation
        ]);

        // Find the existing message
        $message = Message::findOrFail($id);

        // Update message fields
        $message->title = $request->title;
        $message->author = $request->author;
        $message->content = $request->content;

        // Handle image upload
        if ($request->hasFile('image')) {

            // Upload the new image
            $imagePath = $request->file('image')->store('messages', 'public');
            $message->image = $imagePath;
        }

        // Save the updated message
        $message->save();

        // Redirect to the messages index page with a success message
        return redirect('admin/message')->with('success', 'Message updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        return redirect('admin/message')->with('success', 'Message deleted successfully!');
    }
}
