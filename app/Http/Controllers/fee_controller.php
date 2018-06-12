<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\fee;
use App\student;

class fee_controller extends Controller
{
//    function showfees()
//    {
//        $fees = fee::all();
//        $student = $fees->student;
//        return view('91937.students_fees', ['fees' => $fees], ['student' => $student]);
//    }

    function fee_save ()
    {
        $fee = new fee();
        $fee->student_id = request('studentId');
        $fee->payment_date = Carbon::now();
        $fee->amount_due = 50000;
        $fee->amount_paid = request('amount');
        $fee->balance = $fee->amount_due - $fee->amount_paid;
        $fee->invoiceId = str_random(16);
        $fee->save();
        return redirect('/');
    }
}
