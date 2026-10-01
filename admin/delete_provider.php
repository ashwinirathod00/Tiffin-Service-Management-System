<?php
$con=mysqli_connect("localhost","root","","tiffin_db")or die("server or  DB Error");
$id=$_GET['id'];
if(mysqli_query($con,"DELETE FROM provider WHERE ID='".$id."'"))
{
	 echo"
       <script>
       alert('provider delete successfully...');
        window.location.href='provider_info.php';
       </script>
       ";
    }
    else
    {
      echo"
      <script>
       alert('try again...');
        window.location.href='provider_info.php';
      </script>
      ";
    }

?>