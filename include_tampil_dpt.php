<? session_start();
if ($_SESSION['id_admin'])
{
?>
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

mysql_select_db($database_conect, $conect);
$query_dpt = "SELECT * FROM siswa";
$dpt = mysql_query($query_dpt, $conect) or die(mysql_error());
$row_dpt = mysql_fetch_assoc($dpt);
$totalRows_dpt = mysql_num_rows($dpt);

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>include tampil dpt</title>
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
<!-- Search -->
			<form id="form1" name="form1" method="post" action="" class="form-inline search" role="search">
			<p class="style1 style2">Pencarian Daftar Pemilih Tetap</p>
			<p class="style2"><span class="style2">Berdasarkan Nama</span> 
				<div class="form-group">
					<input type="text" name="siswa" id="siswa" class="form-control">
				</div>
				<button type="submit"  name="cari_siswa" id="cari_siswa" value="Cari" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
			</form>
			


<p>&nbsp;</p>
<table class="zebra-table">
<thead>
  <tr>
    <td width="102"><div align="center"><span class="style3"><strong>NIS</strong></span></div></td>
    <td width="211"><div align="center"><span class="style3">Nama Siswa</span></div></td>
    <td width="130"><div align="center"><span class="style3">Kelas</span></div></td>
    <td width="142"><div align="center"><span class="style3">Password</span></div></td>
    <td colspan="3"><div align="center" class="style3">Action</div></td>
  </tr>
 </thead>
<tbody>
  <?php do { ?>
    <tr>
      <td><div align="center"><?php echo $row_tampil_dpt['nis']; ?></div></td>
      <td><?php echo $row_tampil_dpt['nama_siswa']; ?></td>
      <td><?php echo $row_tampil_dpt['kelas']; ?></td>
      <td><?php echo $row_tampil_dpt['password']; ?></td>
      <td width="43"> <div align="center" class="style10">
        <p><a href="edit_dpt.php?nis=<?php echo $row_tampil_dpt['nis']; ?>"><img src="images/edit.png" width="59" height="33" title="Edit" /></a></p>
      </div></td>
      <td width="55" valign="top"> <div align="center">
        <p class="style10"><a href="print_dpt.php?nis=<?php echo $row_tampil_dpt['nis']; ?>"><img src="images/print.png" width="59" height="33" title="Print" /></a></p>
      </div></td>
      <td width="55"> <div align="center" class="style10">
        <p><a href="hapus_dpt.php?nis=<?php echo $row_tampil_dpt['nis']; ?>" onclick="return confirm('Apakah Anda yakin?')"><img src="images/delete.png" title="Hapus" width="59" height="33" /></a></p>
      </div></td>
    </tr>
    <?php } while ($row_tampil_dpt = mysql_fetch_assoc($tampil_dpt)); ?>
</tbody>
</table>
<p>&nbsp;</p>
<table class="fixed-th">
  <tr bgcolor="#33cc33">
    <td width="101" height="42"><div align="center" class="style3">
      <div align="center"><strong>NIS</strong></div>
    </div></td>
    <td width="209"><div align="center"><strong><span class="style3">Nama Siswa</span></strong></div></td>
    <td width="132"><div align="center"><strong><span class="style3">Kelas</span></strong></div></td>
    <td width="144"><div align="center"><strong><span class="style3">Password</span></strong></div></td>
    <td colspan="2" align="center"><div align="center" class="style3"> Action<br />
      </strong><span class="style3"><strong><center><a href="tambah_dpt.php"><img src="images/add.png" width="59" height="33" title="Tambah" /></a> <strong><a href="print_all_dpt.php"> <img src="images/print.png" width="59" height="33" title="Print All DPT"/></a></center></strong></span></p>
    </div></td>
  </tr>
  <?php do { ?>
    <tr>
      <td><div align="center"><span class="style2"><?php echo $row_dpt['nis']; ?></span></div></td>
      <td><span class="style2"><?php echo $row_dpt['nama_siswa']; ?></span></td>
      <td><span class="style2"><?php echo $row_dpt['kelas']; ?></span></td>
      <td><span class="style2"><?php echo $row_dpt['password']; ?></span></td>
      <td width="97"><div align="center" class="style10"><a href="edit_dpt.php?nis=<?php echo $row_dpt['nis']; ?>"><img src="images/edit.png" title="Edit" width="59" height="33" /></a>
        </div></td>
      <td width="88"><div align="center" class="style10">
      <a href="hapus_dpt.php?nis=<?php echo $row_dpt['nis']; ?>" onclick="return confirm('Apakah Anda yakin?')"><img src="images/delete.png" title="Hapus" width="59" height="33" /></a>
      </div></td>
    </tr>
    <?php } while ($row_dpt = mysql_fetch_assoc($dpt)); ?>
</table>
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
<?php
mysql_free_result($dpt);

mysql_free_result($tampil_dpt);
?>