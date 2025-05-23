<?php 
session_start();
include('../dbconfig.php');
$user= $_SESSION['user'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
//print_r($users);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Faculty feedback System</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#4F5B93">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:#FFFFFF" href="#">Hello <?php echo $users['name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php"  style="color:#FFFFFF">Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php" style="background:#4F5B93">Dashboard <span class="sr-only">(current)</span></a></li>
			
			<li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=update_profile"><span class="glyphicon glyphicon-asterisk"></span> Update Profile</a></li>
			 <li><a href="index.php?page=feedback"><span class="glyphicon glyphicon-thumbs-down"></span> Feedback</a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
				if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
			if($page=="feedback")
			{
				include('give_feedback.php');
			
			}
		  }
		  else
		  {
		  
		  ?>
		   
		  <h1 class="page-header">Dashboard</h1>
		  
      <div class="row placeholders">
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBx6OEhwd2b-5ioOzOEzdmLDki4thD-U-PUA&s" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Shri. Dadaji Bhuse,</h4>
        <span class="text-muted">Hon'ble Minister, Higher & Technical Education, (M.S.)</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlgjaRXT9SYXASWo-GwuQhgJhIzoIMvNM7ZQ&s" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Mr. VP Pawar,</h4>
        <span class="text-muted">Principal Secretary, ASM's IBMR, Chinchwad, Pune</span>
    </div>
    <div class="col-xs-6 col-sm-3 placeholder">
        <img src="https://static.wixstatic.com/media/123b37_7dfd547cef604f2aa583aaf0a27bef08~mv2.jpg/v1/fill/w_470,h_470,al_c,q_80,enc_avif,quality_auto/Sandeep-Pachpande-Sir%201%20(1).jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>Dr. Sandeep Pachpande,</h4>
        <span class="text-muted">Director, ASM's IBMR, Chinchwad, Pune</span>
    </div>
</div>

<?php } ?>
        
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
