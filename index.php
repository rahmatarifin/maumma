<<<<<<< HEAD
﻿<!DOCTYPE html>
<html lang="en" class="page">

<head>
<title>Biz Time</title>
<meta charset="utf-8">
<meta http-equiv='refresh' content='1;URL=index.php' />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.4.2.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Amaranth_400.font.js"></script>
<script src="js/script.js"></script>
<script src="js/scroll.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>
<script src="js/atooltip.jquery.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<style type="text/css">.button1, #ContactForm a {behavior:url("js/PIE.htc")}</style>
<![endif]-->
</head>

<body class="body">
<div class="body1">
  <div class="body2">
    <div class="main">
      <!-- header -->
      <header>
        <div class="wrapper">
          <nav>
            <ul id="top_nav">
              <li class="bg_none"><a href="#page_Home" class=""></a></li>
              <li><a href="#page_Contacts" class=""></a></li>
              <li><a href="#" class=""></a></li>
            </ul>
          </nav>
        </div>
        <div class="wrapper">
          <ul id="h3">
             <li><h2><img src="images/ma2.jpg" width="70" height="70" alt=""><a href="index.html" id="h3">   MA UMMATAN WASATHON</a></h2></li>           
          </ul>         
          <!--<ul id="icons">
            <li><a href="" class="normaltip"><img src="images/icon_1.png" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="images/icon_2.png" alt=""></a></li>
            <li><a href="#" class="normaltip"><img src="images/icon_3.png" alt=""></a></li>
          </ul>-->
        </div>
      </header>
      <!-- / header -->
    </div>
  </div>
</div>
<div class="wrapper">
  <div class="main">
    <nav>
      <ul id="menu">
        <li class="menu_active nav1"><a href="#page_Home">Home</a></li>
      </ul>
    </nav>
    <!-- content -->
    <section id="content">
      <div id="page_Home">
        <div>
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
            }
            if($time == "$alarm1") { echo"<meta http-equiv='refresh' content='0;URL=alarm.php' />";
            }
            if($time == "$alarm2") { echo"<meta http-equiv='refresh' content='0;URL=alarm.php' />";
            }
            if ($time == "$alarm3"){  echo"<meta http-equiv='refresh' content='0;URL=alarm.php' />";
            }
            if ($time == "$alarm3a"){  echo"<meta http-equiv='refresh' content='0;URL=alarm.php' />";
            }

          ?>
        </div>
        <div><h3 align="center">
          <?php 
            echo "pukul : $time </br>"; 
            echo "tanggal : $tanggal";
           ?></h3></div>
             
        <div id="slider_shadow"></div>
        </canvas><!--<a href="" class="normaltip"><img src="images/jdwl.jpeg" width="649" height="369" alt=""></a>-->
        <a>Sesuatu yang tak dapat kau ajak negosiasi adalah waktu #L</a>
        </div>
        <div id="slider_shadow"></div>

        <!--<div class="banners">
          <div class="col1">
            
            <div class="ban1">
              <div class="pad">
                <h2><strong>Quote</strong></h2>
                <p>Kenapa penyesalan selalu ada di belakang? Sebab dengan demikian manusia belajar dari kesalahan yang telah diperbuatnya. Belajar bahwa kehilangan akan sedemikian sakit. Manusia kadang baru bisa menghargai sesuatu setelah terlepas dari genggamanannya.</p>
                <div class="center"> <a href="#" class="button1">Read More</a>
                  <div class="button1_shadow"></div>
                </div>
              </div>
            </div>
            <div class="banner_shadow"></div>
          </div>
          <div class="col1 pad_left1">
            
            <div class="ban2">
              <div class="pad">
                <h2>Premium<strong>&nbsp;</strong> <span>Services</span></h2>
                <p>This Free Business Website Template goes with two packages – with PSD source files and without them.<br>
                  <br>
                </p>
                <div class="center"> <a href="#" class="button1">Read More</a>
                  <div class="button1_shadow"></div>
                </div>
              </div>
            </div>
            <div class="banner_shadow"></div>
          </div>
          <div class="col1 pad_left1">
            
            <div class="ban3">
              <div class="pad">
                <h2>Our<strong>&nbsp;</strong><span>Strategy</span></h2>
                <p>This website template has several pages: <a href="#page_Home">Home</a>, <a href="#page_News">News</a>, <a href="#page_Services">Services</a>, <a href="#page_Products">Products</a>, <a href="#page_FAQ">faq</a>, <a href="#page_Contacts">Contacts</a> (note that contact us form – doesn’t work).</p>
                <div class="center"> <a href="#" class="button1">Read More</a>
                  <div class="button1_shadow"></div>
                </div>
              </div>
            </div>
            <div class="banner_shadow"></div>
          </div>
        </div>
      </div>
     -->
<!--       <div id="page_News">
        <h2>Latest News &amp; Events</h2>
        <div class="box1_bot">
          <div class="box1_left">
            <div class="box1_right">
              <div class="box1">
                <div class="pad">
                  <div class="wrapper pad_bot2">
                    <figure class="left marg_right1"><img src="images/page1_img1.jpg" alt=""></figure>
                    <p class="pad_bot1 pad_top1"><strong>Sed ut perspiciatis unde omnis iste natus</strong></p>
                    <p>Dit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p>
                  </div>
                  <div class="wrapper">
                    <figure class="left marg_right1"><img src="images/page1_img2.jpg" alt=""></figure>
                    <p class="pad_bot1 pad_top1"><strong>At vero eos et accusamus et iusto odio dignissimos</strong></p>
                    <p>Et harum quidem rerum facilis est et expedita distinctio. Namhy libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus emporibus autem quibusdam et aut officiis debitis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
