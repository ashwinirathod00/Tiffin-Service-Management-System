<!DOCTYPE html>
<?php
  $con=mysqli_connect("localhost","root","","tiffin_db")or die("server or DB error");

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
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
<?php
include('sidebar.php');
?>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <br>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
      
          <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-1"></div>
          <div class="col-md-10">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">provider Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="add_provider1.php" method="POST" enctype="multipart/form-data">

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

               <div class="col-md-4">
                  <label for="inputname" class="col-sm-4 col-form-label">Address</label>
                  <input type="text" class="form-control" name="address" id="" >
                </div>

                <div class="col-md-4">
                  <label for="inputname" class="col-sm-3 col-form-label">Adhar</label>
                  <input type="number" class="form-control" name="adhar_no" id="" >
                </div>

                 <div class="col-md-4">

                  <label for="inputname" class="col-sm-4 col-form-label">Mobile</label>
                  <input type="text" class="form-control" name="mobile_no" id="" >
                </div>

              </div>

             <div class="form-group row">

              
                <div class="col-md-6">
                  <label for="inputEmail3" class="col-sm-3 col-form-label">Gender</label>
                  <select class="form-control" name="gen">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="col-md-6">

                  <label for="inputname" class="col-sm-3 col-form-label">Photo</label>
                  <input type="file" class="form-control" name="image" id="" >
                </div>
              </div>  

              <div class="form-group row">

               <div class="col-md-6">
                  <label for="inputname" class="col-sm-4 col-form-label">Username</label>
                  <input type="text" class="form-control" name="user" id="" >
                </div>

                <div class="col-md-6">
                  <label for="inputname" class="col-sm-4 col-form-label">Password</label>
                  <input type="text" class="form-control" name="pass" id="" >
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
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php
  include('footer.php');
  ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
if (isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $adhar_no=$_POST['adhar_no'];
    $mob=$_POST['mobile_no'];
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $gender=$_POST['gen'];


 $max1=mysqli_query($con,"select MAX(ID) from provider");
    $max=mysqli_fetch_row($max1);

      if($max[0])
      {
        $max=$max[0];
        $max_id=$max+1;
      }
      else 
      {
       $max_id=1;
       } 
      $file_exists=array("jpg","jpeg","png","gif","bmp","pdf");//file extenssions supported for upload 

        
        $upload_exists = end (explode('.', $_FILES["image"]["name"]));//find extension of file 
        if(($upload_exists==null )||($upload_exists==""))//file is none or of 0kb
        {
            
            echo"<script>alert('uncompatible file'); </script>";
        }
        else
        {
            if((($_FILES['image']['size']<2000000) || in_array($upload_exists,$file_exists)))//file size & file extension support
            {
             $newname="$max_id"."_provider."."png";//name of file name to be saved
                $targetfile='upload/'.$newname;//location of folder with target file name 
                if($_FILES['image']['error']>0)//check if any error in file 
                {
                    echo"<script>alert('image 2 large  or pdf large size should b less than 2 mb');</script>";
                }
                else
                {
                    //upload file to location set above
                    move_uploaded_file($_FILES['image']['tmp_name'],$targetfile);

if(mysqli_query($con,"INSERT INTO provider VALUES('','".$name."','".$email."','".$address."','".$adhar_no."','".$mob."','".$gender."','".$username."','".$password."','".$targetfile."')"))
    {
       echo"
       <script>
       alert('New Provider added...');
       window.location.href='add_provider1.php';
       </script>
       ";
    }
    else
    {
      echo"
      <script>
       alert('try again...');
       window.location.href='add_provider1.php';
      </script>
      ";
    }
}

}
}
}
?>

    
