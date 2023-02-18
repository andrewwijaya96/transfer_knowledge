<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Division;
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
        $request->validate([
            'name' => 'required|string',
            'division_name' => 'required'
        ]);

        $division_id = Division::firstWhere('name','=',$request->division_name);

        User::create([
            'name' => $request->name,
            'division_id' => $division_id->id
        ]);

        return redirect()->back()->with('success','Have been created new participant!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $divisions = Division::all();
        return view('users.edit',[
            'user' => $user,
            'divisions' => $divisions
        ]);
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
        // dd($request);
        $request->validate([
            'name' => 'required|string',
            'division_name' => 'required'
        ]);

        $division_id = Division::firstWhere('name','=',$request->division_name);

        $user->update([
            'name' => $request->name,
            'division_id' => $division_id->id
        ]);

        return redirect()->back()->with('success',"<strong>$request->name</strong>".' have been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success',"<strong>$user->name</strong>".' have been deleted!');
    }

    public function delete($user)
    {

        $user = User::firstWhere('id','=',$user);
        dd($user);
        $user->delete();

        return redirect()->back();
    }
}
