<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //create new user 
    public function store(Request $request)
    {
    }

    public function view()
    {
        $allUsers = user::all();
        return view('dashboard.users', ['allUsers' => $allUsers]);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return back();
    }
}
