<? session_start();
if ($_SESSION['nis'])
{
	session_destroy();
	?><script language="javascript">
	alert("Anda Berhasil logout.");
	document.location="index.php";
	</script><?
	
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="index.php";
	</script>
	<?
}
?>
