<? session_start();
if (session_is_registered('id_admin'))
{
?>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
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

if ((isset($_GET['id_calon_ketos'])) && ($_GET['id_calon_ketos'] != "")) {
  $deleteSQL = sprintf("DELETE FROM calon_ketos WHERE id_calon_ketos=%s",
                       GetSQLValueString($_GET['id_calon_ketos'], "int"));

  mysql_select_db($database_conect, $conect);
  $Result1 = mysql_query($deleteSQL, $conect) or die(mysql_error());

  $deleteGoTo = "calon_ketos.php?id_calon_ketos=" . $row_calon_ketos['id_calon_ketos'] . "";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$colname_calon_ketos = "-1";
if (isset($_GET['id_calon_ketos'])) {
  $colname_calon_ketos = $_GET['id_calon_ketos'];
}
mysql_select_db($database_conect, $conect);
$query_calon_ketos = sprintf("SELECT * FROM calon_ketos WHERE id_calon_ketos = %s ORDER BY id_calon_ketos ASC", GetSQLValueString($colname_calon_ketos, "int"));
$calon_ketos = mysql_query($query_calon_ketos, $conect) or die(mysql_error());
$row_calon_ketos = mysql_fetch_assoc($calon_ketos);
$totalRows_calon_ketos = mysql_num_rows($calon_ketos);
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
mysql_free_result($calon_ketos);
?>