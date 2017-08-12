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
	//echo "berhasil";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?
};

		//kumpulan data
		$nis=$_SESSION['nis'];
		$pilihan=$_GET['id_calon_ketos'];
		$waktu;
		
		//cek siswa
		$ceking=mysql_query("select * from data_pemilihan where nis='$nis'");
		$cek=mysql_num_rows($ceking);
		
		//artinya siswa belum pernah pilih sebelumnya
		if(empty($cek)){
		
			switch($pilihan)
			{
			case "1";
				//echo "Anda memilih  ketos no 1";
				$query=mysql_query("update calon_ketos set jumlah_suara=jumlah_suara+1 where id_calon_ketos='1'");
				$insert=mysql_query("insert into data_pemilihan values('','$nis','$pilihan','$waktu')");
				echo "<script>
				  alert('Selamat, Anda telah sukses melakukan Pemilihan Ketua OSIS....!');
				  window.location='komentar.php';
				  </script>";
			break;
			
			case "2";
				//echo "Anda memilih ketos no 2";
				$query=mysql_query("update calon_ketos set jumlah_suara=jumlah_suara+1 where id_calon_ketos='2'");
				$insert=mysql_query("insert into data_pemilihan values('','$nis','$pilihan','$waktu')");
				echo "<script>
				  alert('Selamat, Anda telah sukses melakukan Pemilihan Ketua OSIS....!');
				  window.location='komentar.php';
				  </script>";
			break;
			
			case "3";
				//echo "Anda memilih ketos no 3";
				$query=mysql_query("update calon_ketos set jumlah_suara=jumlah_suara+1 where id_calon_ketos='3'");
				$insert=mysql_query("insert into data_pemilihan values('','$nis','$pilihan','$waktu')");
				echo "<script>
				  alert('Selamat, Anda telah sukses melakukan Pemilihan Ketua OSIS....!');
				  window.location='komentar.php';
				  </script>";
			break;
			case "4";
				//echo "Anda memilih ketos no 4";
				$query=mysql_query("update calon_ketos set jumlah_suara=jumlah_suara+1 where id_calon_ketos='4'");
				$insert=mysql_query("insert into data_pemilihan values('','$nis','$pilihan','$waktu')");
				echo "<script>
				  alert('Selamat, Anda telah sukses melakukan Pemilihan Ketua OSIS....!');
				  window.location='komentar.php';
				  </script>";
			break;
			case "5";
				//echo "Anda memilih ketos no 5";
				$query=mysql_query("update calon_ketos set jumlah_suara=jumlah_suara+1 where id_calon_ketos='5'");
				$insert=mysql_query("insert into data_pemilihan values('','$nis','$pilihan','$waktu')");
				echo "<script>
				  alert('Selamat, Anda telah sukses melakukan Pemilihan Ketua OSIS....!');
				  window.location='komentar.php';
				  </script>";
			break;
			
			default;
				echo "<script>
				  alert('Invalid Parameter');
				  window.location='index_siswa.php';
				  </script>";
			}
		}else{
			echo "<script>
				  alert('Maaf, Anda telah melakukan Pemilihan Ketua OSIS, silahkan logout!');
				  window.location='end.php';
				  </script>";
			
		}	
		
	}
	else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="index.php";
	</script><?php } ?>
	