<?php
if (isset($_POST['username']))
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
	//echo "berhasil";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?
};	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$login=mysql_query("select * from admin where username='$username' and password='$password'");
	
	$cek_login=mysql_num_rows($login);
		if (empty($cek_login))
		{
			?><script language="javascript">alert("Username atau Password Anda salah!!");</script><?
			?><script language="javascript">document.location.href="login.php"</script><?
		}else{
			//daftarkan ID jika user dan password BENAR
			while ($row=mysql_fetch_array($login))
			{$id_admin=$row['id_admin'];
				$nama_admin=$row['nama_admin'];
				session_register('id_admin');
				session_register('username');
				session_register('nama_admin');	}
			?><script language="javascript">document.location.href="index_admin.php";</script><?
		}		
}else{
	unset($_POST['username']);
}
?>