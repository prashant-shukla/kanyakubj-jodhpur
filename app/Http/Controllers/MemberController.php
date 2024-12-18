<?php

namespace App\Http\Controllers;

use App\Models\CommitteeMember;
use App\Models\Tenure;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        // Fetch active tenures for the dropdown
        $tenures = Tenure::where('status', '1')->get();

        // Check if 'tenure' is present in the GET request, else use the default value (first active tenure or a fallback)
        $tenure = $request->get('tenure', $tenures->first()->title ?? '2020-2024');

        // Fetch the tenure record by the title
        $tenureRecord = Tenure::where('title', $tenure)->first();

        // If tenure record is found, fetch members by tenure_id, otherwise return an empty collection
        $members = $tenureRecord ? CommitteeMember::where('tenure_id', $tenureRecord->id)->orderBy('number', 'asc')->get() : collect();
        // Pass tenures and members to the view
        return view('members', compact('tenures', 'members', 'tenure'));
    }

}
