<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PaymentCheckController extends Controller
{

    public function index(){

        $path = storage_path() . "/employe.json";




        $employe = json_decode(file_get_contents("storage/app/employe.json"), true);


        // return view('paymentcheck')->with([
        //     'employe' => $employe
        // ]);

        // return view('paymentcheck');

    }


    public function preview(Request $request){

        $payment = DB::table('salaries')->where('employe_name',$request->employe)->get();

        if($payment){

            $employe = DB::table('salaries')
            ->join('employes', 'employes.id', '=', 'salaries.employe_id')
            ->select(
            'employes.full_name','employes.skills','employes.hire_date',
            'employes.cnss_info','employes.birth_date',
            'salaries.salary_brut','salaries.salary_net')->get();

            Storage::disk('public')->put('employe.json', json_encode($employe));

        }

        else {
            return redirect('paymentcheck')
            ->with('Preview_NotFound','Employe {'. $request->employe.'} was not found');
        }

    }
}
