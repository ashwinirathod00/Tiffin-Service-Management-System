<?php
  $con=mysqli_connect("localhost","root","","tiffin_db")or die("server or DB error");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiffin service system</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../admin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../admin/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

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
        <br>
        <div class="row">
          
          <div class="col-md-2"></div>
          <div class="col-md-8">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Customer Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form action="add_customer.php" method="POST">

                <div class="card-body">

            <div class="form-group row">

               <div class="col-md-6">
                  <label for="inputname" class="col-sm-3 col-form-label">Name</label>
                  <input type="text" class="form-control" name="name" required="" placeholder="Enter....." >
                </div>
                <div class="col-md-6">
                  <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                  <input type="email" class="form-control" name="email"  >
                </div>

              </div>

              <div class="form-group row">

               <div class="col-md-6">
                  <label for="inputname" class="col-sm-4 col-form-label">Address</label>
                  <textarea class="form-control" name="address"></textarea>
                </div>
                <div class="col-md-6">
                  <label for="inputAdhar" class="col-sm-3 col-form-label">Adhar</label>
                  <input type="text" class="form-control" name="adhar_no" id="" >
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
                  <label for="inputname" class="col-sm-4 col-form-label">Username</label>
                  <input type="text" class="form-control" name="user" id="" >
                </div>

                <div class="col-md-6">
                  <label for="inputname" class="col-sm-4 col-form-label">Password</label>
                  <input type="number" class="form-control" name="pass" id="" >
                </div>

              </div>

              

              <div class="form-group row">
               <div class="col-md-6">

                  <label for="inputname" class="col-sm-3 col-form-label">Photo</label>
                  <input type="file" class="form-control" name="img" id="" >
                </div>

                <div class="card-footer">
                  <div class="row">
                    <div class="col-md-12">
                     <button type="submit" name="save" class="btn btn-success">save</button>
                     <button type="reset" class="btn btn-danger float-right">Cancel</button>
                    </div>
                  </div>
                </div>
            </div>
                <!-- /.card-footer -->
              </form>
            </div>


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

<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../admin/plugins/moment/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../admin/dist/js/pages/dashboard.js"></script>
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

   
    if(mysqli_query($con,"INSERT INTO Customer VALUES('','".$name."','".$email."','".$address."','".$adhar_no."','".$mobile_no."','".$gender."')"))
    {
       echo"
       <script>
       alert('Done...');
       window.location.href='add_customer.php';
       </script>
       ";
    }
    else
    {
      echo"
      <script>
       alert('try again...');
       window.location.href='add_customer.php';
      </script>
      ";
    }
  }
?>