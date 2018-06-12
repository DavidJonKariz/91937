<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\fee;

class student_controller extends Controller
{
    function showstudents()
    {
        $fees = fee::all();
        return view('91937.students_fees', ['fees' => $fees]);
    }

//    function addition()
//    {
//        $feesums = fee::all();
////        $feeadue = $feesums->amount_due;
////        $feeapay = $feesums->amount_paid;
////        $feebal = $feesums->balance;
//        return view('91937.students_fees', ['feesums' => $feesums]);
//    }

    function student_register()
    {
        $student = new student();
        $student->first_name = request('f_name');
        $student->last_name = request('l_name');
        $student->date_of_birth = request('dob');
        $student->email_address = request('email');
        $student->password = request('pass');
        $student->save();
        return redirect('/signin');
    }

    function student_login()
    {
        $studentid = request('studentId');
        $studentpass = request('password');
        $student = student::find($studentid);
        $fees = $student->fees;
        if($studentpass == $student->password)
        {
            return view('91937.student_details', ['student' => $student], ['fees' => $fees]);
        }
        else
        {
            return redirect('/');
        }
    }
}
