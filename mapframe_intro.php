<!doctype html>
<html lang="en">
  <head>
    <title>map online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="LibraryW3School/w3.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Framemap1/css/font-awesome.min.css">
    <link rel="stylesheet" href="Framemap1/css/style.css">
    <script type="module" src="LibraryW3School/showhtmlcode.js"></script>
   <link href="PageIdea/pageDemo/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="PageIdea/ageDemo/css/style.css" rel="stylesheet" />

     <!-- Bootstrap core CSS -->
    <link href="PageIdea/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->

  <!-- Custom styles for this template -->
<style>

div {
  text-align: justify;
  text-justify: inter-word;
}
a:link {
  text-decoration: none;
}
a:visited {
  text-decoration: none;
}
a:hover {
  text-decoration: none;
  color: #00F;
}
a:active {
  text-decoration: none;
}
</style>    
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway","Arial", sans-serif}
div {
  text-align: justify;
  text-justify: inter-word;
}
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
/* Create an active/current tablink class */
.tab button.active {
  background-color:#ABD8DC ;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;

}
.button {
  display: inline-block;
  padding: 5px 8px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 25px;
  box-shadow: 0 5px #999;
  width: 200px;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style> 

  </head>
  <body>
 
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-orange w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><Strong> WebGIS</strong></a>
    <!-- Float links to the right. Hide them on small screens -->

  </div>
</div>
 <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1000px" id="home">
    <p></p>
    <h2 class="w3-wide"><font color="blue"><b>บทนำ  : งานสร้างแผนที่วัฒนธรรมออนไลน์ <br>(Introduction to Culture mapping online )</b></font></h2>
    <h6><p class="w3-opacity"><font color="brown"><i>We are Geo-Informatic</i></font></p></h6>
    <h4><p align="justify"> ในเอกสารเว็บนี้ออกแบบปรับปรุงพัฒนาขึ้นเพื่อให้บริการข้อมูลแผนที่วัฒนธรรมออนไลน์ เพื่อการอนุรักษ์ และส่งเสริมการท่องเที่ยวในจังหวัดปัตตานี และสำหรับใช้พัฒนางานระบบสารสนเทศภูมิศาสตร์บนเว็บ (WebGIS) ในเฟรมเวิร์คการทำงาน (Framework) ครั้งนี้ใช้แผนที่ออนไลน์ของ Google map api เป็นแผนที่ฐาน สามารถทำงานแบบสแตนด์อโลนและ/หรือในส่วนเครื่องแม่ข่าย (Server) และมีรหัสต้นฉบับ (Source code) พร้อมตัวอย่างประกอบสำหรับใช้พัฒนางาน WebGIS  โดยชุดรหัสต้นฉบับในเอกสารเว็บนี้ออกแบบปรับปรุงพัฒนาขึ้น เพื่อให้บริการแสดงผลแผนที่แหล่งวัฒนธรรมและการท่องเที่ยวในจังหวัดปัตตานีบนหน้าเว็บเพจอย่างง่ายโดยไม่คิดค่าใช้จ่าย เพื่อให้ผู้พัฒนาและหรือองค์กร/หน่วยงานต่างๆที่สนใจนำ<font color="#00f">Source code กรอบการทำงาน </font>ไปใช้งานต่อยอดทางความคิดต่อไป  </p></h4> 
 </div>
<hr>
<!-- Header 1 -->
 <div class="w3-container">
      <p align="justify" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h5><strong><font color="#00f"> &nbsp;&nbsp;&nbsp;การสร้างแผนที่วัฒนธรรมออนไลน์เพื่อให้บริการข้อมูลด้านการอนุรักษ์และการท่องเที่ยวทางวัฒนธรรมในจังหวัดปัตตานี</font></strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ส่วนนี้แนะนำวิธีการและเทคนิคที่ใช้ในการออกแบบและสร้างแบบแผนที่ออนไลน์ ซึ่งใช้แผนที่ฐานของ Google map api javascript v3.0 และจากการบันทึกภาพจากโทรศัพท์สมาร์ทโฟนและกล้องแพโนรามา 360องศา มีกรอบการทำงานแสดงดังผังต่อไปนี้</h5></p>
      <p></p>
      <p align="center"><img src="PageIdea/PicpaperVR/mapConcept.jpg" width="60%"></p>
      <h5><p align="center"><b><font color="#00f">แสดงผังกรอบแนวคิดการสร้างแพลตฟอร์ม Culture mapping online</font></b></p></h5>
  </div>
  <br>
 <hr>

<!-- map online Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-16 w3-container" >
  <div class="w3-row">
    <div  class="w3-col w3-container" style="width:40%">
      <iframe src="../../menupattani/Routeculture1_logo.php" title="ล่องเรือยะหริ่ง" allowfullscreen  width="650" height="320" style="border:none;"></iframe>
    </div>
    <div class="w3-col w3-container" style="width:60%">

        <h4><img src="PageIdea/assets/images/1.png" style="width: 40px; height: 40px;">&nbsp;&nbsp;&nbsp;<b><font color="blue">การสร้างแผนที่วัฒนธรรมออนไลน์ </font>(Culture mapping online)</b></h4>
        
      <p class="w3-text-black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="blue"><b>Source code</b></font> สำหรับการพัฒนาแผนที่บนเว็จเพจ ประกอบด้วย รหัสต้นทางของ Google map api JavaScript v.3,  รวมทั้ง เทคนิคการเขียน PHP ร่วมกับ SQL เพื่อการบริหารจัดการฐานข้อมูล, CSS เพื่อการตกแต่งเว็บเพจ และร่วมกับคลังโปรแกรมสำหรับสร้างแผนที่จาก JQuery</p>
      <br>
      <div class="down-buttons">
        <div class="main-blue-button-hover">
          <a href="../Indexframe.php">Example source code</a>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<!-- UAV part -->


<!-- Footer -->
<footer class="w3-container w3-padding-16 w3-center w3-orange w3-xlarge">
   <p>Powered by <a href="http://www.geog.pn.psu.ac.th" class="w3-hover-text-green" target="_blank"><font color="blue">Wutthipong Sangmanee</font></a></p>
</footer>


<br>

  <!-- Scripts -->
  <script src="../PageIdea/assets/js/imagesloaded.js"></script>
  <script src="../PageIdea/assets/js/custom.js"></script>



  </body>
</html>