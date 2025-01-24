<?php


namespace App\Http\Controllers;

use App\Models\EventRegistration;
use Illuminate\Http\Request;
use App\Models\Event;

class EventRegistrationController extends Controller
{
    // Show the form
    public function showForm()
    {
        $upcomingevents = Event::where('end_date', '>=', date('Y-m-d'))->get();
        $pastevents = Event::where('end_date', '<', date('Y-m-d'))->get();

        return view('events',compact('upcomingevents','pastevents'));
     
    }

    // Handle form submission
    public function storeForm(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:10',
            'comments' => 'nullable|string',
            'attending' => 'required|in:yes,no',  // ensure 'attending' is either 'yes' or 'no'
        ]);

        // Save the data into the database
        EventRegistration::create([
            'full_name' => $validated['full_name'],
            'mobile' => $validated['mobile'],
            'comments' => $validated['comments'],
            'attending' => $validated['attending'] === 'yes' ? true : false, // convert 'yes'/'no' to boolean
        ]);

        // Redirect back with success message
        return redirect()->route('event.register')->with('success', 'Registration successful!');
    }
}

