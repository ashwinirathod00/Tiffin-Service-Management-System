 <?php
$con=mysqli_connect("localhost","root","","tiffin_db")or die("server or  DB Error");

session_start();
$pro=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM provider WHERE ID='".$_SESSION['provider']."'"));
?>
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="b.jpeg" style="width: 50px;height: 100px" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span style="font-weight: bold;" class="brand-text font-weight-light">TSS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../admin/<?php echo $pro[9]?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $pro[1]?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-fw fa-home"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
        
          </li>
         
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-tasks"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_menu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="menu_info.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu Info</p>
                </a>
              </li>
              
            </ul>
          </li>
          

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-user-alt"></i>
              <p>
                Customer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_customer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Customer</p>
              </a>
            </li>
          </ul>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="view_customer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Customer</p>
              </a>
            </li>
          </ul>
        </li>

         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fab fa-cc-amazon-pay"></i>
              <p>
                price
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="add_price.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Open menu</p>
              </a>
            </li>
          </ul>

         
       
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>