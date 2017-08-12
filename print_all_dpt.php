<? session_start();
if ($_SESSION['id_admin'])
{
?>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php
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
						$query=mysql_query("select * from siswa");
						
						while($row=mysql_fetch_array($query)){
						?>

<html>
<head>
	<title>Daftar Pemilih Tetap Pilkosis SMK Negeri 1 Kebumen</title>
    <link href="style1.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr class="tableheader">
        	<th rowspan="1">NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Password</th>
        </tr>
        <tr id="rowHover">
        	<td width="10%"><?php echo $row['nis']; ?></td>
            <td width="25%" id="column_padding"><?php echo $row['nama_siswa']; ?></td>
            <td width="20%" id="column_padding"><?php echo $row['kelas']; ?></td>
            <td width="20%" id="column_padding"><?php echo $row['password']; ?></td>
        </tr>
        <?php echo "<br>";?>
        <?php } ?>
    </table>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
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