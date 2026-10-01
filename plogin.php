<!DOCTYPE html>
<?php
  $con=mysqli_connect("localhost","root","","tiffin_db")or die("server or DB error");
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiffin Service System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="Admin/index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="border-top: 2px solid blue;border-radius: 4px">
      <p class="login-box-msg">Sign in to start your dashboard</p>

      <form action="plogin.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user" placeholder="Enter Your Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pass" placeholder="Enter Your Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
      

      <div class="social-auth-links text-center mb-3">
        <button type="submit" name="ok" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in
        </button>
        
      </div>
      <!-- /.social-auth-links -->
</form>
    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="Admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Admin/dist/js/adminlte.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['ok']))
{
  
    $uname=$_POST['user'];
    $pass=$_POST['pass'];
    echo "select * from provider where username='".$uname."' && password='".$pass."'";
    $res=mysqli_query($con,"select * from provider where username='".$uname."' && password='".$pass."'");
    $row=mysqli_fetch_row($res);


   if($num=mysqli_num_rows($res)>0)
     {
     session_start();
     $_SESSION['provider']=$row[0];
    echo'
    <script>
    window.location.href="provider/index.php";
    </script>
    ';
    }

    
    else
    {
        echo'
    <script>
    alert("Wrong Username & Password ");
    window.location.href="plogin.php";
    </script>
    ';
    }
}
?>
