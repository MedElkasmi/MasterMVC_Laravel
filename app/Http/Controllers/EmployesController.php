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
    public function index(){
        
        $data = employe::Paginate(6);
        return view('hresoures')->with([
            'data' => $data
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->validate([
            'full_name' => 'required|min:5|max:15',
            'hire_date' => 'required|date',
            'cnss_info' => 'required|min:5|max:15',
            'birth_date' => 'required|date',
            'email' => 'required|email',
            'phone_number' => 'required|min:5|max:15',
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

        return redirect('hresoures')->with('Added','Employe has been added succesfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $employe = employe::find($id);

        return view('employe.show',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $employe = employe::find($id);

        return view('employe.edit',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        
            $request->validate([
                'full_name' => 'required|min:5|max:15',
                'hire_date' => 'required|date',
                'cnss_info' => 'required|min:5|max:15',
                'birth_date' => 'required|date',
                'email' => 'required|email',
                'phone_number' => 'required|min:5|max:15',
                'skills' => 'required',
                'gender' => 'required',
                'entity' => 'required'
            ]);

            $employe = employe::find($id);

            $employe->update($request->all());

        return redirect()->route('employe.index')->with('success','an ;employe has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        employe::find($id)->delete();

        return redirect()->route('employe.index')->with('success','An employe has been deleted successfully');
    }

    public function count(){

        $employes = employe::count();

        return view('home')->with([
            'employe' => $employes
        ]);
    }
}
