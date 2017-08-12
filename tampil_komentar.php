<?php require_once('Connections/koneksi.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = "SELECT * FROM komentar";
$Recordset1 = mysql_query($query_Recordset1, $koneksi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>List Komentar</title>
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
<style>
/* CSS for Zebra Table in index.html */
.zebra-table {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	overflow: hidden;
	border:10px solid #fff;
}
	.zebra-table th,.zebra-table td{
		vertical-align: top;
		padding:10px 7px;
		text-align: left;
		margin:0;
	}
		.zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
			background:#eee;
		}

/* End CSS for Zebra Table in index.html */

/* CSS for Rainbow Table in index1.html */
.rainbow-table {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	overflow: hidden;
	border:10px solid #fff;
}
.rainbow-table th,.rainbow-table td{
	vertical-align: top;
	padding:10px 7px;
	text-align: left;
	margin:0;
}
.rainbow-table tbody {
	color: #fff;
}
	/* Make table like rainbow */
	.rainbow-table tbody tr:nth-child(4n+1) { /* 4n is 4 colours */
		background:#cc3333; /* red */
	}
	.rainbow-table tbody tr:nth-child(4n+2) { 
		background:#cccc33; /* yellow */
	}
	.rainbow-table tbody tr:nth-child(4n+3) { 
		background:#33cc33; /* green */
	}
	.rainbow-table tbody tr:nth-child(4n+4) { 
		background:#3333cc; /* blue */
	}

/* End CSS for Rainbow Table in index1.html */

/* CSS for Highlighted Row in index2.html */
.highlighted-row {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	overflow: hidden;
	border:10px solid #fff;
}
.highlighted-row th,.highlighted-row td{
	vertical-align: top;
	padding:10px 7px;
	text-align: left;
	margin:0;
}
	/* Make row highlighted */
	.highlighted-row tbody tr:nth-child(2) { 
		background:#cc3333; /* red */
		color:#fff;
	}

/* End CSS for Highlighted Row in index2.html */

/* CSS for Highlighted Column in index3.html */
.highlighted-column {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	overflow: hidden;
	border:10px solid #fff;
}
	.highlighted-column th,.highlighted-column td{
		vertical-align: top;
		padding:10px 7px;
		text-align: center;
		margin:0;
	}
		.highlighted-column tr td:nth-child(2),.highlighted-column tr th:nth-child(2)  { /* Make column highlighted */
			background:#333333;
			color: #fff;
		}
/* End CSS for Highlighted Column in index3.html */

/* CSS for Fixed Table Header in index4.html */
.fixed-th {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	table-layout: fixed;
	border:10px solid #fff;
}
	.fixed-th thead {
		background-color: #333;
		color:#fff;
		display: block;
	}
	/* make it scrolled */
	.fixed-th tbody {
		display: block;
	  	overflow-y: auto;
	  	width: 100%;
	  	max-height: 300px;
	  	position: static;
	}

	/* end make it scrolled */

			.fixed-th th,.fixed-th td{
				vertical-align: top;
				padding:10px 7px;
				text-align: left;
			}
			.fixed-th th + th, .fixed-th td + td {
				border-left:1px solid #ddd;
			}
			.fixed-th th:nth-child(1), .fixed-th td:nth-child(1) {
				min-width:40px;
			}
			.fixed-th th:nth-child(2), .fixed-th td:nth-child(2) {
				width:300px;
			}
			.fixed-th th:nth-child(3), .fixed-th td:nth-child(3) {
				width:250px;
			}

/* End CSS for Fixed Table Header in index4.html */
</style>
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
					<li  class="active">
                        <a href="#">Komentar</a>
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
		<h1>List Komentar Aplikasi Pilosis<p>
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
					
				<table class="fixed-th">
  <tr bgcolor="#2eb82e">
    <td width="105">Nis</td>
    <td width="162">Nama siswa</td>
    <td width="126">Waktu</td>
    <td width="186">Komentar</td>
    <td>Aksi</td>
  </tr>
  <?php do { ?>
    <tr>
      <td class="center"><?php echo $row_Recordset1['nis']; ?></td>
      <td class="center"><?php echo $row_Recordset1['nama_siswa']; ?></td>
      <td class="center"><?php echo $row_Recordset1['waktu']; ?></td>
      <td class="center"><?php echo $row_Recordset1['komentar']; ?></td>
      <td class="center"><a href="delete_komentar.php"><img src="images/delete.png" title="Hapus" width="59" height="33" /></a></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>	
                 </div>
					
					
			
					</div>
				</article>
			</div>
			
		</div><!--/Center Column-->


 
	
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
<?php
mysql_free_result($Recordset1);
?>
 