<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <style>
     td,th{
      color: #66050a !important;
    }
    .sidebar-dark .nav-item.active .nav-link{
        color: black;
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
      .btn-primary{
        background-color: #66050a !important;
        border-color: #000 !important;

      }
      .card-header{
        
        font-size: 16px !important;
      }
      .card-subtitle,.card-text{
        font-size: 14px !important;
      }

      .integrations{
          width: 200px;
          height: 200px;
          object-fit: contain;
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
    .btn{
      margin: 4px;
    }
  </style>

</head>

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
       <li class="nav-item active">
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
         <nav class="navbar topbar  shadow" style="background-color:#800080">
		  <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
    <span class="h5" style="color:#fff;">DevSecOps Automation Platform</span>
    <span style="align-content: right;color:#fff;" class="glyphicon glyphicon-user">  Admin </span>
		  </nav>
        <!-- Begin Page Content -->
		
		
        <div class="container-fluid"><br>
<!-- Page Heading -->


     

<!-- <ul class="nav nav-tabs justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Step 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="app.php">Step 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="run.php">Step 3</a>
  </li>
</ul> -->





          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h1 class="h3 mb-2 text-gray-800">Integrations </h1>
            </div>
            <div class="card-body">
            
           









                <div class="container">


                    <div class="row row-md-3">
                        <div class="col col-lg-4">
                        
                        </div>
                        <div class="col col-lg-4">
                            <img class="integrations" src="img/jenkins.png" />
                        </div>
                        <div class="col col-lg-4">
                        
                        </div>
                    </div>


                    <div class="row">
                        <div class="col col-lg-4">
                        <img class="integrations" src="img/spotbugs.png" />
                        </div>
                        <!-- <div class="col col-lg-4">
                        <img class="integrations" src="img/dependencycheck.png" />
                        </div> -->
                        <div class="col col-lg-4">
                        <img class="integrations" src="img/gitleaks.png" />
                        </div>
                        <div class="col col-lg-4">
                        <img class="integrations" src="img/owaspzap.png" />
                        </div>
                    </div>

                </div>





            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>