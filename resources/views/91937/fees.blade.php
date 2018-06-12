<!DOCTYPE html>
<html>
    <head>
        <title>Fees</title>
        <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85807/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="http://localhost:8000/"><img id="bckbtn" src="{{asset('pic/bck.png')}}"></a>
            </div>
            <p class="navbar-text">FEE PAYMENT</p>
        </div>
    </nav>

    <div style="margin-top: 70px;">Enter Your Amount Payable</div><hr>
        <form method="post" action="/fees/fee_save">
            {{csrf_field()}}
            <input type="text" name="studentId" placeholder="Enter Your Student Id"><br>
            <input type="text" name="amount" placeholder="Enter The Payment Amount"><br>
            <input type="submit" name="submit" value="PAY FEE" style="width: 100px">
        </form>
        
    </body>
</html>
<style>
    form
    {
        align-content: center;
    }

    input
    {
        margin: 10px;
        width: 200px;
    }
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
</style>
