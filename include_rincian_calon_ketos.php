<title>Rincian Data Calon Ketua OSIS</title>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<? session_start();
if ($_SESSION['id_admin'])
{
?>
<? 
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
						$id_calon_ketos=$_GET['id_calon_ketos'];
						$query=mysql_query("select * from calon_ketos where id_calon_ketos='$id_calon_ketos' LIMIT 1");
						
						while($row=mysql_fetch_array($query)){
						?>
<table width="100%" height="500" border="0" align="center" cellpadding="4" cellspacing="20" bgcolor="green">
  <tr>
    <td width="81" height="50" align="center" strong rowspan="18"><font color="#000000" size="1">&nbsp;</td>
  </tr>

  <tr>
    <td><strong><font color="#blue" face="Helvetica" size="3">No. Pasangan</font></strong></td>
    <td>:</td>
    <td>
     <? echo $row['id_calon_ketos'];?>
  </tr>
  <tr>
    <td><strong><font color="#FFffff" face="Helvetica" size="3">NIS</font></strong></td>
    <td>:</td>
    <td><? echo $row['nis'];?></td>
  </tr>
  <tr>
    <td><strong><font color="#blue" face="Helvetica" size="3">Nama </font></strong></td>
    <td>:</td>
    <td><? echo $row['nama_calon_ketos'];?></td>
  </tr>
  <tr>
    <td><strong><font color="#blue" face="Helvetica" size="3">Kelas</font></strong></td>
    <td>:</td>
    <td><? echo $row['kelas'];?></td>
  </tr><br><br>
  <tr>
    <td size="50"><font color="#blue" face="Helvetica" size="3">Motto</font></strong></td>
    <td>:</td>
    <td><? echo $row['motto'];?></textarea></td>
    
  </tr>
  <tr>
    <td><strong><font color="#blue" face="Helvetica" size="3">Visi &amp; Misi</font></strong></td>
    <td>:</td>
    <td><? echo $row['visi_misi'];?></textarea></td>
  </tr>
  <tr>
    <td><strong><font color="#blue" face="Helvetica" size="3">Program Kerja</font></strong></td>
    <td>:</td>
    <td><? echo $row['program_kerja'];?></textarea></td></textarea></td></tr>
  <tr>
    <td><strong><font color="#blue" face="Helvetica" size="3">Foto</font></strong></td>
    <td>:</td>
    <td width="400" align="left" valign="center">
	<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<img src="<? echo $row['foto'];?>"  width="100%" height="100%" border="0">
												</div>
											</div>
  </tr><br>
  <tr>
   <td height="25" colspan="4" align="right" bgcolor="#9D2D2D"><a href="calon_ketos.php">
      <div align="center">
        <input type="submit" value="KEMBALI" />
        <a/> 
      </div>
    </a></td>
  </tr>
</table>
<?php
}
?>
        <?
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="login.php";
	</script>
	<?
}
?>