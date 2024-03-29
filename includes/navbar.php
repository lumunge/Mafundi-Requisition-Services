<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
<div class="sidebar-brand-icon rotate-n-15">
<i class="fas fa-wrench"></i>
</div>
<div class="sidebar-brand-text mx-3">Mafundi Requisitions</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
<a class="nav-link" href="index.php">
<i class="fas fa-fw fa-tachometer-alt"></i>
<span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
<i class="fas fa-fw fa-cog"></i>
<span>Components</span>
</a>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
<h6 class="collapse-header">Custom Components:</h6>
<a class="collapse-item" href="buttons.html">Buttons</a>
<a class="collapse-item" href="cards.html">Cards</a>
</div>
</div>
</li>




<li class="nav-item">
<a class="nav-link" href="register.php">
<i class="fas fa-fw fa-chart-area"></i>
<span>Admin Profile</span></a>
</li>



<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
<i class="fas fa-fw fa-wrench"></i>
<span>Utilities</span>
</a>
<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
<h6 class="collapse-header">Custom Utilities:</h6>
<a class="collapse-item" href="utilities-color.html">Colors</a>
<a class="collapse-item" href="utilities-border.html">Borders</a>
<a class="collapse-item" href="utilities-animation.html">Animations</a>
<a class="collapse-item" href="utilities-other.html">Other</a>
</div>
</div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
<i class="fas fa-fw fa-folder"></i>
<span>Pages</span>
</a>
<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
<h6 class="collapse-header">Login Screens:</h6>
<a class="collapse-item" href="login.php">Login</a>
<a class="collapse-item" href="register.php">Register</a>
<h6 class="collapse-header">Other Pages:</h6>
<a class="collapse-item" href="a.home.php">Home</a>
<a class="collapse-item" href="customerlogin.php">Customer Login.</a>
<a class="collapse-item" href="techlogin.php">Technician Login.</a>
<a class="collapse-item" href="feedback.php">FAQS&Feedback</a>
<a class="collapse-item" href="help.php">Help</a>
<a class="collapse-item" href="#">Forgot Password</a>
<div class="collapse-divider"></div>
<h6 class="collapse-header">Other Pages:</h6>
<a class="collapse-item" href="#">404 Page</a>
<a class="collapse-item" href="#">Blank Page</a>
</div>
</div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
<a class="nav-link" href="charts.html">
<i class="fas fa-fw fa-chart-area"></i>
<span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
<a class="nav-link" href="tables.html">
<i class="fas fa-fw fa-table"></i>
<span>Tables</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
<i class="fa fa-bars"></i>
</button>

<h4 style="color: inherit;">Mafundi Requisition Services.</h4>

<!-- Topbar Search to search the database for anything
<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
<div class="input-group">
<input type="text" name="searchText" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-primary" type="button" name="search">
<i class="fas fa-search fa-sm"></i>
</button>
</div>
</div>
</form> -->


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow d-sm-none">
<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-search fa-fw"></i>
</a>
<!-- Dropdown - Messages -->
<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
<form class="form-inline mr-auto w-100 navbar-search">
<div class="input-group">
<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-primary" type="button">
  <i class="fas fa-search fa-sm"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<?php
include "functions.php";
?>



<!-- Nav Item - Alerts -->
<li class="nav-item dropdown no-arrow mx-1">
<div class="nav-link" href="" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<a href="#"> <i class="fas fa-bell fa-fw"></i>

<?php
$query = "SELECT * FROM `bookings` WHERE `status` = 'unread';";
if(count(fetchAll($query)) > 0){

?>

<!-- Counter - Alerts -->
<span class="badge badge-danger badge-counter"><?php echo count(fetchAll($query)); ?></span>
<?php
}
?>

</a>

<div class="dropdown-menu" aria-labelledby="dropdown01">
<?php
  if(count(fetchAll($query)) > 0){  
    foreach(fetchAll($query) as $i){

    }
?>
<a href="a.home.php" class="dropdown-item">
  <small><i><?php  echo $i['date'] ?></i></small><br>
  <?php echo $i['username']?>
</a>
<div class="dropdown-divider"></div>
<?php
  }else{
    echo "No Bookings Yet";
  }
?>
</div>
</div>



<!-- Dropdown - Alerts -->
<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">

<!-- Nav Item - Messages -->
<li class="nav-item no-arrow mx-1">
<a class="nav-link" href="inbox.php" id="" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-envelope fa-fw"></i>
<!-- Counter - Messages -->
<span class="badge badge-danger badge-counter">
<?php
require 'dbconfig.php';
$query = "SELECT msg_id FROM adminmessages ORDER BY msg_id";
$query_run = mysqli_query($conn, $query);

$row = mysqli_num_rows($query_run);
//DISPLAYS TOTAL NO. OR ROWS IN THE DATABASE.
echo '<p style = "font-size: 10px;"> + ' .$row.'</p>';

?>
</span>
</a>
<!-- Dropdown - Messages -->
<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">

<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="mr-2 d-none d-lg-inline text-gray-600 small">
<!--TO DISPLAY NAME OF THE ADMIN LOGGED IN-->
<?php echo $_SESSION['username']; ?>

</span>
<img class="img-profile rounded-circle" src="../img/patner20.jpg">
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
<a class="dropdown-item" href="#">
<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
Profile
</a>
<a class="dropdown-item" href="#">
<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
Settings
</a>
<a class="dropdown-item" href="#">
<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
Activity Log
</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
Logout
</a>
</div>
</li>

</ul>

</nav>
<!-- End of Topbar -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

<form action="logout.php" method="POST"> 

<button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

</form>


</div>
</div>
</div>
</div>