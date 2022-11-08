<?php

namespace App\Http\Controllers;

use App\Models\employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = employe::all();
        return view('/hresoures')->with([
            'employes' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'full_name' => 'required',
            'hire_date' => 'required',
            'cnss_info' => 'required',
            'birth_date' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'skills' => 'required',
            'gender' => 'required',
            'entity' => 'required'
        ]);

        $employe = new employe();

        $employe->full_name = $request->full_name;
        $employe->hire_date = $request->hire_date;
        $employe->cnss_info = $request->cnss_info;
        $employe->birth_date = $request->birth_date;
        $employe->email = $request->email;
        $employe->phone_number = $request->phone_number;
        $employe->skills = $request->skills;
        $employe->gender = $request->gender;
        $employe->entity = $request->entity;

        $employe->save();

        return redirect()->route('employe.hresoures')->with('Added','Employe has been added succesfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
