<?php
/**
 * Created by PhpStorm.
 * User: djkar
 * Date: 09/06/2018
 * Time: 20:56
 */?>
<html>
<head>
    <title>DETAILS</title>
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85807/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8000/fees">
                    FEE PAYMENT
                </a>
            </div>
            <p class="navbar-text">Student Details</p>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost:8000/"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-sm-12">
                <h2>Student Portal System</h2>
                <div class="tab-container">
                    <ul class="nav nav-tabs nav-tabs-left nav-centered" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#profile" data-toggle="tab" role="tab">
                                PROFILE
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#fee_records" data-toggle="tab" role="tab">
                                FEE RECORDS
                            </a>
                        </li>
                    </ul>

                    <div id="my_side_tabs" class="tab-content side-tabs side-tabs-left">
                        <div class="tab-pane fade in active" id="profile" role="tabpanel">
                            <div class="col-sm-6">
                                <div id="display">
                                    <p id="heading">Student ID</p>
                                    <p id="data">{{$student->id}}</p>
                                    <p id="heading">Student Name</p>
                                    <p id="data">{{$student->first_name}} {{" "}} {{$student->last_name}}</p>
                                    <p id="heading">Date Of Birth</p>
                                    <p id="data">{{$student->date_of_birth}}</p>
                                    <p id="heading">Email Address</p>
                                    <p id="data">{{$student->email_address}}</p>
                                </div>

                                {{--<form method="post" action="adminadd.php">--}}

                                {{--</form>--}}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="fee_records" role="tabpanel">
                            <div class="col-sm-6">
                                <section>
                                    <div class="tbl-header">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <thead>
                                            <tr>
                                                <th>Payment Date</th>
                                                <th>Paid Amount</th>
                                                <th>Balance</th>
                                                <th>Invoice Number</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="tbl-content">
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                            @foreach($fees as $fee)
                                                <tr>
                                                    <td>{{$fee->payment_date}}</td>
                                                    <td>{{$fee->amount_paid}}</td>
                                                    <td>{{$fee->balance}}</td>
                                                    <td>{{$fee->invoiceId}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </section>

                                {{--<form method="post" action="adminadd.php">--}}

                                {{--</form>--}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="module" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="module" src="https://s.codepen.io/assets/libs/modernizr.js"></script>

</body>

<style>
    #display
    {
        margin: 5px;
    }

    #heading
    {
        padding: 10px;

        width: 125px;
        text-align: center;
        background-color: #17a2b8;
        opacity: 0.9;
    }

    #data
    {
        margin-left: 20px;
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
        background-color: rgba(25, 25, 25, 0.3);
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

    /* demo styles */

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
    body {
        background: linear-gradient(to right, #25c481, #25b7c4);
        font-family: "Roboto", sans-serif;
    }
    section {
        margin: 50px;
        width: 1000px;
    }


    /* for custom scrollbar for webkit browser*/

    ::-webkit-scrollbar {
        width: 6px;
    }
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }
    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

</style>

</html>
