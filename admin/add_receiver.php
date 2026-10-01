<?php
$con=mysqli_connect("localhost","root","","tiffin_db")or die("server or  DB Error");
?>

<?php

session_start();
if(isset($_SESSION['admin']))
{

}
else
{
    echo'
    <script>
     window.location.href="../index.php";
    </script>
    ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiffin service System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!--<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>-->

  <!-- Navbar -->
 <?php
 include('nav.php');
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 
<?php 
include('sidebar.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
   
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          <div class="col-md-8">


            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Receiver Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


               

            <form action="add_receiver.php" method="POST">

                <div class="card-body">

            <div class="form-group row">

               <div class="col-md-6">
                  <label for="inputname" class="col-sm-3 col-form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="" >
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="" >
                </div>

              </div>

              <div class="form-group row">

               <div class="col-md-6">
                  <label for="inputname" class="col-sm-3 col-form-label">Address</label>
                  <input type="text" class="form-control" name="address" id="" >
                </div>

                <div class="col-md-6">
                  <label for="inputname" class="col-sm-3 col-form-label">Adhar</label>
                  <input type="number" class="form-control" name="adhar_no" id="" >
                </div>

              </div>

             <div class="form-group row">

               <div class="col-md-6">

                  <label for="inputname" class="col-sm-3 col-form-label">Mobile</label>
                  <input type="text" class="form-control" name="mobile_no" id="" >
                </div>
                <div class="col-md-6">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Gender</label>
                  <select class="form-control" name="gen">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>

              </div>  
              
              <div class="form-group row">
               <div class="col-md-6">

                  <label for="inputname" class="col-sm-3 col-form-label">Photo</label>
                  <input type="file" class="form-control" name="img" id="" >
                </div>
              </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-3">
                     <button type="submit" name="save" class="btn btn-block btn-success">save</button>
                     
                    </div>
                    <div class="col-md-3">
                      <button type="reset" class="btn btn-block btn-danger float-right">Cancel</button>
                    </div>
                  </div>
                </div>
            </div>
                <!-- /.card-footer -->
              </form>
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Form Element sizes -->
           
            <!-- /.card -->

            <!-- /.card -->

            <!-- general form elements disabled -->
      
            <!-- /.card -->
            <!-- general form elements disabled -->
        
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

  </div>
  <!-- /.content-wrapper -->
  <?php
  include('footer.php');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>

<?php
if (isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $adhar_no=$_POST['adhar_no'];
    $mobile_no=$_POST['mobile_no'];
    $gender=$_POST['gen'];

   
    if(mysqli_query($con,"INSERT INTO receiver VALUES('','".$name."','".$email."','".$address."','".$adhar_no."','".$mobile_no."','".$gender."','')"))
    {
       echo"
       <script>
       alert('New Receiver added');
       window.location.href='add_receiver.php';
       </script>
       ";
    }
    else
    {
      echo"
      <script>
       alert('try again...');
       window.location.href='add_receiver.php';
      </script>
      ";
    }
}

?>
