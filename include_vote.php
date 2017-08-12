<? session_start();
if ($_SESSION['nis'])
{
?>
<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<!---//scrip waktu---->
 <script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);
function waktu() {
	var tanggal = new Date();
	setTimeout("waktu()",1000);
	document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>
<!---//scrip tanggal,hari,bulan,tahun---->
<script language="JavaScript">
var tanggallengkap = new String();
var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
namahari = namahari.split(" ");
var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
namabulan = namabulan.split(" ");
var tgl = new Date();
var hari = tgl.getDay();
var tanggal = tgl.getDate();
var bulan = tgl.getMonth();
var tahun = tgl.getFullYear();
tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;

	var popupWindow = null;
	function centeredPopup(url,winName,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	popupWindow = window.open(url,winName,settings)
}
</script>
<!---//end waktu---->
<style type="text/css">
pinggir{
	border: 5px solid #ffff80;
	border-radius: 5px;
	background-color: #ccff66;
	text-shadow: 3px 3px 3px #f08080;

}
samping{
	border-left: 6px solid yellow;
	background-color: lightgrey;


}
@font-face {
	font-family: "Adventure";
	src: url('fonts/Adventure.otf');
	font-family: "Avengeance Heroic Avenger";
	src: url('fonts/Avengeance Heroic Avenger.otf');
	font-family: "Full Pack 2025";
	src: url('fonts/full Pack 2025.ttf');
	font-family: "Jersey M54";
	src: url('fonts/Jersey M54.ttf');



}
<!--
p.round1{
		border: 2px solid red;
		border-radius: 5px;
	}
.style1 {color: #FF0000}
.style2 {
	font-size: 14px;
	color: #00FF00;
}
.style6 {color: #00BFFF;
font-size: 25px;
font-weight: bold;
font-face: ArtBrush;
}
.style10 {font-size: 20px;
color: #FFFFFF;
}
.style13 {
	font-size: 12px;
	color: #0033FF;
	font-weight: bold;
}
.style17 {
	color: #0033FF;
	font-size: 10px;
}
.style18{
font-size: 20px;
font-face:Adventure;
color: #87CEFA;
font-weight: bold;

}
.style19 {color: #000000;
font-weight: bold;
font-size: 20px;
}
.style21 {color: #6A5ACD;
font-weight: bold;
font-size: 25px;
text-shadow: 3px 3px 5px #7b68ee;
}
.style20 {color: #1E90FF;
font-weight: bold;
font-size: 20px;
text-shadow: 3px 3px 5px #ffffff;
}
.style99 {color: #000000;
font-weight: bold;
font-size: 20px;
}
-->
</style>
			<tr pinggir>
			<tr class="pinggir"> <span class="style6"> <span class="style18"><font face="Jersey M54" color="#FF6666" size="8"><pinggir>SELAMAT DATANG</font>
			<td height="437" align="center"  valign="top">
					<h2 class="title style21"><b>Di Aplikasi Pemilihan Ketua dan Wakil Ketua OSIS SMK Negeri 1 KEBUMEN</b></h2>
				<h2 class="title style20" face color="blue">Periode 2017/2018	</h2></td>

				<font color="black">

				<center>
				<table >
            <tr>
            <td><div class="Tanggal"><h3 color="black"><b><script language="JavaScript">document.write(tanggallengkap);</script></b></div></h3></td>
            <td align="center"><h3><b>- Pukul :</b></h3> </td>
            <td align="center" > <h3><b><div id="output" class="jam" ></div></b></h3></td>
            </tr>
            </table>
			</center>

				</font>
				<p></p>
			</font></marquee></span><span class="style6"><span class="style19"> Hai </span ><span class="style99"><? echo $_SESSION['nama_siswa'];?></span></span></span>


			<span class="style19"> ,Selamat Memilih </span></td>
			<p></p>
			<span class="style19"> Pilihlah Sesuai Hati Nurani Anda.</span></pinggir>
			</span>
			</tr>
			<tr>

				<br><br>
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
	?>
  <script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?
};
						$query=mysql_query("select * from calon_ketos");

						while($row=mysql_fetch_array($query)){
						?>
						 <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">


									   <a href="voting.php?id_calon_ketos=<? echo $row['id_calon_ketos'];?>" onClick="return confirm('Apakah Anda yakin? pilihlah sesuai dengan hati nurani Anda!')"><img src="<? echo $row['foto'];?>"  width="100%" height="100%" border="0" title="Saya pilih <? echo $row['nama_calon_ketos'];?>"/></a>

                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <a href="detail_calon_ketos.php?id_calon_ketos=<?php echo $row['id_calon_ketos']; ?>" class="block-anchor panel-footer">Lihat Selengkapnya<img src="images/external.gif"></a>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

						<?
						}
						?>


				  <p class="style1"><span class="style10"><font face="MV Boli" color="black" size="3"><b> *) Pilihlah Calon Ketua dan Calon Wakil Ketua OSIS dengan mengeklik FOTOnya!!!</b></span></p>
			    </div>
				</div>
			  </td>
			</tr>
        <?
}else{
	?><script language="javascript">
	alert("Maaf, Anda tidak berhak mengakses halaman ini!!");
	document.location="index.php";
	</script>
	<?
}
?>
