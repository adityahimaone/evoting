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
			
			
			$query=mysql_query(" SELECT sum(jumlah_suara) as total FROM calon_ketos ");
			$total=mysql_fetch_array($query);
			$total_suara=$total['total'];
			
			?>
      </p>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <style>
/* CSS for Zebra Table in index.html */
.zebra-table {
	width: 100%;
	border-collapse: collapse;
	box-shadow: 0 2px 3px 1px #ddd;
	overflow: hidden;
	border:10px solid #black;
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
      
      <table width="820" height="200" align="center" class="zebra-table">
        <tr bgcolor="#00CC00">
		  <thead>
          <td bgcolor="#2e8b57" height="29" colspan="5" width="100%"><div align="center"><strong><font color="#9ACD32" face="Helvetica" size="3">HASIL PEROLEHAN SUARA PEMILIHAN CAKSIS & CAWAKSIS</font></strong></div></td>
		  </thead>
		</tr>
		</tbody>
        <?
			$hasil=mysql_query("select * from calon_ketos");
			while($row=mysql_fetch_array($hasil)){
				$nama_calon_ketos=$row['nama_calon_ketos'];
				$foto=$row['foto'];
				$jumlah_suara=$row['jumlah_suara'];
				$persen=round(((int)$jumlah_suara/(int)$total_suara)*100,2);
				$lebar=$persen*2;		
				?>
                <?php
$host="localhost";
$user="root";
$pass="";
$db="aplikasi_pilkosis";
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);				
$jmldata = mysql_num_rows(mysql_query("SELECT * FROM siswa"));

?>
        <tr bgcolor="#00CC00" >
          <td><? echo $nama_calon_ketos;?></td>
          <td><span class="style1"><img src="<? echo $row['foto'];?>"  width="122" height="128" border="0" /></span></td>
          <td><font face="verdana" size="3" color="#000"><? echo $jumlah_suara." suara";?></font></td>
		  <td width="120">
          <div class="progress">
		  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<? echo $persen;?>" ></div>
		  </div>
		  </td>
          <td><? echo $persen."%";?></td>
        </tr>
        <tr>
          <td colspan="5"><hr color="#CCCCCC" size="1"/></td>
        </tr>
        <?	
			}
			?>
        <tr>
          <td bgcolor="#D3D3D3" colspan="5" align="center" valign="middle"><p align="center"><font face="Helvetica" size="4" color="#ff0000"><center><b><? echo 'Total Voting : ',$total_suara; ?>  <?php echo 'Total DPT : ',$jmldata; ?></b></center></font></p></td>   	
		</tr>
		</tbody>
      </table>
    <?
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="login.php";
	</script>
    	<?
}
?>