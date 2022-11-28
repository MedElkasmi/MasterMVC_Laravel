<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Admin::all();
        return view('adminlist')->with([
            'data' => $data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register');
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
        $request->validate([

            'username' => 'required|min:5|max:15',
            'password' => 'required|min:7|max:7',
            'repassword' => 'required|min:7|max:7',

        ]);
        
        if($request->password == $request->repassword) {

            Admin::create([
                'username' => $request->username,
                'password' => Hash::make($request->password)
            ]);
    
            return redirect()->route('admin.index')->with('admin.created','Admin has been created succesfully!');
        }


        return redirect()->route('admin.create')->with('password.wrong','Password does not match');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
        $admin = Employe::find($admin);

        return view('employe.show',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
        $admin->delete();

        return redirect()->route('admin.index')->with('deleted','An admin account has been deleted successfully');
    }
}
