<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentCheckController extends Controller
{
    public function preview(Request $request){

        $payment = DB::table('salaries')->where('employe_name',$request->employe)->get();

        //dd($payment);

        if($payment){

            $employe = DB::table('salaries')
                ->join('contacts', 'users.id', '=', 'contacts.user_id')
                ->select('users.*', 'contacts.phone', 'orders.price')
                ->get();

            return view('paymentcheck')->with([
                'payment'=> $payment
            ]);
        }

        else {
            return redirect('paymentcheck')
            ->with('Preview_NotFound','Employe {'. $request->employe.'} was not found');
        }

    }
}
