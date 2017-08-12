<? session_start();
if (session_is_registered('id_admin'))
{
?>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php require_once('Connections/koneksi.php'); ?>
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

if ((isset($_GET['nis'])) && ($_GET['nis'] != "")) {
  $deleteSQL = sprintf("DELETE FROM siswa WHERE nis=%s",
                       GetSQLValueString($_GET['nis'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($deleteSQL, $koneksi) or die(mysql_error());

  $deleteGoTo = "tampil_dpt.php?nis=" . $row_dpt['nis'] . "";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$colname_dpt = "-1";
if (isset($_GET['nis'])) {
  $colname_dpt = $_GET['nis'];
}
mysql_select_db($database_koneksi, $koneksi);
$query_dpt = sprintf("SELECT * FROM siswa WHERE nis = %s ORDER BY nis ASC", GetSQLValueString($colname_dpt, "text"));
$dpt = mysql_query($query_dpt, $koneksi) or die(mysql_error());
$row_dpt = mysql_fetch_assoc($dpt);
$totalRows_dpt = mysql_num_rows($dpt);
?><style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style3 {color: #FFFFFF; font-weight: bold; }
-->
</style>

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
?>