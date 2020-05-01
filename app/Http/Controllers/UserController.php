<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show all of the users for the application.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::orderBy('id')->paginate(15);

        return view('users', ['users' => $users]);
    }

    public function show($id){
        $user = User::find($id);
        return view('profile', ['user' => $user]);
    }
}
