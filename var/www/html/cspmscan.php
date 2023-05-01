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
      color: #333333 !important;
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
        background-color: #80b3ff !important;
      }

      .form-check-label{
        margin-bottom: 10px !important;
      }
      .modal-content{
    
      width: 900px !important;
      
      }
      .bg-gradient-primary{
      background-color:#80b3ff !important;
      background-image:linear-gradient(180deg,#80b3ff 10%,#80b3ff 100%) !important;
      background-size:cover
      }
      .btn-primary{
        background-color: #3385ff !important;
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
        <div class="sidebar-brand-text mx-3" style="display:inline; !IMPORTANT"><img src="img/tata_logo.png" height="42" width="92"/></div>
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
       <li class="nav-item">
         <a class="nav-link" href="integration.php">
           <i class="fas fa-fw fa-tools"></i>
           <span>INTEGRATION</span></a>
       </li>
       <li class="nav-item active">
       <a class="nav-link" href="cspmscan.php">
         <i class="fas fa-fw fa-search"></i>
         <span>CSPM Scan</span></a>
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
              <h1 class="h3 mb-2 text-gray-800">CSPM Scan </h1>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <h3 id="cspmscan"><i class="fa fa-check-circle" style="font-size:24px;color:green"></i>CSPM Scan results</h3>
                <p id="pp"></p>
                <table class="table table-bordered" id="mytable" width="100%" cellspacing="0">
                <tr>
                  <th>TITLE&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color:orange;border-radius:10px;"><b>LOW</b></button></th>
                </tr>
                <tr>
                  <td id="title"></td>  
                </tr>
                <tr>
                  <th>CATEGORY</th>
                </tr>
                <tr>
                  <td id="category"></td>  
                </tr>
                <tr>
                  <th>DESCRIPTION</th>
                </tr>
                <tr>
                  <td id="description"></td>  
                </tr>
                <tr>
                  <th>MORE INFO</th>
                </tr>
                <tr>
                  <td id="moreinfo"></td>  
                </tr>
                <tr>
                  <th>RECOMMENDED ACTION</th>
                </tr>
                <tr>
                  <td id="recommendedaction"></td>  
                </tr>
                <tr>
                  <th>LINK</th>
                </tr>
                <tr>
                  <td id="link"></td>  
                </tr>
                
                <!-- <tr>
                  <th>SEVERITY</th>
                </tr>
                <tr>
                  <td id="severity"></td>  
                </tr> -->
                  </tbody>
                </table>
              </div>
                <div class="container">
                    <div class="row row-md-3">
                        <div class="col col-lg-4">
                        
                        </div>
                        <div class="col col-lg-4">
                            <img class="integrations" id="integration" src="img/cspm.png" />
                            <p id="pp"></p>
                            
                        </div>
                        <div class="col col-lg-4">
                        
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
<script>
  $(document).ready(function(){
    $('#mytable').hide();
    $('#cspmscan').hide();
    $('#integration').click(function(){  
      var id=1;
        var request = new XMLHttpRequest();
        request.open('POST', 'https://private-anon-f73be8b039-cloudsploit.apiary-mock.com/v2/realtimes/id');
        request.setRequestHeader('Content-Type', 'application/json');
        request.setRequestHeader('X-API-Key', 'abc123');
        request.setRequestHeader('X-Signature', 'xyz456');
        request.setRequestHeader('X-Timestamp', '12345678910');

        request.onreadystatechange = function () {
        if (this.readyState === 4) {
            console.log('Status:', this.status);
            console.log('Headers:', this.getAllResponseHeaders());
            console.log('Body:', this.responseText);
        }
        };
        var body = {
        'key_id': 1,
        'test_ids': [
            1,
            2,
            3
        ],
        'save': true
        };
        request.send(JSON.stringify(body));
        //alert("CSPM scan triggered");
        var resptext = "";
        var request = new XMLHttpRequest();
        request.open('GET', 'https://private-anon-f73be8b039-cloudsploit.apiary-mock.com/v2/realtimes/1');
        request.setRequestHeader('Content-Type', 'application/json');
        request.setRequestHeader('X-API-Key', 'abc123');
        request.setRequestHeader('X-Signature', 'xyz456');
        request.setRequestHeader('X-Timestamp', '12345678910');

        

        request.onreadystatechange = function () {
        if (this.readyState === 4) {
        resptext = this.responseText;
        console.log('Status:', this.status);
        console.log('Headers:', this.getAllResponseHeaders());
        console.log('Body:', this.responseText);
        //alert("Result fetched");
        
        var data = JSON.parse(this.responseText);
       
        console.log(data);
        document.getElementById("title").innerHTML = data.results[0].title;
        document.getElementById("category").innerHTML = data.results[0].category;
        document.getElementById("description").innerHTML = data.results[0].description;
        document.getElementById("moreinfo").innerHTML = data.results[0].more_info;
        document.getElementById("recommendedaction").innerHTML = data.results[0].recommended_action;
        document.getElementById("link").innerHTML = data.results[0].link;
        // document.getElementById("severity").innerHTML = data.results[0].severity;
        
          $('#mytable').show();
          $('#cspmscan').show();
        
        }
        }
        request.send();
        
    });
  });
</script>
</html>