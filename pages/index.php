<?php
require 'action.php';
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>BANDHGORA ANCHAL VIDYALAYA (H.S)</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="/style.css"/>
<body>

<div class="w3-container">
  <header>
    <img src="src/icons.webp" width="100" height="100">
    <br />
    <h1>
      BANDHGORA ANCHAL VIDYALAYA(H.S)
    </h1>
    <h2 id="estd">--Since 1965--</h2>
  </header>
<br />
  <div class="w3-bar w3-blue">
    <button class="w3-bar-item w3-button tablink " onclick="openCity(event,'News')" style="border-left: 1px solid white; border-right: 1px solid white; border-bottom: 1px solid white;">Notices & Updates </button> 
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'HOI')" style="border-left: 1px solid white; border-right: 1px solid white; border-bottom: 1px solid white;">HOI's Desk  </button>
    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Academics')" style="border-left: 1px solid white; border-right: 1px solid white; border-bottom: 1px solid white;">Academics </button>
      <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'admission')" style="border-left: 1px solid white; border-right: 1px solid white; border-bottom: 1px solid white;">Admissions </button>
         <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'about')" style="border-left: 1px solid white; border-right: 1px solid white; border-bottom: 1px solid white;">About Us </button>
              <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'teachers')" style="border-left: 1px solid white; border-right: 1px solid white; border-bottom: 1px solid white;">Teachers & Staffs </button>
                   <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'gallery')" style="border-left: 1px solid white; border-right: 1px solid white; border-bottom: 1px solid white;">Gallery </button>
           <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'admin')">Admin Login</button>
  </div>
  
  <div id="News" class="w3-container w3-border city">
   
    <h2>Notices & Updates</h2>
    
  <hr />
     <iframe src="http://bavhs.my-board.org/notices.php" width="100%" height="1200px"></iframe>
  <br />
  <br />
  </div>


  <div id="HOI" class="w3-container w3-border city" style="display:none">
 <iframe src="https://uttam-mahata.github.io/desk/" width="100%" height="1200px"></iframe>
  </div>
  <div id="admission" class="w3-container w3-border city" style="display:none">
  <iframe src="https://uttam-mahata.github.io/acad/" width="100%" height="1200px"></iframe>
    </div>
    <div id="about" class="w3-container w3-border city" style="display:none">
<iframe src="https://uttam-mahata.github.io/about/" width="100%" height="1200px"></iframe>
  
      </div>
       <div id="teachers" class="w3-container w3-border city" style="display:none">
    <h3>
      Teachers & Staffs
    </h3>
   <iframe src="https://uttam-mahata.github.io/tch/" height="1200px" width="100%"></iframe>
    
    </div>
       <div id="gallery" class="w3-container w3-border city" style="display:none;">
    <h2>
      Gallery
    </h2>
    <hr />
   <iframe src="https://uttam-mahata.github.io/gllr/" width="100%" height="1200px"></iframe>
   
    </div>
        <div id="admin" class="w3-container w3-border city" style="display:none; height: 1200px;">
    <h2 style="text-align: center;">
      Admin Login
    </h2>
    <h4> Here Only Admin can Login. Admin username and password is provided. He can access the admin page to post notices and information about other events.
    </h4>
   <a href="/adminlogin.php">
     <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-success">Login</button>
   </div>
   </a>
   <br />

  
   
<br />
    </div>
  <div id="Academics" class="w3-container w3-border city" style="display:none">
 <iframe src="https://uttam-mahata.github.io/adm/" width="100%" height="1200px"></iframe>
</div>

<br />
<footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>Important Links</h3>
 <br />
<ul>
  <li><a class="WBBSE" href="https://wbbse.org/" id="id01">WBBSE</a></li>
  <li><a class="WBCHSE" href="https://wbchse.nic.in" id="id01">WBCHSE</a></li>
  <li><a class="WBSCC" href="https://wbscc.wb.gov.in/" id="id01">WBSCC</a></li>
  <li><a class="KANYASHREE" href="https://www.wbkanyashree.gov.in/" id="id01">KANYASHREE</a></li>
  <li> <a class="SVMCM" href="https://svmcm.wbhed.gov.in" id="id01">SVMCM</a></li>
  <li> <a class="OASIS" href="https://oasis.gov.in/" id="id01">OASIS</a></li>
</ul>
 </div>
 
 <div class="footer-center">
 
 <div>
 <i class="fa fa-map-marker"></i>
 <p><span>Bandhgora, Jhargram</span>West Bengal, 721514</p>
 </div>
 
 
 <div>
 <i class="fa fa-envelope"></i><a href="mailto:bandhgoraanchalvidyalayahs@gmail.com" style="font-size: 12px;">bandhgoraanchalvidyalayahs@gmail.com</a>
 </div>
 
 </div>
 
 <div class="footer-right">
 
 <p class="footer-company-about">
 This website is made for students to provide some information and updates about school events & notices.
 
 </p>
 
 <div class="footer-icons">
 
 <a href="https://www.facebook.com/Bandhgora-Anchal-Vidyalaya-HS-2008098879403502/"><i class="fa fa-facebook"></i></a>
 <a href="#"><i class="fa fa-twitter"></i></a>
 <a href="#"><i class="fa fa-linkedin"></i></a>
 <a href="#"><i class="fa fa-instagram"></i></a>
 
 </div>
 
 </div>
 <br />
<p style="text-align: center;" class="footer-company-about">
   Copyright.2021.Bandhgora Anchal Vidyalaya (H.S)
</p>
 </footer>
<script src="/main.js">
  
</script>
</body>
</html>
