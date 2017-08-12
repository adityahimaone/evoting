<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<? session_start();
if ($_SESSION['id_admin'])
{
?>
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

$maxRows_calon_ketos = 10;
$pageNum_calon_ketos = 0;
if (isset($_GET['pageNum_calon_ketos'])) {
  $pageNum_calon_ketos = $_GET['pageNum_calon_ketos'];
}
$startRow_calon_ketos = $pageNum_calon_ketos * $maxRows_calon_ketos;

mysql_select_db($database_conect, $conect);
$query_calon_ketos = "SELECT * FROM calon_ketos ORDER BY id_calon_ketos ASC";
$query_limit_calon_ketos = sprintf("%s LIMIT %d, %d", $query_calon_ketos, $startRow_calon_ketos, $maxRows_calon_ketos);
$calon_ketos = mysql_query($query_limit_calon_ketos, $conect) or die(mysql_error());
$row_calon_ketos = mysql_fetch_assoc($calon_ketos);

if (isset($_GET['totalRows_calon_ketos'])) {
  $totalRows_calon_ketos = $_GET['totalRows_calon_ketos'];
} else {
  $all_calon_ketos = mysql_query($query_calon_ketos);
  $totalRows_calon_ketos = mysql_num_rows($all_calon_ketos);
}
$totalPages_calon_ketos = ceil($totalRows_calon_ketos/$maxRows_calon_ketos)-1;

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO calon_ketos (id_calon_ketos, nis, nama_calon_ketos, kelas, jumlah_suara, foto, motto, visi_misi, program_kerja) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['id_calon_ketos'], "int"),
                       GetSQLValueString($_POST['nis'], "text"),
                       GetSQLValueString($_POST['nama_calon_ketos'], "text"),
                       GetSQLValueString($_POST['kelas'], "text"),
                       GetSQLValueString($_POST['jumlah_suara'], "text"),
                       GetSQLvalueString($foto=$_FILES['foto']['name'], "text"),
                       GetSQLValueString($_POST['motto'], "text"),
                       GetSQLValueString($_POST['visi_misi'], "text"),
                       GetSQLValueString($_POST['program_kerja'], "text"));
					   if(strlen($foto)>0){
if(is_uploaded_file($_FILES['foto']['tmp_name'])){
move_uploaded_file($_FILES['foto']['tmp_name'], "./foto/".$foto);
}
}

  mysql_select_db($database_conect, $conect);
  $Result1 = mysql_query($insertSQL, $conect) or die(mysql_error());

  $insertGoTo = "calon_ketos.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
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

    <title>Input Calon Ketos</title>
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
	color: #000;
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
	width: 120%;
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
					<li>
                        <a href="tampil_komentar.php">Komentar</a>
                    </li>
                    <li  class="active">
                        <a href="#">Input Caksis & Cawaksis</a>
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
		<h1>Input Kandidat Calon Ketua Dan Wakil Ketua OSIS SMK N 1 Kebumen<p>
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
					
				<div id="content2"><b>	
                    <div class="post">
                        <h2></h2>
                  <div class="entry" align="center">
                  <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1" enctype="multipart/form-data">
      <table class="rainbow-table" align="center">
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><div align="left"><span class="style2 style10">No Urut</span></div></td>
            <td><input type="text" name="id_calon_ketos" value="" size="32" required/></td>
          </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><div align="left"><span class="style10"><strong>NIS</strong></span></div></td>
            <td><input type="text" name="nis" value="" size="32" required/></td>
          </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><div align="left"><span class="style10"><strong>Nama Calon Ketos</strong></span></div></td>
            <td><input type="text" name="nama_calon_ketos" value="" size="32" required/></td>
          </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><div align="left"><span class="style10"><strong>Kelas</strong></span></div></td>
            <td><label>
              <select name="kelas" title="Kelas">
                <option value="X Akuntansi 1">X Akuntansi 1</option>
                <option value="X Akuntansi 2">X Akuntansi 2</option>
                <option value="X Akuntansi 3">X Akuntansi 3</option>
                <option value="X Akuntansi 4">X Akuntansi 4</option>
                <option value="X Adm. Perkantoran 1">X Adm. Perkantoran 1</option>
                <option value="X Adm. Perkantoran 2">X Adm. Perkantoran 2</option>
                <option value="X Adm. Perkantoran 3">X Adm. Perkantoran 3</option>
                <option value="X Tata Niaga 1">X Tata Niaga 1</option>
                <option value="X Tata Niaga 2">X Tata Niaga 2</option>
                <option value="X Tata Niaga 3">X Tata Niaga 3</option>
                <option value="X RPL 1 ">X RPL 1</option>
                <option value="X RPL 2 ">X RPL 2</option>
                <option value="X Multimedia 1">X Multimedia 1</option>
                <option value="X Multimedia 2">X Multimedia 2</option>
                <option value="XI Akuntansi 1">XI Akuntansi 1</option>
                <option value="XI Akuntansi 2">XI Akuntansi 2</option>
                <option value="XI Akuntansi 3">XI Akuntansi 3</option>
                <option value="XI Akuntansi 4">XI Akuntansi 4</option>
                <option value="XI Adm. Perkantoran 1">XI Adm. Perkantoran 1</option>
                <option value="XI Adm. Perkantoran 2">XI Adm. Perkantoran 2</option>
                <option value="XI Adm. Perkantoran 3">XI Adm. Perkantoran 3</option>
                <option value="XI Tata Niaga 1">XI Tata Niaga 1</option>
                <option value="XI Tata Niaga 2">XI Tata Niaga 2</option>
                <option value="XI Tata Niaga 2">XI Tata Niaga 2</option>
                <option value="XI RPL 1 ">XI RPL 1</option>
                <option value="XI RPL 2 ">XI RPL 2</option>
                <option value="XI Multimedia 1">XI Multimedia 1</option>
                <option value="XI Multimedia 2">XI Multimedia 2</option>
                
                <option value="XII Akuntansi 1">XII Akuntansi 1</option>
                <option value="XII Akuntansi 2">XII Akuntansi 2</option>
                <option value="XII Akuntansi 3">XII Akuntansi 3</option>
                <option value="XII Akuntansi 4">XII Akuntansi 4</option>
                <option value="XII Adm. Perkantoran 1">XII Adm. Perkantoran 1</option>
                <option value="XII Adm. Perkantoran 2">XII Adm. Perkantoran 2</option>
                <option value="XII Tata Niaga 1">XII Tata Niaga 1</option>
                <option value="XII Tata Niaga 2">XII Tata Niaga 2</option>
                <option value="XII RPL 1 ">XII RPL 1</option>
                <option value="XII RPL 2 ">XII RPL 2</option>
                <option value="XII Multimedia 1">XII Multimedia 1</option>
                <option value="XII Multimedia 2">XII Multimedia 2</option>
              </select>
            </label></td>
          </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><div align="left"><span class="style10"><strong>Jumlah Suara</strong></span></div></td>
            <td><input type="text" name="jumlah_suara" value="" size="32" required/></td>
          </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><div align="left"><span class="style10"><strong>Foto</strong></span></div></td>
            <td><input type="file" name="foto" value="" size="32" required /></td>
          </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><div align="left"><span class="style10"><strong>Motto</strong></span></div></td>
            <td><textarea name="motto" cols="50" rows="2" required></textarea></td>
          </tr>
        <tr valign="baseline">
          <td align="right" valign="middle" nowrap="nowrap"><div align="left"><span class="style10"><strong>Visi Misi</strong></span></div></td>
            <td><textarea name="visi_misi" cols="50" rows="5" required></textarea></td>
          </tr>
        <tr valign="baseline">
          <td align="right" valign="middle" nowrap="nowrap"><div align="left"><span class="style10"><strong>Program Kerja</strong></span></div></td>
            <td><textarea name="program_kerja" cols="50" rows="7" required></textarea></td>
          </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right"><div align="left"></div></td>
            <td><input type="submit" class="style5" value="Tambah Data" /></td>
          </tr>
        </table>
        <input type="hidden" name="MM_insert" value="form1" />
    </form>
      <p>&nbsp;</p>
      <table class="highlighted-column" border="1" width="800" align="center">
        <tr><b>
          <td width="30"><div align="center" class="style15">
            <div align="center"><strong>No Urut</strong></div>
          </div></td>
          <td width="40"><div align="center" class="style15">
            <div align="center"><strong>NIS</strong></div>
          </div></td>
          <td width="60"><div align="center" class="style15"><strong>Nama Calon Ketos</strong></div></td>
          <td width="120"><div align="center" class="style15"><strong>Kelas</strong></div></td>
          <td width="39"><div align="center" class="style15">
            <div align="center"><strong>Jumlah Suara</strong></div>
          </div></td>
          <td width="80"><div align="center" class="style15"><strong>Foto</strong></div></td>
          <td colspan="4"><div align="center" class="style2 style15">Action</div></td>
        </b></tr>
        <?php do { ?>
          <tr>
            <td><div align="center" class="style5"><?php echo $row_calon_ketos['id_calon_ketos']; ?></div></td>
            <td><div align="center" class="style5"><?php echo $row_calon_ketos['nis']; ?></div></td>
            <td><span class="style5"><?php echo $row_calon_ketos['nama_calon_ketos']; ?></span></td>
            <td><span class="style5"><?php echo $row_calon_ketos['kelas']; ?></span></td>
            <td><div align="center"><span class="style5"><?php echo $row_calon_ketos['jumlah_suara']; ?></span></div></td>
            <td align="center"><img src="<? echo $row_calon_ketos['foto'];?>"  width="80" height="90" border="0" /></td>
            <td width="31"><div align="center"><a href="rincian_calon_ketos.php?id_calon_ketos=<?php echo $row_calon_ketos['id_calon_ketos']; ?>"><img src="images/rincian2.png" title="Rincian" width="45" height="28" /></a></div></td>
            <td width="31"><div align="center" class="style4">
             <a href="edit_calon_ketos.php?id_calon_ketos=<?php echo $row_calon_ketos['id_calon_ketos']; ?> "><img src="images/edit.png" width="59" height="33" title="Edit" /></a>
            </div></td>
            <td width="43"><div align="center" class="style4">
            <a href="hapus_calon_ketos.php?id_calon_ketos=<?php echo $row_calon_ketos['id_calon_ketos']; ?>" onclick="return confirm('Apakah Anda yakin?')"><img src="images/delete.png" title="Hapus" width="59" height="33" /></a>
            </div></td>
        </tr>
          <?php } while ($row_calon_ketos = mysql_fetch_assoc($calon_ketos)); ?>
    </table>
      </td></b>	
            </div>
					</div> </div>
					
			
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

 <?
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="login.php";
	</script>
	<?
}
?>