<title>Rincian Data Calon Ketua OSIS</title>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<? session_start();
if ($_SESSION['nis'])
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
						<div class="table-responsive">
						
<style>
/* CSS for Zebra Table in index.html */
.zebra-table {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	overflow: hidden;
	border:10px solid #fff;
}
	.zebra-table th,.zebra-table td{
		vertical-align: top;
		padding:10px 7px;
		text-align: left;
		margin:0;
	}
		.zebra-table tbody tr:nth-child(odd) { /* Make table like zebra */
			background:#eee;
		}

/* End CSS for Zebra Table in index.html */

/* CSS for Rainbow Table in index1.html */
.rainbow-table {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	overflow: hidden;
	border:10px solid #fff;
}
.rainbow-table th,.rainbow-table td{
	vertical-align: top;
	padding:10px 7px;
	text-align: left;
	margin:0;
}
.rainbow-table tbody {
	color: #fff;
}
	/* Make table like rainbow */
	.rainbow-table tbody tr:nth-child(4n+1) { /* 4n is 4 colours */
		background:#33ccff /* red */
	}
	.rainbow-table tbody tr:nth-child(4n+2) { 
		background:#cccc33; /* yellow */
	}
	.rainbow-table tbody tr:nth-child(4n+3) { 
		background:#33cc33; /* green */
	}
	.rainbow-table tbody tr:nth-child(4n+4) { 
		background:#3333cc; /* blue */
	}

/* End CSS for Rainbow Table in index1.html */

/* CSS for Highlighted Row in index2.html */
.highlighted-row {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	overflow: hidden;
	border:10px solid #fff;
}
.highlighted-row th,.highlighted-row td{
	vertical-align: top;
	padding:10px 7px;
	text-align: left;
	margin:0;
}
	/* Make row highlighted */
	.highlighted-row tbody tr:nth-child(2) { 
		background:#cc3333; /* red */
		color:#fff;
	}

/* End CSS for Highlighted Row in index2.html */

/* CSS for Highlighted Column in index3.html */
.highlighted-column {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	overflow: hidden;
	border:10px solid #fff;
}
	.highlighted-column th,.highlighted-column td{
		vertical-align: top;
		padding:10px 7px;
		text-align: center;
		margin:0;
	}
		.highlighted-column tr td:nth-child(2),.highlighted-column tr th:nth-child(2)  { /* Make column highlighted */
			background:#333333;
			color: #fff;
		}
/* End CSS for Highlighted Column in index3.html */

/* CSS for Fixed Table Header in index4.html */
.fixed-th {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	table-layout: fixed;
	border:10px solid #fff;
}
	.fixed-th thead {
		background-color: #333;
		color:#fff;
		display: block;
	}
	/* make it scrolled */
	.fixed-th tbody {
		display: block;
	  	overflow-y: auto;
	  	width: 100%;
	  	max-height: 300px;
	  	position: static;
	}

	/* end make it scrolled */

			.fixed-th th,.fixed-th td{
				vertical-align: top;
				padding:10px 7px;
				text-align: left;
			}
			.fixed-th th + th, .fixed-th td + td {
				border-left:1px solid #ddd;
			}
			.fixed-th th:nth-child(1), .fixed-th td:nth-child(1) {
				min-width:40px;
			}
			.fixed-th th:nth-child(2), .fixed-th td:nth-child(2) {
				width:300px;
			}
			.fixed-th th:nth-child(3), .fixed-th td:nth-child(3) {
				width:250px;
			}

/* End CSS for Fixed Table Header in index4.html */
</style>
<table  class="rainbow-table">
                                    <thead>
                                        <tr>
                                            <th bgcolor="white"><font color="#8000ff" align="center">NO</th></font>
                                            <th bgcolor="white"><font color="#8000ff">NIS</th></font>
                                            <th bgcolor="white"><font color="#8000ff">Nama</th></font>
                                            <th bgcolor="white"><font color="#8000ff">Kelas</th></font>
											<th bgcolor="white"><font color="#8000ff">Motto</th></font>
											<th bgcolor="white"><font color="#8000ff">Visi &amp; Misi</th></font>
											<th bgcolor="white"><font color="#8000ff">Program Kerja</th></font>
											<th bgcolor="white"><font color="#8000ff" align="center">Foto</th></font>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><? echo $row['id_calon_ketos'];?></td>
                                            <td><? echo $row['nis'];?></td>
                                            <td><? echo $row['nama_calon_ketos'];?></td>
                                            <td><? echo $row['kelas'];?></td>
											<td><? echo $row['motto'];?></td>
											<td><? echo $row['visi_misi'];?></td>
											<td><? echo $row['program_kerja'];?></td>
											
											<td align="center"><img src="<? echo $row['foto'];?>"  width="250" height="250" border="0"></td>
                                        
										</tr>
                                        
                                    </tbody>
									
									
                                </table></div>  <tr>
 
  <tr>
   <a href="index_siswa.php"><input type="image" src="foto/buttonblue.png" alt="submit button" height="50px" width="130px">
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
	document.location="lndex.php";
	</script>
	<?
}
?>