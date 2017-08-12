<? session_start();
if ($_SESSION['id_admin'])
{
?>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Rincial Calon Ketos</title>
	<link href='images/osis.png' rel='shortcut icon'>
    <!-- Bootstrap Core CSS -->
    <link href="css_admin/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css_admin/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire"></span> PILKOSIS</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index_admin.php">Home</a>
                    </li>
                    <li>
                        <a href="tampil_dpt.php">DPT</a>
                    </li>
					<li>
                        <a href="tampil_komentar.php">Komentar</a>
                    </li>
                    <li>
                        <a href="calon_ketos.php">Input Caksis & Cawaksis</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#">Profile Admin</a></li>
							<li><a href="logout_admin.php">Logout</a></li>
						</ul>
					</li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="jumbotron feature">
		<div class="container">
		
		<div id="feature-carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#feature-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#feature-carousel" data-slide-to="1"></li>
					<li data-target="#feature-carousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<a href="#">
							<img class="img-responsive" src="foto/slider1.png" alt="">
						</a>
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="foto/slider2.png" alt="">
						</a>
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="foto/slider3.png" alt="">
						</a>
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>			  
				</div>
			<a class="left carousel-control" href="#feature-carousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#feature-carousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>

		</div>
	</div>

<div class="container-fluid"><center>
		<h1>Edit DPT Aplikasi Pilkosis<p>
                    <small>Periode 2017/2018</small>
                </h1></center>
		<!-- Left Column -->
		<div class="col-sm-3">

			<!-- List-Group Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> List Admin</h1>
				</div>
				<div class="list-group">
					<a href="#" class="list-group-item">Slamet Apriyanto<span class="badge">2014/2015</span></a>
					<a href="#" class="list-group-item">Widiyanto<span class="badge">2014/2015</span></a>
					<a href="#" class="list-group-item">Hafidh Difa Al-Haq<span class="badge">2015/2016</span></a>
					<a href="#" class="list-group-item">Aditya Himawan<span class="badge">2016/2017</span></a>
					<a href="#" class="list-group-item">Misbakhul Munir<span class="badge">2016/2017</span></a>
				</div>
			</div>

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Catatan</h1>
				</div>

				<div class="panel-body">
					<p>Mohon untuk Admin agar tidak boleh Memanipulasi Data Hasil Pilkosis ini *Admin 2016/2017</p>
				</div>
			</div>
		
		</div><!--/Left Column-->
  
  
		<!-- Center Column -->
		<div class="col-sm-6">
		
			<!-- Alert -->
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning:</strong> Selain Admin Pilkosis dilarang akses Halaman ini!!!
			</div>		
		
			<!-- Articles -->
			<div class="row">
				<article class="col-xs-12">
<div id="main">
          <!-- sidebar --> 
         	              
      <div id="content">
                <div id="contheader">
        </div>
<div id="content2">	
                    <div class="post">
                        <h2></h2>
                  <div class="entry" align="center"><?php include "include_rincian_calon_ketos.php";?>
                    <p></p>
                  </div>
                    </div><div class="post"></div>
                    <!-- post -->	
                </div><!-- content2 -->		
                 </div>
					
					
			
					</div>
				</article>
			</div>
			
		</div><!--/Center Column-->

</div></div></div>
 
	
	<footer>
	
        
        <div class="small-print">
        	<div class="container">
        		<p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<p>Copyright &copy;OSIS_TEAM 2016/2017 </p>
        	</div>
        </div>
	</footer>

	
    <!-- jQuery -->
    <script src="js_admin/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js_admin/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="js_admin/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="js_admin/holder.min.js"></script>
	
</body>

</html>

 <?
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="login.php";
	</script>
	<?
}
?>