<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salarytracking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employe = DB::table('employes')->where('full_name',$request->employe_name)->first();
        $salary = DB::table('salaries')->where('employe_name',$request->employe_name)->first();
        
        if($employe) {

            $data = [
                'salaryBrut' => $request->sbrut,
                'salaryNet' => NULL,
            ];

            $salaryNet = $data['salaryBrut'] - 200;
            data_set($data, 'salaryNet', $salaryNet);

            Salary::create([
                'employe_id' => $employe->id,
                'employe_name' => $employe->full_name,
                'employe_skills' => $employe->skills,
                'employe_entity' => $employe->entity,
                'salary_upgrade' => date('Y-m-d'),
                'salary_brut' => $data['salaryBrut'],
                'salary_net' => $data['salaryNet'],
                'token' => Str::random(10),
            ]);


            return redirect()->route('salary.create')
            ->with('Salary.added','Tracking salary for employe {'. $employe->full_name .'} has been added succesfully!');
        }

        else {

            return redirect()->route('salary.create')
            ->with('Salary.notfound','Employe {'. $request->employe_name .'} was not found');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        $salary = Employe::find($salary);

        return view('salary.show',compact('salary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        //
    }

}
