<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Save the message to the database
        // You can use Eloquent ORM or Query Builder to save the message
        // Here's an example using Eloquent ORM
        auth()->user()->messages()->create([
            'message' => $validatedData['message'],
        ]);

        // Return a JSON response
        return response()->json([
            'message' => 'Message sent successfully',
        ]);
    }
}
