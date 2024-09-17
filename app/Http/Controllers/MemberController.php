<?php

namespace App\Http\Controllers;

use App\Models\CommitteeMember;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = CommitteeMember::all();
       
        return view('members', compact('members'));
    }

}
