<?php

namespace App\Http\Controllers;

use App\Models\Tribute;
use Illuminate\Http\Request;

class TributeController extends Controller
{
    public function index(){
        return view('tribute');
    }
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'd_o_b' => 'required|date|before_or_equal:today',
            'd_o_d' => 'required|date|after_or_equal:d_o_b',
            'description' => 'required|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation rules
        ]);

        // Store the image in 'public/storage/tributes' directory
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tributes', 'public');
        } else {
            $imagePath = null;
        }

        // Insert tribute data into the database
        Tribute::create([
            'name' => $validatedData['name'],
            'd_o_b' => $validatedData['d_o_b'],
            'd_o_d' => $validatedData['d_o_d'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
        ]);

        // Redirect back with success message
        return redirect('/tribute')->with('success', 'Tribute submitted successfully.');
    }
    

}
