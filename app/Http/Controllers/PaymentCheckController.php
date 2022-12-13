<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentCheckController extends Controller
{

    public function index(){

        return view('paymentcheck');

    }


    public function preview(Request $request){

        $payment = DB::table('salaries')->where('employe_name',$request->employe)->first();

        if($payment){

            $employe = DB::table('salaries')
            ->join('employes', 'employes.id', '=', 'salaries.employe_id')
            ->select(
            'employes.full_name','employes.skills','employes.hire_date',
            'employes.cnss_info','employes.birth_date',
            'salaries.salary_brut','salaries.salary_net')->first();

            return view('paymentcheck')->with([
                'employe' => $employe
            ]);

        }

        else {

            return view('paymentcheck')
            ->with('Preview_NotFound','Employe {'. $request->employe.'} was not found');
        }

    }
}
