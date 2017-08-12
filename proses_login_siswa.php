<?php
if (isset($_POST['nis']))
{
ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass="";
$db="aplikasi_pilkosis";

$koneksi=mysql_connect($host,$user,$pass);
date_default_timezone_set("Asia/Jakarta");
mysql_select_db($db,$koneksi);
$waktu=date("Y-m-d H:i:s");
$kadaluarsa = "2018-09-30 13:00:00";

if ($koneksi)
{
	//echo "berhasil";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?
}
;
	
	$nis=$_POST['nis'];
	$password=$_POST['password'];
	$login=mysql_query("select * from siswa where nis='$nis' and password='$password'");
	
	$cek_login=mysql_num_rows($login);
		if (empty($cek_login))
		{
			?><script language="javascript">alert("NIS atau Password Anda salah!!");</script><?
			?><script language="javascript">document.location.href="index.php"</script><?
		}else
		if ($waktu >= $kadaluarsa and $login)
		{
		?><script language="javascript">alert("Maaf untuk Sekarang, Pemilihan Ketua OSIS telah ditutup!!!");</script><?
		
		?><script language="javascript">document.location.href="index.php"</script><?
			
		}
		else
		if ($waktu <= $kadaluarsa and $login)
		{
		
		//daftarkan ID jika user dan password BENAR
			while ($row=mysql_fetch_array($login))
			{
				$id_siswa=$row['id_siswa'];
				$nama_siswa=$row['nama_siswa'];
				session_register('nis');
				session_register('nama_siswa');
			}
			?><script language="javascript">document.location.href="index_siswa.php";</script><?
		}
}else{
	unset($_POST['nis']);
}
?>