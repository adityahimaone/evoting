<? session_start();
if ($_SESSION['id_admin'])
{
	session_destroy();
	?><script language="javascript">
	alert("Anda Berhasil logout.");
	document.location="login.php";
	</script><?
	
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="login.php";
	</script>
	<?
}
?>
