<?php

namespace App\Http\Controllers;

use App\Models\CommitteeMember;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function members($years = '2020-2024')
    {
        // Split the years parameter into start and end years
        [$yearStart, $yearEnd] = explode('-', $years);

        // Fetch committee members based on the years range
        $members = CommitteeMember::where('year_start', '>=', $yearStart)
                                ->where('year_end', '<=', $yearEnd)
                                ->get();

        // Pass the members and the selected years to the view
        return view('members', compact('members', 'years'));
    }

}
