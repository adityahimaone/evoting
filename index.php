<!DOCTYPE html>
<?php

?>
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
<html >
<head>
  <meta charset="UTF-8">
  <title>Aplikasi PILKOSIS</title>
  <link href='images/osis.png' rel='shortcut icon'>
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="bk-img" style="background-image: url(foto/wall1.jpg);" >
<div class="pen-title">
  <h1>Selamat Datang di Aplikasi PILKOSIS</h1><span><h2>OSIS SMK Negeri 1 Kebumen Periode 2017/2018</h2></a></span>
  <br />
  <tr>
	<center>
	<table>
   <td><div class="Tanggal"><h3 color="black"><b><script language="JavaScript">document.write(tanggallengkap);</script></b></div></h3></td> 
            <td align="center"><h3><b>- Pukul :</b></h3> </td>
            <td align="center" > <h3><b><div id="output" class="jam" ></div></b></h3></td>
	</tr>
	</center>
	</table>
</div>
<div class="rerun"><a href="index.php">Refresh</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">

    <h1 class="title">Login</h1>
    <form action="proses_login_siswa.php" method="POST">
      <div class="input-container">
        <input type="text" name="nis" required="required"/>
        <label for="">NIS</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" required="required"/>
        <label for="">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit">Mulai </button>
      </div>
      <div class="footer"><a href="#" onclick="alert('Lupa Password?, Untuk Bantuan Silahkan Menghubungi Admin.!')" class="text-light">Lupa Password?</a></div>
	  <p>
	  <div class="rerun"><a href="login.php">ADMIN</a></div>
    </form>
  </div>
</div> 
<center>
<span><img src="foto/line.gif" image="responsive" width="100%"></span>
</center>
</div> 

				<!-- /.row -->	
			</div>
        </div>
        	

</body>

</html>
