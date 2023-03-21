<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('index', compact('users'));
    } 
    public function create()
    {
        return view('form');
    }

    public function store(Request $request) {
        User::create([
           'name' => $request->fullName,
           'verification_no'=> $request->verification,
            'issue_date'=> $request->date,
            'license_no'=> $request->rop_license_no,
        ]);

        return back()->with('success', 'Record saved successfully!');

    }
}
