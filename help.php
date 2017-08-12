<? session_start();
if ($_SESSION['nis'])
{
?>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<style type="text/css">

@font-face {
	font-family: "Adventure";
	src: url('fonts/Adventure.otf');
	font-family: "Avengeance Heroic Avenger";
	src: url('fonts/Avengeance Heroic Avenger.otf');
	font-family: "Full Pack 2025";
	src: url('fonts/full Pack 2025.ttf');
	font-family: "Jersey M54";
	src: url('fonts/Jersey M54.ttf');
}
	<!--
-->

</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Bantuan</title>
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
<div class="bk-img" style="background-image: url(foto/mp-06.png);">

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
                    <li class="active">
                        <a href="#">Contact Us!</a>
                    </li>
					<li>
                        <a href="admin_page.html">Tentang Aplikasi</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun<span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#" onclick="alert('Maaf Anda Belum Melakukan Pemilihan atau Memasukan Komentar')">logout</a></li>
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

       
<div id="content">
<div id="content2">						
<center><td><font align="center" face="Helvetica" size="5" color="#FFD700"><b>Jika ada Masalah atau Butuh Bantuan dengan Aplikasi ini,Silahkan Hubungi Nomer di bawah ini</font><center><td><font align="center" face="Helvetica" size="5" color="White"> Admin</font><font align="center" face="Helvetica" size="5" color="FFD700"> dibawah Ini:</font></center></b>
<td><img src="images/telp.png"><font face="Helvetica" size="6" color="black">Bisa Telfon, WA, SMS.. </font><img src="images/sms.png"><br>
<br><div class="panel panel-default">
									
									
									<table class="table table-hover" width="100%">
									
											
											<tbody align="center">
												<tr>
													
													
													<td bgcolor="00BFFF"><font align="center" face="Jersey M54" size="5" color="#FFD700">Aditya Himawan : 0853-1167-9409</td>
													
												</tr>
												<tr>
													
													
													<td bgcolor="FFD700"><font align="center" face="Jersey M54" size="5" color="#32CD32">Misbakhul Munir : 0838-2335-6113</td>
													
												</tr>
												<tr>
													
													
													<td bgcolor="32CD32"><font align="center" face="Jersey M54" size="5" color="FFD700">Muhammad Saeful Lukman : 0895-3379-95945</td>
													
												</tr>
											</tbody>
										</table></div>
								</div>
								</div>
								<div class="clearing"></div> <br><br><br>

        <!-- Feature Row -->
        <div class="row">
           
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
	
	<footer>
	<div class="bk-img" style="background-image: url(foto/mp-04.png);">
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