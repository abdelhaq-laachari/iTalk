<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function getUser($id)
    {
        if (auth()->user()) {
            $users = User::find($id);

            return view('users.profile', [
                'users' => $users
            ]);
        } else {
            return redirect(route('login'));
        }
    }
    public function updateUser(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255',
        ]);


        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;


        if ($request->password == null) {
            $user->password = $request->old_password;
        } else {
            $user->password =  Hash::make($request->password);
        }

        $user->save();

        return redirect(route('home'));
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('home'));
    }
    public function show(User $user)
    {
        dd($user);
        $users = User::find($user);

        return view('users.profile', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
