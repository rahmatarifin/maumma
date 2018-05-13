<!DOCTYPE html>
<html lang="en">
<head>
<title>Koko</title>
<!--<meta charset="utf-8">-->
<link type="text/css" rel="stylesheet" href="styles/style.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<meta http-equiv='refresh' content='1;URL=index.php' />
<!--[if IE 6]>
<script type="text/javascript" src="js/ie6-transparency.js"></script>
<script>DD_belatedPNG.fix('#header h1, #header h2, .button, #contact-form .submit, #nav');</script>
<style>body { behavior: url("styles/ie6-hover-fix.htc"); }</style>
<link type="text/css" rel="stylesheet" type="text/css" href="styles/ie6.css" />
<![endif]-->
<!--[if IE 7]><link type="text/css" rel="stylesheet" type="text/css" href="styles/ie7.css" /><![endif]-->
</head>
<body>
<?php
date_default_timezone_set('Asia/Jakarta');
$time=date('H:i:s');
$tanggal = date('l');

//silahkan set/ganti WAKTU ALARM berbunyi:
$alarm= "07:00:00";
$alarm1= "09:40:00";

if($tanggal == 'friday'){
  $alarm2 = "11:15:00";
  $alarm3a = "11:15:00";
  $alarm3 = "11:15:00";
}else{
   $alarm2 = "11:55:00";
}

$alarm3a = "13:55:00";
$alarm3 = "14:15:00";

//menunjukan WAKTU AKTUAL
//echo"Saat ini pukul:<br/> $time <br/><br/>Alarm akan berbunyi pada pukul: $alarm";

 

//jika WAKTU AKTUAL = WAKTU ALARM , maka halaman redirect ke alarm.php
if ($time == "$alarm") {
echo"<meta http-equiv='refresh' content='0;URL=alarm.php' />";
}elseif($time == "$alarm1") { echo"<meta http-equiv='refresh' content='0;URL=alarm.php' />";
} elseif($time == "$alarm2") {
  echo"<meta http-equiv='refresh' content='0;URL=alarm.php' />";
}elseif ($time == "$alarm3") {
  echo"<meta http-equiv='refresh' content='0;URL=alarm.php' />";
}

?>
<div id="wrap">
  <div id="header">
    <h1 align="center"><font color="#01A9DB">MA UMMATAN WASATHON</font></h1>
    <h2 align="center"><font color="#01A9DB">IMOGIRI</font></h2>                                      <!-- masukan alamat sekolah -->
  </div>
  <!--end header-->
  <!--<div id="nav">
    <ul>
      <li><a href="index.html" class="current">Home</a></li>
    </ul>
  </div>
  <!--end nav-->
  <div id="featured-img">
  <!--<img src="images/logo2" alt="" width="400" height="400" align="center" /> -->
  <h1><?php 
  echo "pukul : $time </br>"; 
  echo "tanggal : $tanggal";
  ?></h1>
    
  </div>
                                                                                                      <!-- masukan coding realtime clock -->
  <!--end featured-img-->                 
  <div id="frontpage-content">
    <div id="about">
      <div id="about-details">
       
      </div>
       <!--     <div id="featured-project"> <img src="images/jdwl.jpeg" alt="" width="300" height="150" />--> </div>     
    </div>
  </div>
  <div id="footer">
    <p>Copyright &copy; <a href="#">A6-CalonDirecture\2018</a></p>
  </div>
  <!--end footer-->
</div>
<!--end wrap-->
</body>
</html>