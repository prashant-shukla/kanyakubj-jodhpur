<?php

namespace App\Http\Controllers;

use App\Models\CommitteeMember;
use App\Models\Member;
use App\Models\Tenure;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $tenures = Tenure::where('status', '1')->get();
        $tenure = $request->get('tenure', $tenures->first()->title ?? '2020-2024');
        $tenureRecord = Tenure::where('title', $tenure)->first();
        $members = $tenureRecord ? CommitteeMember::where('tenure_id', $tenureRecord->id)->orderBy('order_number', 'asc')->get() : collect();
        return view('members', compact('tenures', 'members', 'tenure'));
    }
    public function members_detail($id)
    {
        $member = Member::find($id);
        return view('member_detail', compact('member'));
    }
      
    public function members_details()
    {
        $members = Member::where('is_active', 1)->get();
        return view('member_details', compact('members'));
    }
}
