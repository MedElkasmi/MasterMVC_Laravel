<?php

namespace App\Http\Controllers;

use App\Models\Vacation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VacationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Vacation::where('vacation_status','Active')->paginate(6);
        return view('vacation')->with([
            'data' => $data
        ]);
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

        if($employe){

            $VacationPerEmploye = DB::table('vacations')
                ->where('employe_name',$request->employe_name)
                ->where('vacation_status','Active')
                ->first();

                if(!$VacationPerEmploye){
                    
                    vacation::create([
                        'employe_id' => $employe->id,
                        'employe_name' => $request->employe_name,
                        'vacation_start' => carbon::now(),
                        'vacation_end' => carbon::now()->addDays($request->duration),
                        'vacation_pointer' => carbon::now(),
                        'days_available' => $request->days_available,
                        'vacation_status' => 'Active',
                    ]);

                    return redirect()->route('vacation.create')
                    ->with('vacation.added','Vacation has been set up for employe : ' . $request->employe_name);
                }

                else {
                    return redirect()->route('vacation.create')
                    ->with('vacation.notfound','Employe {'. $request->employe_name .'} was found already');
                }


            }

            else {

                return redirect()->route('vacation.create')
                ->with('vacation.notfound','Employe {'. $request->employe_name .'} was not found');
            }



        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function show(Vacation $vacation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacation $vacation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacation $vacation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacation  $vacation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacation $vacation)
    {
        //
        $vacation->delete();

        return redirect()->route('vacation.create')->with('Vacation.Cancelled','Vacation planning has been cancelled.');
    }
}
