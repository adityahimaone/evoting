<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<title>Status Pemilihan</title>
<? session_start();
if ($_SESSION['nis'])
{
ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass="";
$db="aplikasi_pilkosis";


$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
$waktu=date("Y-m-d H:i:s");

if ($koneksi)
{
	//echo "berhasil hore";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?
};

		//kumpulan data
		
		$nis=$_SESSION['nis'];
		$nama_siswa=$_SESSION['nama_siswa'];
		$komentar=$_GET['komentar'];
		$waktu;
		
		//cek siswa
		$ceking=mysql_query("select * from komentar where nis='$nis'");
		$cek=mysql_num_rows($ceking);
		
		//artinya siswa belum pernah pilih sebelumnya
		if(empty($cek)){
			$query="insert into komentar values('$nis','$nama_siswa','$waktu','$komentar')";
$tambah=mysql_query($query);
if($tambah){
header("location:end.php");
}
		
		}else{
			echo "<script>
				  alert('Maaf, Anda telah mengisi komentar, Silahkan Logout!');
				  window.location='end.php';
				  </script>";
			
		}	
		
	}
	else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="index.php";
	</script><?php } ?>
	


