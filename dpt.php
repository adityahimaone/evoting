<? session_start();
if ($_SESSION['nis'])
{
?>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Pemilih Tetap</title>
	<link href='images/osis.png' rel='shortcut icon'>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">APLIKASI PILKOSIS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               <li><a href="index_siswa.php" ><font face="Edo" size="3" color="#bcc00">Home</font></a></li>
			<li><a href="dpt.php"><font face="Edo" size="3" color="#bcc00">DPT</font></a></li>
			<li><a href="#" onclick="alert('Maaf Anda Belum Melakukan Pemilihan')"><font face="Edo" size="3" color="#bcc00">Komentar</font></a></li>
			
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/user.png" height="20" width="20"><font face="Edo" color="red"></i>Account</font><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                           <a href="#" onclick="alert('Maaf Anda Belum Melakukan Pemilihan')"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       
                        <li class="divider"></li>
                        <li>
                           <a href="#" onclick="alert('Maaf Anda Belum Melakukan Pemilihan')"><i class="fa fa-fw fa-power-off"></i><font color="red"> Log Out</font></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				
                    <li class="ts-label"><b><font color="00ff00" size="3">PILIHAN</font></b></li>
				<li class="open"><a href="index_siswa.php"><i class="fa fa-dashboard"></i> <font color="00ffff">HOME</font></a></li>
				<li><a href="tutorial.php"><i class="fa fa-desktop"></i> <font color="00ffff">Tutorial Pemilihan</font></a>
				
				</li>
				<li><a href="about.php"><i class="fa fa-table"></i><font color="00ffff"> Tentang Aplikasi Ini</font></a></li>
				<li><a href="help.php"><i class="fa fa-edit"></i> <font color="00ffff">Bantuan</font></a></li><br><br><br><br><br><br>
				
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
<br><br><br>
                <!-- Page Heading -->
                <div class="row">
				
                    
            <!-- /.container-fluid -->

        <img src="images/banner.png" width="100%" height="250px"><br>
					<div id="contheader">
                  <h3 align="center" class="style3"><b>Daftar Pemilih Tetap</b></h3>
        </div>		

                
<div id="content2">
<b>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php require_once('Connections/conect.php'); ?>
<?php require_once('Connections/conect.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

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
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
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

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

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
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
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

$maxRows_dpt = 10;
$pageNum_dpt = 0;
if (isset($_GET['pageNum_dpt'])) {
  $pageNum_dpt = $_GET['pageNum_dpt'];
}
$startRow_dpt = $pageNum_dpt * $maxRows_dpt;

mysql_select_db($database_conect, $conect);
$query_dpt = "SELECT * FROM siswa";
$query_limit_dpt = sprintf("%s LIMIT %d, %d", $query_dpt, $startRow_dpt, $maxRows_dpt);
$dpt = mysql_query($query_limit_dpt, $conect) or die(mysql_error());
$row_dpt = mysql_fetch_assoc($dpt);

if (isset($_GET['totalRows_dpt'])) {
  $totalRows_dpt = $_GET['totalRows_dpt'];
} else {
  $all_dpt = mysql_query($query_dpt);
  $totalRows_dpt = mysql_num_rows($all_dpt);
}
$totalPages_dpt = ceil($totalRows_dpt/$maxRows_dpt)-1;

$maxRows_tampil_dpt = 10;
$pageNum_tampil_dpt = 0;
if (isset($_GET['pageNum_tampil_dpt'])) {
  $pageNum_tampil_dpt = $_GET['pageNum_tampil_dpt'];
}
$startRow_tampil_dpt = $pageNum_tampil_dpt * $maxRows_tampil_dpt;

$colname_tampil_dpt = "-1";
if (isset($_POST['siswa'])) {
  $colname_tampil_dpt = $_POST['siswa'];
}
mysql_select_db($database_conect, $conect);
$query_tampil_dpt = sprintf("SELECT * FROM siswa WHERE nama_siswa LIKE %s ORDER BY nis ASC", GetSQLValueString("%" . $colname_tampil_dpt . "%", "text"));
$query_limit_tampil_dpt = sprintf("%s LIMIT %d, %d", $query_tampil_dpt, $startRow_tampil_dpt, $maxRows_tampil_dpt);
$tampil_dpt = mysql_query($query_limit_tampil_dpt, $conect) or die(mysql_error());
$row_tampil_dpt = mysql_fetch_assoc($tampil_dpt);

if (isset($_GET['totalRows_tampil_dpt'])) {
  $totalRows_tampil_dpt = $_GET['totalRows_tampil_dpt'];
} else {
  $all_tampil_dpt = mysql_query($query_tampil_dpt);
  $totalRows_tampil_dpt = mysql_num_rows($all_tampil_dpt);
}
$totalPages_tampil_dpt = ceil($totalRows_tampil_dpt/$maxRows_tampil_dpt)-1;
?>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {color: #FF0000; font-weight: bold; }
.style6 {color: #FFFFFF}
-->
</style>
</head>
<b>
<body>
<div id="contheader">
                  
              </div><br>
<form id="form1" name="form1" method="post" action="">
  <p align="center">Pencarian Daftar Pemilih Tetap</b>
  <label align="right">
    <input type="text" name="siswa" id="siswa" border=4 />
    </label>
  <input type="submit" name="cari_siswa" id="cari_siswa" value="Cari" />
</form>
<div class="panel-body">
<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">

  <thead>
  <tr>
    <td width=100><div align="center"><span class="style5"><font face="BatmanForeverAlternate" size="4">NIS</span></div></td>
    <td width=200><div align="center" id="main"><span class="style5"><font face="BatmanForeverAlternate" size="4">Nama Siswa</span></div></td>
    <td width=100><div align="center"><span class="style5"><font face="BatmanForeverAlternate" size="4">Kelas</span></div></td>
  </tr>
  </thead>
  <?php do { ?>
    <tr>
      <td><div align="center"><?php echo $row_tampil_dpt['nis']; ?></div></td>
      <td align="center"><?php echo $row_tampil_dpt['nama_siswa']; ?></td>
      <td align="center"><?php echo $row_tampil_dpt['kelas']; ?></td>
    </tr>
    <?php } while ($row_tampil_dpt = mysql_fetch_assoc($tampil_dpt)); ?>
</table>
<p>&nbsp;</p>

<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
<div class="panel-body">
  <thead>
  <tr>
    <td width=100><div align="center"><span class="style5"><font face="BatmanForeverAlternate" size="4">NIS</span></div></td>
    <td width=200><div align="center"><span class="style5"><font face="BatmanForeverAlternate" size="4">Nama Siswa</span></div></td>
    <td width=100><div align="center"><span class="style5"><font face="BatmanForeverAlternate" size="4">Kelas</span></div></td>
  </tr>
  </thead>
  <?php do { ?>
    <tr>
      <td align="center"><div align="center"><?php echo $row_dpt['nis']; ?></div></td>
      <td align="center"><?php echo $row_dpt['nama_siswa']; ?></td>
      <td align="center"><?php echo $row_dpt['kelas']; ?></td>
    </tr>
    <?php } while ($row_dpt = mysql_fetch_assoc($dpt)); ?>
</table><br>
<?php
mysql_free_result($dpt);
mysql_free_result($tampil_dpt);
?>
<div class="clearing"></div> <br><br><br>
            <div id="footer" align="center">
                <p><font face="Cyberfall" size="4" color="black">Copyright &copy; 2015, designed by <a href="#">osis_team</a></font></p>
            </div>
			</div>
        <!-- /#page-wrapper -->
</div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

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
