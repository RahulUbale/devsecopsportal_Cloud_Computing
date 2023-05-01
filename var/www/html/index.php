<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <style>

      input.form-check-input{
        width: 1.5rem;
        height: 1.5rem;
      }

      .sidebar-dark .nav-item.active .nav-link{
        color: #66050a;
      }
      .card-body{
        border-color: black !important;
        
      }
      .nav-item{
        color: white !important;
      }

      .topbar{
        background-color: #66050a !important;
      }

      .form-check-label{
        margin: 10px !important;
      }
      .modal-content{
    
      width: 700px !important;
      
      }
      .bg-gradient-primary{
      background-color:#66050a !important;
      background-image:linear-gradient(180deg,#66050a 10%,#66050a 100%) !important;
      background-size:cover
      }
      .btn-primary{
        background-color: #cc333a !important;
        border-color: #000 !important;

      }
      .card-header{
        
        font-size: 16px !important;
      }
      .card-subtitle,.card-text{
        font-size: 14px !important;
      }
      
  </style>

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/bs-stepper.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.1.0/dist/css/mstepper.min.css">

</head>
<?php 
include('connection.php');
session_start();
?>
<body id="page-top" class="toggled sidebar-toggled">
         
  <!-- Page Wrapper -->
  <div id="wrapper">
	
		  
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar" >

	 
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-text mx-3" style="display:inline; !IMPORTANT"><img src="img/indiana.png" height="42" width="70"/></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DEVSECOPS TEMPLATE</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

	 <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="app.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>APPLICATIONS</span></a>
      </li>
	  
	  <!-- Divider -->
      <hr class="sidebar-divider">
	  
	   <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="run.php">
          <i class="fas fa-fw fa-table"></i>
          <span>RUN</span></a>
      </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
	  
    <!-- Nav Item - Dashboard -->
     <li class="nav-item">
       <a class="nav-link" href="integration.php">
         <i class="fas fa-fw fa-tools"></i>
         <span>INTEGRATION</span></a>
     </li>
     <!-- <li class="nav-item">
       <a class="nav-link" href="cspmscan.php">
         <i class="fas fa-fw fa-tools"></i>
         <span>CSPM Scan</span></a>
     </li> -->

      

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
         <nav class="navbar topbar  shadow" style="background-color: #80b3ff">
		  <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
		<span class="h5" style="color:#fff;">DevSecOps Automation Platform</span>

    <span style="align-content: right;color:#fff;" class="glyphicon glyphicon-user">  Admin </span>
    
		  </nav>
        <!-- Begin Page Content -->
		
		
        <div class="container-fluid">
<br><br>



<div id="stepper3" class="bs-stepper">
          <div class="bs-stepper-header" role="tablist">
            <div class="step" data-target="#test-nlf-1">
              <a href="index.php" type="button" class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-nlf-1" >
                <span class="bs-stepper-circle">
                  <span class="fas fa-user"  aria-hidden="true"></span>
                </span>
                <span class="bs-stepper-label" style="color: #cc333a; font-weight: bold;">Define Template</span>
               </a>
            </div>
            <div class="bs-stepper-line"></div>
            <div class="step" data-target="#test-nlf-2">
              <a href="app.php" type="button" class="step-trigger" role="tab" id="stepper3trigger2" aria-controls="test-nlf-2">
                <span class="bs-stepper-circle">
                  <span class="fas fa-map-marked" aria-hidden="true"></span>
                </span>
                <span class="bs-stepper-label">Onboard Application</span>
              </a>
            </div>
            <div class="bs-stepper-line"></div>
            <div class="step" data-target="#test-nlf-3">
              <a href="run.php" type="button" class="step-trigger" role="tab" id="stepper3trigger3" aria-controls="test-nlf-3">
                <span class="bs-stepper-circle">
                  <span class="fas fa-save" aria-hidden="true"></span>
                </span>
                <span class="bs-stepper-label">Execute Pipeline</span>
              </a>
            </div>
          </div>
          <div class="bs-stepper-content">
          </div>
        </div>

        
     





<!-- <ul class="nav nav-tabs justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Step 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="app.php">Step 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="run.php">Step 3</a>
  </li>
</ul> -->
            <div class=" card shadow mb-5">
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h1 class="h5 mb-2 text-gray-800">DevSecOps Template:   

              <a href="#" data-toggle="modal" data-target="#addProfile">
                 <i class=""><button class="btn btn-primary" >Add New DevSecOps Template</button></i>
                  
                </a>

               </h1>
            
             
            </div>



            
            </div>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">



         




          
<div class="container-fluid">


<?php

$q=mysqli_query($con,"SELECT*FROM profile");
if(!empty($q)){
	$rowcount=mysqli_num_rows($q);
?>
<h1 class="h5 mb-3 text-gray-800">Available DevSecOps Template: <?php echo $rowcount ?></h1>
<div class="row" style="column-gap: 15px;row-gap:15px;">
 
<?php	
	while($rows=mysqli_fetch_assoc($q)){
?>
<div class="card col-lg-3">
  <div class="card-body">
    <h5 class="card-header border border-dark " style="color:#fff;background-color: #cc333a;"><?php echo $rows['name'] ?></h5>
    <h6 class="card-subtitle mb-2 col-lg-12 text-muted" style="padding:10px;">Created On : <span class="card-text" style="color:black;"><?php echo $rows['updated_at'] ?></span></h6>
   <h6 class="card-subtitle mb-2 col-lg-12 text-muted" style="padding:10px;">Assigned Scans :</h6>
    <p class="card-text " style="color:black;"><?php echo str_replace(",",", ",strtoupper($rows['tag'])); ?></p>

    <?php if($rows['id']=="9" ||$rows['id']=="10" ) 

    {}
    else{
    
    ?>

    <a href="#" class="card-link"><i class="fas fa-user-edit" data-toggle="modal" data-target="#editUser"></i></a>
    <a href="#" class="card-link" style="color: #ff1a1a;"><i class="fas fa-minus-circle" data-toggle="modal" data-target="#delUser" id="<?php echo $rows['id'] ?>"></i></a>

    <?php 
    }
    ?>


  </div>
</div>


<!---edit user -->

<form method="post" action="#">
  <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="">EDIT PROFILE</h5>
		  <h5 class="modal-body"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            
          </button>
        </div>
		<div class="modal-body">
		<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="10%" aria-valuemin="0" aria-valuemax="100" style="width:10%"></div>
</div><br>
  <div class="form-group">
    <label>This action is irreversible! Submit the delete request ?</label>
  </div>

		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input class="btn btn-warning" href="#" type="submit" name="submit_profile_edit" value="Edit" id="<?php echo $rows['id'] ?>"></input>
        </div>
      </div>
    </div>	
  </div></form>
  
  <?php 
if(isset($_POST['submit_profile_delete'])){
	$query=mysqli_query($con,"DELETE FROM profile WHERE id=17");
	$error="Profile added successfully";
}
else{
	echo "";
}


?>





<!---delete user -->

<form method="post" action="#">
  <div class="modal fade" id="delUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" >
        <div class="modal-header">
          <h5 class="modal-title" style="color: Red;">DELETE PROFILE</h5>
		  <h5 class="modal-body"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            
          </button>
        </div>
		<div class="modal-body">
		<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="10%" aria-valuemin="0" aria-valuemax="100" style="width:10%"></div>
</div><br>
  <div class="form-group">
    <label>This action is irreversible! Submit the delete request ?</label>
  </div>
<div class="form-check form-check-inline">
  <input class="form-check-input" data-toggle="toggle" type="checkbox" id="inlineCheckbox3" value="<?php echo $rows['id'] ?>" name="del">
  <label class="form-check-label" data-toggle="toggle"><?php echo $rows['name'] ?></label>
</div><br>
		</div>
        <div class="modal-footer">
			
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input class="btn btn-danger" href="#" type="submit" name="submit_profile_delete" value="Delete" id="<?php echo $rows['id'] ?>"></input>
        </div>
      </div>
    </div>	
  </div></form>
  
  <?php 
$id=$rows['id'];
if(isset($_POST['submit_profile_delete'])){
	// $query=mysqli_query($con,"DELETE FROM profile WHERE id='$id'");
	$error="Profile deleted successfully";
}
else{
	echo "";
}


?>
  
<?php 
}
}
else{echo"";}
?>
</div>
</div>



          </div>

          <!-- Content Row -->
          <div class="row">
            

          </div>
        <!-- /.container-fluid -->

      </div>
      
	  
	  <!-- profile details -->








      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Created by ENGR-E 516</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Add new profile-->
  <form method="post" action="#">
  <div class="modal fade" id="addProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document"  >
      <div class="modal-content"  >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enter DevSecOps Template Details</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		<div class="modal-body">
		<!-- <div class="progress">
  <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="33%" aria-valuemin="0" aria-valuemax="100" style="width:33%"></div>
</div> -->
  <div class="form-group">
    <label>DevSecOps Template Name :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="add_profile" required>
  </div>
  <div class="dropdown">
    <label>Assign Security Scanner: </label><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" data-toggle="toggle" type="checkbox" id="inlineCheckbox3" value="sast" name="services[]">
  <label class="form-check-label" data-toggle="toggle">Static Application Security Testing (SAST), (Scanner:SpotBugs)</label>
</div><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" data-toggle="toggle" type="checkbox" id="inlineCheckbox3" value="sca" name="services[]">
  <label class="form-check-label" data-toggle="toggle">Software Composition Analysis (SCA), (Scanner:OWASP Dependency Check)</label>
</div><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" data-toggle="toggle" type="checkbox" id="inlineCheckbox3" value="secret scan" name="services[]">
  <label class="form-check-label" data-toggle="toggle">Secret Scan (Scanner: Gitleaks)</label>
</div><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" data-toggle="toggle" type="checkbox" id="inlineCheckbox3" value="container image scan" name="services[]">
  <label class="form-check-label" data-toggle="toggle">Container Image Scan (Scanner:Trivy) </label>
</div><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" data-toggle="toggle" type="checkbox" id="inlineCheckbox3" value="securing platform/host" name="services[]">
  <label class="form-check-label" data-toggle="toggle">VM/Host Scan (Scanner:Nmap)</label>
</div><br>
<div class="form-check form-check-inline">
  <input class="form-check-input" data-toggle="toggle" type="checkbox" id="inlineCheckbox3" value="dast" name="services[]">
  <label class="form-check-label" data-toggle="toggle">Dynamic Application Security Testing (DAST) (Scanner:OWASP Zap)</label>
</div>
  </div>
		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input class="btn btn-primary" href="#" type="submit" name="submit_profile"></input>
        </div>
      </div>
    </div>	
  </div></form>




  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
