<?php
include("include/config.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SignUp Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.form-container{
    font-family: 'Poppins', sans-serif;
    position: relative;
    z-index: 1;
}
.form-container .form-horizontal{
    background-color: #fff;
    padding: 30px 30px 10px;
    border: 1px solid #e7e7e7;
}
.form-container .form-horizontal:before,
.form-container .form-horizontal:after{
    content: '';
    background-color: #fff;
    height: 100%;
    width: 100%;
    border: 1px solid #e7e7e7;
    transform: rotate(3deg);
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
}
.form-container .form-horizontal:after{ transform: rotate(-3deg); }
.form-container .title{
    color: #777;
    background: linear-gradient(to right,#f5f5f5,transparent,transparent,transparent,#f5f5f5);
    font-size: 23px;
    font-weight: 600;
    text-align: center;
    text-transform: capitalize;
    padding: 2px;
    margin: 0 0 20px 0;
}
.form-horizontal .form-group{
    background-color: #eaeaea;
    font-size: 0;
    margin: 0 0 15px;
    border: 1px solid #d1d1d1;
    border-radius: 3px;
}
.form-horizontal .input-icon{
    color: #888;
    font-size: 18px;
    text-align: center;
    line-height: 40px;
    height: 40px;
    width: 40px;
    vertical-align: top;
    display: inline-block;
}
.form-horizontal .form-control{
    color: #555;
    background-color: transparent;
    font-size: 14px;
    letter-spacing: 1px;
    width: calc(100% - 55px);
    height: 40px;
    padding: 2px 10px 2px 0;
    box-shadow: none;
    border: none;
    border-radius: 0;
    display: inline-block;
    transition: all 0.3s;
}
.form-horizontal .form-control:focus{
    box-shadow: none;
    border: none;
}
.form-horizontal .form-control::placeholder{
    color: rgba(0,0,0,0.7);
    font-size: 14px;
    text-transform: capitalize;
}
.form-horizontal .btn{
    color: #fff;
    background: linear-gradient(#1dd1a1,#10ac84);
    font-size: 16px;
    font-weight: 600;
    text-transform: capitalize;
    width: 100px;
    padding: 5px 18px;
    margin: 0 0 15px 0;
    border: none;
    border-radius: 30px;
    display: inline-block;
    transition: all 0.3s ease;
}
.form-horizontal .btn:hover,
.form-horizontal .btn:focus{
    color: #fff;
    letter-spacing: 2px;
}
.form-horizontal .forgot-pass{
    font-size: 12px;
    text-align: right;
    width: calc(100% - 105px);
    display: inline-block;
    vertical-align: top;
}
.form-horizontal .forgot-pass a,
.form-horizontal .register a{
    color: #999;
    transition: all 0.3s ease;
}
.form-horizontal .forgot-pass a:hover,
.form-horizontal .register a:hover{
    color: #555;
    text-decoration: underline;
}
.form-horizontal .register{
    font-size: 12px;
    text-align: center;
    padding-top: 8px;
    border-top: 1px solid #e7e7e7;
    display: block;
}


  </style>
</head>
<body>


<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <form class="form-horizontal" action="checklogin.php" method="post">
                        <h3 class="title">Login Form</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <!-- <input class="form-control" type="email" placeholder="Username"> -->
                            <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username" required>
                        </div>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <!-- <input class="form-control" type="password" placeholder="Password"> -->
                            <input type="password" class="form-control" id="loginpassword" placeholder="Enter password" name="loginpassword" required>
                        </div>
                        <button class="btn signin" name="login" id="login">Log in</button>
                        <span class="forgot-pass"><a href="#">Lost password?</a></span>
                        <span class="register"><a href="signup.php">Register / Signup</a></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <div class="container">
  <h2>Login Page</h2>
  <form action="checklogin.php" method="post" >

    <div class="form-group">
      <label for="username">UserName:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username" required>
    </div>
    <div class="form-group">
      <label for="loginpassword">Password:</label>
      <input type="password" class="form-control" id="loginpassword" placeholder="Enter password" name="loginpassword" required>
    </div>
    <div class="row">
      <div class="col">ถ้าท่านยังไม่ได้สมัครสมาชิก <a href="signup.php">ลงทะเบียนที่นี่</a></div>
      <div class="col"></div>
      <div class="col"></div>
  </div>
   
    <button type="submit" class="btn btn-success" name="login" id="login">Login</button>
  </form>
</div> -->



</body>
</html>
