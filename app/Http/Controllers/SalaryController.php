<?php

namespace App\Http\Controllers;

use App\Models\Salary;
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
        // $salary = Salary::first();

        // if(is_null($salary)) {
            
        //     $request->validate([
        //         'employe_name' => 'required|min:5|max:15',
        //         'sbrut' => 'required|min:4|max:10',
        //     ]);

        //     Salary::create([
        //         'employe_id' => 1,
        //         'employe_name' => NUll,
        //         'employe_skills' => NUll,
        //         'employe_entity' => NUll,
        //         'salary_upgrade' => NUll,
        //         'salary_brut' => NUll,
        //         'salary_net' => NUll,
        //     ]);
        // }

        //====================================================================
        
        $data = DB::table('Employes')->select('id','hire_date')->where('full_name','user-7354')->fisrt();

        return $data;

        // $employe = Salary::find(2)->employe;

        // return $employe;

        // $data = [
        //     'salaryBrut' => $request->sbrut,
        //     'salaryNet' => NULL,
        // ];

        // $salaryNet = $data['salaryBrut'] - 200;

        // data_set($data, 'salaryNet', $salaryNet);

        // $request->validate([
        //     'employe_name' => 'required|min:5|max:15',
        //     'sbrut' => 'required|min:4|max:10',
        //     ]);

        // Salary::create([
        //     'employe_id' => $employe['id'],
        //     'employe_name' => $employe['full_name'],
        //     'employe_skills' => $employe['skills'],
        //     'employe_entity' => $employe['entity'],
        //     'salary_upgrade' => $employe['created_at'],
        //     'salary_brut' => $data['salaryBrut'],
        //     'salary_net' => $data['salaryNet'],
        // ]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
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
