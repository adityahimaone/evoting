<? session_start();
if ($_SESSION['nis'])
{
?>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<style type="text/css">
pinggir{
	border: 5px solid yellow;
	border-radius: 5px;
	background-color: #FFFAFA;


}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Info Calon</title>
	<link href='images/osis.png' rel='shortcut icon'>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="bk-img" style="background-image: url(foto/mp-03.png);">
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
                <a class="navbar-brand" href="#">
                	<span class="glyphicon glyphicon-fire"></span> 
                	PILKOSIS
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index_siswa.php">Home</a>
                    </li>
                    <li>
                        <a href="tutorial.php">Tutorial Pemilihan</a>
                    </li>
                    <li>
                        <a href="help.php">Contact Us!</a>
                    </li>
					<li>
                        <a href="admin_page.html">Tentang Aplikasi</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#" onclick="alert('Maaf Anda Belum Melakukan Pemilihan')">logout</a></li>
						</ul>
					</li>                  
                </ul>

				<!-- Search -->
				

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
							<img class="img-responsive" src="images/banerslide.png" alt="">
						</a>
						<div class="carousel-caption">
							<h3>Aplikasi Pilkosis</h3>
							<p>Aplikasi Pemilihan Ketua & Wakil Ketua Osis Online</p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="images/banerslide.png" alt="">
						</a>
						<div class="carousel-caption">
							<h3>SMK Negeri 1 Kebumen</h3>
							<p>Khususnya bagi Siswa SMK Negeri 1 Kebumen</p>
						</div>
					</div>
					<div class="item">
						<a href="#">
							<img class="img-responsive" src="images/banerslide.png" alt="">
						</a>
						<div class="carousel-caption">
							<h3>Tujuan</h3>
							<p>Agar lebih efisien dalam pemiliihan</p>
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



    <!-- Content -->
    <div class="container"> 

        <!-- Page Intro -->
        <div class="row page-intro">
            <div class="col-lg-12">
                <h1><font color="#8000ff"><pinggir>Detail Calon Ketua Osis dan Wakil Ketua OSIS Periode 2017/2018</pinggir></font>
                </h1>
                </div>
        </div>
		
<div id="content2">	
                    <div class="post">
                        <h2></h2>

                  <div class="entry" align="center"><?php include "include_detail_calon_ketos.php";?>
                    <p></p>
                  </div>
                    </div><div class="post"></div>
                    <!-- post -->	
                </div><!-- content2 -->								              
            </div><!-- content --><br><br>                    
            <div class="clearing"></div> 
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
           
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
	
	<footer>
		<div class="footer-blurb">
			<div class="container">
				
				<div class="container">
			<font face="Helvetica" size="4" ><center>
        		<p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<p>Copyright &copy; OSIS_TEAM 2016/2017 </p>
			</font>
			</center>
        	</div>

				</div>
				<!-- /.row -->	
			</div>
        
        
       
	</footer>

	
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	
	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>
	
</body>

</html>
 <?
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="index.php";
	</script>
	<?
}
?>