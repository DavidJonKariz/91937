<?php
/**
 * Created by PhpStorm.
 * User: djkar
 * Date: 09/06/2018
 * Time: 20:50
 */?>
<html>
<head>
    <title>STUDENTS</title>
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85807/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<nav>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="http://localhost:8000/"><img id="bckbtn" src="{{asset('pic/bck.png')}}"></a>
            </div>
            <p class="navbar-text">All Student Details</p>
        </div>
    </nav>

</nav>

<section>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            <tr>
                <th>Student ID</th>
                <th>Fee</th>
                <th>Fees Paid</th>
                <th>Balance</th>

            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            @foreach ($fees as $fee)
                <tr>
                    <td>{{$fee->student_id}}</td>
                    <td>{{$fee->amount_due}}</td>
                    <td>{{$fee->amount_paid}}</td>
                    <td>{{$fee->balance}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="tbl-header-total">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
            {{--@foreach($fees as $fee)--}}
            <tr>
                <th class="tbl-header-total-th"><strong>TOTALS</strong></th>
                <th class="tbl-header-total-th"><strong>{{DB::table('fees')->sum('amount_due')}}</strong></th>
                <th class="tbl-header-total-th"><strong>{{DB::table('fees')->sum('amount_paid')}}</strong></th>
                <th class="tbl-header-total-th"><strong>{{DB::table('fees')->sum('balance')}}</strong></th>

            </tr>
            {{--@endforeach--}}
            </thead>
        </table>
    </div>
</section>

</body>

<style>
    #bckbtn
    {
        margin: 10px;
        height: 35px;
        width: 35px;
        border-radius: 50%;
        background-color: #17a2b8;
        padding: 5px;
        align-content: center;
    }

    section
    {
        margin: 60px;
        align-content: center;
        background: linear-gradient(to right, #6610f2, #25b7c4);
    }

    .navbar-text
    {
        font-size: 14pt;
    }

    h1 {
        font-size: 30px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 300;
        text-align: center;
        margin-bottom: 15px;
    }
    table {
        width: 100%;
        table-layout: fixed;
    }
    .tbl-header {
        background-color: rgba(25, 25, 25, 0.9);
    }
    .tbl-header-total {
        background-color: rgba(20, 20, 100, 0.6);
    }
    .tbl-header-total-th
    {
        font-size: 18pt;
    }
    .tbl-content {
        height: 300px;
        overflow-x: auto;
        margin-top: 0px;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    th {
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 12px;
        color: #fff;
        text-transform: uppercase;
    }
    td {
        padding: 15px;
        text-align: left;
        vertical-align: middle;
        font-weight: 300;
        font-size: 12px;
        color: #fff;
        border-bottom: solid 1px rgba(255, 255, 255, 0.1);
    }

</style>

</html>
