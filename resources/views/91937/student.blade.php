<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85807/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://localhost:8000/fees">Fee Payment</a>
                <a class="navbar-brand" href="http://localhost:8000/signin">Log In</a>
            </div>
            <p class="navbar-text">STUDENT REGISTER</p>
        </div>
    </nav>

    <div style="margin-top: 70px;">Enter Your Details as Shown Below</div><hr>
        <form method="post" action="/student/student_register">
            {{csrf_field()}}
            <input type="text" name="f_name" placeholder="Enter Your First Name"><br>
            <input type="text" name="l_name" placeholder="Enter Your Last Name"><br>
            <input type="date" name="dob" placeholder="Enter Your Date Of Birth"><br>
            <input type="email" name="email" placeholder="Enter Your Email Address"><br>
            <input type="password" name="pass" placeholder="Enter Your Password"><br><hr>
            <input type="submit" name="register" value="REGISTER" style="width: 100px">
        </form>
    </body>
</html>
<style>
    body
    {

    }

    form
    {
        align-content: center;
    }

    input
    {
        margin: 10px;
        width: 200px;
    }
</style>