<!--       <div id="page_Services">
        <h2>Our Services</h2>
        <div class="wrapper">
          <div class="col2">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <div class="wrapper">
                        <figure class="left marg_right2"><a href="#"><img src="images/page2_img1.png" alt=""></a></figure>
                        <h3><a href="#">Management</a></h3>
                        <p>Nemo enim ipsam volup tate vuoluptas aspernatur aut odit aut fugit, sed quia consequuntur magni dolores voluptatem.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col2 pad_left1">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <div class="wrapper">
                        <figure class="left marg_right2"><a href="#"><img src="images/page2_img3.png" alt=""></a></figure>
                        <h3><a href="#">Planning</a></h3>
                        <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inven tore veritatis.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper marg_top1">
          <div class="col2">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <div class="wrapper">
                        <figure class="left marg_right2"><a href="#"><img src="images/page2_img2.png" alt=""></a></figure>
                        <h3><a href="#">Banking</a></h3>
                        <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inven tore veritatis.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col2 pad_left1">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <div class="wrapper">
                        <figure class="left marg_right2"><a href="#"><img src="images/page2_img4.png" alt=""></a></figure>
                        <h3><a href="#">Tax Services</a></h3>
                        <p>Nemo enim ipsam volup tate vuoluptas aspernatur aut odit aut fugit, sed quia consequuntur magni dolores voluptatem.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
<!--       <div id="page_Products">
        <h2>Products</h2>
        <div class="wrapper">
          <div class="col1">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <figure class="pad_bot1"><a href="#"><img src="images/page3_img1.jpg" alt=""></a></figure>
                      <h3><a href="#">Product #1</a></h3>
                      <p>Namhy libero temporem soluta nobis.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col1 pad_left1">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <figure class="pad_bot1"><a href="#"><img src="images/page3_img2.jpg" alt=""></a></figure>
                      <h3><a href="#">Product #2</a></h3>
                      <p>Namhy libero temporem soluta nobis.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col1 pad_left1">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <figure class="pad_bot1"><a href="#"><img src="images/page3_img3.jpg" alt=""></a></figure>
                      <h3><a href="#">Product #3</a></h3>
                      <p>Namhy libero temporem soluta nobis.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper marg_top1">
          <div class="col1">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <figure class="pad_bot1"><a href="#"><img src="images/page3_img4.jpg" alt=""></a></figure>
                      <h3><a href="#">Product #4</a></h3>
                      <p>Namhy libero temporem soluta nobis.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col1 pad_left1">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <figure class="pad_bot1"><a href="#"><img src="images/page3_img5.jpg" alt=""></a></figure>
                      <h3><a href="#">Product #5</a></h3>
                      <p>Namhy libero temporem soluta nobis.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col1 pad_left1">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <figure class="pad_bot1"><a href="#"><img src="images/page3_img6.jpg" alt=""></a></figure>
                      <h3><a href="#">Product #6</a></h3>
                      <p>Namhy libero temporem soluta nobis.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
<!--       <div id="page_FAQ">
        <h2>Frequently Asked Questions</h2>
        <div class="box1_bot">
          <div class="box1_left">
            <div class="box1_right">
              <div class="box1">
                <div class="pad">
                  <p class="pad_bot1"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit</strong></p>
                  <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                  <p class="pad_bot1"><strong>Excepteur sint occaecat cupidatat non proident, sunt officia deserunt</strong></p>
                  <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                  <p class="pad_bot1"><strong>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut</strong></p>
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
                  <p class="pad_bot1"><strong>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</strong></p>
                  <p>Suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
<!--       <div id="page_Contacts">
        <h2>Contacts</h2>
        <div class="wrapper">
          <div class="col3">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <form id="ContactForm" action="#">
                        <div>
                          <div class="wrapper"><span>Your Name:</span>
                            <input type="text" class="input" >
                          </div>
                          <div class="wrapper"><span>Your E-mail:</span>
                            <input type="text" class="input" >
                          </div>
                          <div class="wrapper"><span>Your City:</span>
                            <input type="text" class="input" >
                          </div>
                          <div class="textarea_box"><span>Your Message:</span>
                            <textarea name="textarea" cols="1" rows="1"></textarea>
                          </div>
                          <a href="#" class="button"><span class="shadow"></span>Send</a> <a href="#" class="button"><span class="shadow"></span>Clear</a> </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col1 pad_left1">
            <div class="box1_bot">
              <div class="box1_left">
                <div class="box1_right">
                  <div class="box1">
                    <div class="pad">
                      <p><span class="right marg_right2">USA</span>Country:<br>
                        <span class="right marg_right2">California</span>State:<br>
                        <span class="right marg_right2">San Diego</span>City:<br>
                        <span class="right marg_right2"><a href="#">lilly@mail.com</a></span>Email:<br>
                      </p>
                      <p class="pad_bot1"><strong>Miscellaneous Info:</strong></p>
                      At vero eos et accusoaus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores. </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </section>
    <!-- / content -->
  </div>
</div>
<div class="body3">
  <div class="body4">
    <div class="main">
      <!-- footer -->
      <footer> 
        <a href="#page_Home" id="h2">Wukisari, Imogiri, Bantul</a>
        <div>Copyright &copy; <a href="#">NoCopyrightWebsite</a> All Rights Reserved<br>
          Design by <a target="_blank" href="https://www.facebook.com/maksaba.imogiri">A6-C_Directurs</a></div>

      </footer>
      <!-- / footer -->
    </div>
  </div>
</div>
<script>Cufon.now();</script>
</body>
</html>
=======
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
>>>>>>> 69f49b37c9cd69033dded0fe68d296ce7b22a37c
