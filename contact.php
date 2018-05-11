<!DOCTYPE html>
<html lang="en">
<head>
<title>Koko | Contact</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="styles/style.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="js/ie6-transparency.js"></script>
<script>DD_belatedPNG.fix('#header h1, #header h2, .button, #contact-form .submit, #nav');</script>
<style>body { behavior: url("styles/ie6-hover-fix.htc"); }</style>
<link type="text/css" rel="stylesheet" type="text/css" href="styles/ie6.css" />
<![endif]-->
<!--[if IE 7]><link type="text/css" rel="stylesheet" type="text/css" href="styles/ie7.css" /><![endif]-->
</head>
<body>
<div id="wrap">
  <div id="header">
    <h1>Koko Media</h1>
    <h2>The User Experience Specialists</h2>
  </div>
  <!--end header-->
  <div id="nav">
    <ul>
      <li><a href="index.html">Home</a><span>~</span></li>
      <li><a href="services.html">Services</a><span>~</span>
        <ul>
          <li><a href="#">User Experience</a></li>
          <li><a href="#">Website Design</a></li>
          <li><a href="#">Usability Testing</a></li>
        </ul>
      </li>
      <li><a href="projects.html">Projects</a><span>~</span></li>
      <li><a href="contact.html" class="current">Contact</a></li>
    </ul>
  </div>
  <!--end nav-->
  <div id="content">
    <h2 class="title">Contact Us</h2>
    <p>Get in touch with us using the form below.</p>
    <form id="contact-form" method="post" action="#">
      <fieldset>
        <input id="form_name" type="text" name="name" value="Name" onFocus="if(this.value=='Name'){this.value=''};" onBlur="if(this.value==''){this.value='Name'};" />
        <input id="form_email" type="text" name="email" value="Email" onFocus="if(this.value=='Email'){this.value=''};" onBlur="if(this.value==''){this.value='Email'};" />
        <input id="form_subject" type="text" name="subject" value="Subject" onFocus="if(this.value=='Subject'){this.value=''};" onBlur="if(this.value==''){this.value='Subject'};" />
        <textarea id="form_message" rows="10" cols="40" name="message"></textarea>
        <input id="form_submit" class="submit" type="submit" name="submit" value="Submit &raquo;" />
        <div class="hide">
          <label>Do not fill out this field</label>
          <input name="spam_check" type="text" value="" />
        </div>
      </fieldset>
    </form>
  </div>
  <!--end content-->
  <div id="footer">
    <p>Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved / Design By <a target="_blank" href="http://www.chris-creed.com/">Chris Creed</a></p>
  </div>
  <!--end footer-->
</div>
<!--end wrap-->
</body>
</html>