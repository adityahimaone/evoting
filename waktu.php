<title>Waktu</title>
<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style></head>
 <div id="jam" valign="top"> 
      <script language="JavaScript">
function makeArray() {
     for (i = 0; i<makeArray.arguments.length; i++)
         this[i] = makeArray.arguments[i];
 }
function getFullYear(d) {
    var y = d.getYear();
    if (y < 1000) {y += 1900};
    return y;
}
var days = new makeArray("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
var months = new makeArray("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
function format_time(t) {
    var Day = t.getDay();
    var Date = t.getDate();
    var Month = t.getMonth();
    var Year = t.getFullYear();
    timeString = "";
    timeString += days[Day];
    timeString += ", ";
    timeString += " ";
    timeString += Date;
    timeString += " ";
    timeString += months[Month];
    timeString += " ";
    timeString += Year;
   return timeString;
 }
</script>
      <img src="images/calendar.png" width="20" height="20" align="texttop"> 
      <script language="JavaScript" type="text/javascript">
							d = new Date();
							document.write(format_time(d));
						</script>
      <img src="images/Clock.png" width="20" height="20" align="texttop"> <span id="clock">00:00:00</span> 
      <script language="JavaScript" type="text/javascript">
							showtime();
							function showtime () {
							var now = new Date();
							var hours = now.getHours();
							var minutes = now.getMinutes();
							var seconds = now.getSeconds()
							var timeValue = "" + ((hours >24) ? hours -24 :hours)
							timeValue += ((minutes < 10) ? ":0" : ":") + minutes
							timeValue += ((seconds < 10) ? ":0" : ":") + seconds
							clock.innerHTML = timeValue;
							timerID = setTimeout("showtime()",1000);
						}
						</script>
    </div>
    <?php include "fungsi_waktu.php"; ?>
  </div>
