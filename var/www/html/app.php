<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <style>
    .sidebar-dark .nav-item.active .nav-link{
        color: #66050a;
      }
      .card-body{
        border-color: black !important;
        
      }
      .nav-item{
        color: white !important;
      }

      

      .form-check-label{
        margin-bottom: 10px !important;
      }
      .modal-content{
    
      width: 900px !important;
      
      }
      .bg-gradient-primary{
      background-color:#66050a !important;
      background-image:linear-gradient(180deg,#66050a 10%,#66050a 100%) !important;
      background-size:cover
      }
      .topbar{
        background-color: #66050a !important;
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

  <style>
    .form-control{
      margin: 10px;
    }

    .modal-dialog {
      max-width: 90%;
      max-height:70%;
      }

      label{
        color: black;
        margin-inline-start: 10px;
      }
      .card-header{
        
        font-size: 16px !important;
      }
  </style>

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
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DEVSECOPS TEMPLATE</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

	 <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
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
         <nav class="navbar topbar  shadow" >
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
              <a href="index.php" type="button" class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-nlf-1">
                <span class="bs-stepper-circle">
                  <span class="fas fa-user" aria-hidden="true"></span>
                </span>
                <span class="bs-stepper-label">Define Template</span>
               </a>
            </div>
            <div class="bs-stepper-line"></div>
            <div class="step" data-target="#test-nlf-2">
              <a href="app.php" type="button" class="step-trigger" role="tab" id="stepper3trigger2" aria-controls="test-nlf-2">
                <span class="bs-stepper-circle">
                  <span class="fas fa-map-marked" aria-hidden="true"></span>
                </span>
                <span class="bs-stepper-label" style="color: #cc333a;">Onboard Application</span>
              </a>
            </div>
            <div class="bs-stepper-line"></div>
            <div class="step" data-target="#test-nlf-3">
              <a href="run.php" type="button" class="step-trigger" role="tab" id="stepper3trigger3" aria-controls="test-nlf-3">
                <span class="bs-stepper-circle">
                  <span class="fas fa-save" aria-hidden="true"></span>
                </span>
                <span class="bs-stepper-label" >Execute Pipeline</span>
              </a>
            </div>
          </div>
          <div class="bs-stepper-content">
          </div>
        </div>
     


<!-- <ul class="nav nav-tabs justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Step 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="app.php">Step 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="run.php">Step 3</a>
  </li>
</ul> -->
<div class=" card shadow mb-5">
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h1 class="h5 mb-2 text-gray-800">Application Onboarding

              <a class="container" href="#" data-toggle="modal" data-target="#addProfile">
                 <i class=""><button class="btn btn-primary" >Add New Application</button></i>
                </a>


              </h1></div></div>
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">

          <div class="container-fluid">

          <?php

  $q=mysqli_query($con,"SELECT * FROM application inner join profile on application.profile_id = profile.id");
  if(!empty($q)){
    $rowcount=mysqli_num_rows($q);
  ?>
 <h1 class="h5 mb-3 text-gray-800">Onboarded Applications: <?php echo $rowcount ?></h1>
<div class="row" style="column-gap: 15px;row-gap:15px;">
 
  
 
  
  <?php	
    while($rows=mysqli_fetch_assoc($q)){
  ?>
  <div class="card col-lg-3">
    <div class="card-body">
      <h5 class="card-header" style="color:#fff; background-color: #cc333a;"><?php echo $rows['app_name'] ?></h5>
      <h6 class="card-subtitle mb-2 col-lg-12 text-muted" style="padding:10px;">Created On : <span class="card-text" style="color:black;"><?php echo $rows['updated_at'] ?></span></h6>
    <h6 class="card-subtitle mb-2 col-lg-12 text-muted" style="padding:10px;">Assigned Scans :</h6>
      <p class="card-text" style="color:black;"><?php echo str_replace(",",", ",strtoupper($rows['tag'])); ?></p>
    <a href="#" class="card-link"><i class="fas fa-user-edit" data-toggle="modal" data-target="#editUser"></i></a>
      <a href="#" class="card-link" style="color: red;"><i class="fas fa-minus-circle" data-toggle="modal" data-target="#delUser" id="<?php echo $rows['id'] ?>"></i></a>
    </div>
  </div>



    

      
	  
	  <!-- profile details -->







    <!-- Content Row -->
   

  <!-- /.container-fluid -->







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
		<!-- <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="10%" aria-valuemin="0" aria-valuemax="100" style="width:10%"></div>
</div><br> -->
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
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" style="color: Red;">DELETE PROFILE</h5>
		  <h5 class="modal-body"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            
          </button>
        </div>
		<div class="modal-body">
		<!-- <div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="10%" aria-valuemin="0" aria-valuemax="100" style="width:10%"></div>
</div><br> -->
  <div class="form-group">
    <label>This action is irreversible! Submit the delete request ?</label>
  </div>

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
	$query=mysqli_query($con,"DELETE FROM profile WHERE id='$id'");
	$error="Profile added successfully";
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
    <div class="modal-dialog" role="document" style="width: 800px;height: 300px;"> 
      <div class="modal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Application Onboarding form for DevSecOps</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		<div class="modal-body">
		<!-- <div class="progress">
  <div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" aria-valuenow="66%" aria-valuemin="0" aria-valuemax="100" style="width:66%"></div>
</div> -->
  <div class="form-group">
 
    <input type="text" class="form-control" placeholder="Application Name" id="exampleInputEmail1" name="add_application" required>

    <!-- DAST-->
    
    <div class="dast" id="dast" style="display: none" >
    <label> DAST Scan :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Starting URL" name="dast_auth_url" >
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Login Username for authentication" name="dast_username" >
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="HTML Form element for Login Username" name="dast_username_field" >
    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Login Password" name="dast_password" >
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="HTML Form element for Login Password" name="dast_password_field" >
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="URL Exclusion List" name="dast_auth_exclude_urls" >
    </div>


    <!-- SAST-->
    <div class="sast" id="sast" style="display: none" >
    <label> SAST/SCA/Secret Scan/Image scan :</label>
    <input type="text" class="form-control sast" id="exampleInputEmail1" placeholder="Code Repository URL" name="scm_url" >
    <input type="text" class="form-control sast" id="exampleInputEmail1" placeholder="Branch" name="branch" >
    <input type="text" class="form-control sast" id="exampleInputEmail1" placeholder="Technology" name="technology" >
    <input type="text" class="form-control sast" id="exampleInputEmail1" placeholder="Version" name="version" >
    <input type="text" class="form-control sast" id="exampleInputEmail1" placeholder="Username for Authentication (Optional for Public Repo)" >
    <input type="password" class="form-control sast" id="exampleInputEmail1" placeholder="Password for Authentication (Optional for Public Repo)" >
    </div>



    <!-- INFRA-->
    <div class="infra" id="infra" style="display: none" >
    <label> Infra :</label>
    <input type="text" class="form-control sast" id="exampleInputEmail1" placeholder="IP Address" name="ip_address" >
    </div>


  </div>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Available DevSecOps Template
  </button>

  <input type="hidden" id="profileid" name="profileid" value="">
  <?php

$q=mysqli_query($con,"SELECT * FROM profile");
if(!empty($q))
{
  $rowcount=mysqli_num_rows($q);
  
  echo "<div class=\"dropdown-menu\" onselect=\"showProfile()\" aria-labelledby=\"dropdownMenuButton\">";

    while($rows=mysqli_fetch_assoc($q))
    {

    
      echo "<a class=\"dropdown-item\" onselect=\"showInputs()\" href=\"javascript:showInputs('".$rows['name']."','".$rows['tag']."','".$rows['id']."');\">";
      echo $rows['name'];
      echo "</a>";
    

    }

  echo "</div>";

}
else {
  
  echo "";
}

?>

<script>
  function showInputs(profile,tags,id)
  {
    document.getElementById("profileid").setAttribute('value',id);

    document.getElementById("dropdownMenuButton").innerHTML=profile;

    document.getElementById('dast').style.display="none";
    document.getElementById('sast').style.display="none";
    document.getElementById('infra').style.display="none";
    
    if(tags.includes('sast') || tags.includes('sca'))
    document.getElementById('sast').style.display="block";
    if(tags.includes('securing platform/host'))
    document.getElementById('infra').style.display="block";
    if(tags.includes('dast'))
    document.getElementById('dast').style.display="block";
    
}

  

</script>
  
</div>

		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input class="btn btn-primary" href="#" type="submit" name="submit_application"></input>
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
  
  <script>
	function showProfile()
	{
		document.getElementById("dropdownMenuButton").innerText="AppSec";
	}
  </script>
  
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
