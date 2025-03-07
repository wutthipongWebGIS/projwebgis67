<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 340px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #F3F4F7  ;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #2A2B2C  ;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #2C76F0 ;
    background-color: #FCEAE4 ;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #C9E9EC  ;
  color: #4462D2 ;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #EAECEC  ;
  padding-left: 5px;
  margin-left: 20px;
  font-size: 12px;

}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="Mapframe.html" target="mainB"><font color="#4462D2 ">Overview</font></a>
  <button class="dropdown-btn"><i class="fa fa-caret-right">&ensp;ความนำ 
    </i>
  </button>
  <div class="dropdown-container">
         <a href="Framemap1/Start1.html" target="mainB">เริ่มต้นการใช้งาน</a>
         <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="new">การขอใช้ Google API KEYs</a>
         <a href="https://www.w3schools.com/php/default.asp" target="new">พื้นฐานชุดรหัสคำสั่งภาษา PHP</a>
         <a href="https://www.w3schools.com/sql/sql_create_db.asp" target="new">พื้นฐานชุดรหัสคำสั่งภาษา SQL</a>
         <a href="https://www.w3schools.com/js/default.asp" target="new">พื้นฐานชุดรหัสคำสั่งภาษา Javascript api </a>
         <a href="Framemap1/library2_map.php" target="mainB">คลังโปรแกรมพื้นฐาน </a>
  </div>
  <button class="dropdown-btn"><i class="fa fa-caret-right"></i>&ensp;Web Mapping 
  </button>
  <div class="dropdown-container">
       <a href="Framemap1/basicmap.php" target="mainB">การสร้างแผนที่ฐาน</a>
       <a href="Framemap1/stylemap.html" target="mainB">เลือกประเภทแผนที่ (Maps style)</a>
       <a href="Framemap1/marker_map.php" target="mainB">Add Marker with Infowindows</a>       
       <a href="#" target="mainB">แสดงผลข้อความ infowindows</a>       
       <a href="Framemap1/kmllayer.php" target="mainB">การแสดงแผนที่ด้วยข้อมูลไฟล์ KMl</a>
       <a href="Framemap1/import_imgmap.php" target="mainB">นำเข้า-Uploadimage-แสดงแผนที่</a>       
  </div>
  <button class="dropdown-btn"><i class="fa fa-caret-right"></i>&ensp;MySQL Database 
  </button>
  <div class="dropdown-container">
       <a href="Dtabasesource/tblAll.php" target="mainB">พื้นฐานตารางข้อมูล</a>
       <a href="Dtabasesource/map_connecdb.php" target="mainB">เชื่อมโยงฐานข้อมูลและตารางข้อมูล</a>
       <a href="importCSV/codeimportcsv.php" target="mainB">นำเข้าข้อมูลด้วยแฟ้ม CSV</a>
       <a href="Framemap1/getlatlong2map.php" target="mainB">Get lat-long บันทึกลงตารางข้อมูล</a>
       <a href="Framemap1/codeimportplace.php" target="mainB">ระบบย่อยการนำเข้าข้อมูล</a>
       <a href="Framemap1/codelogin.php" target="mainB">ระบบลงทะเบียนและระบบ Login-Logout</a>
      <a href="#" target="mainB">การค้นหาข้อมูล</a>
  </div>
  <button class="dropdown-btn"><i class="fa fa-caret-right"></i>&ensp;Map & Virtual tour 
  </button>
  <div class="dropdown-container">
      <a href="#" target="mainB">360Library</a>
      <a href="#services">panorama360</a>
      <a href="#" target="mainB">MySQL</a>
      <a href="#services">Map source</a>

  </div>
  <button class="dropdown-btn"><i class="fa fa-caret-right"></i>&ensp;ตัวอย่างแผนที่วัฒนธรรมออนไลน์ 
  </button>
  <div class="dropdown-container">
      <a href="insertimag2db/location2sect.php" target="mainB">การนำเข้าข้อมูล 1</a>
      <a href="../PIC_Virtual/googlrtest/Clickmap1.php" target="mainB">การนำเข้าข้อมูล 2</a>
      <a href="../PIC_Virtual/googlrtest/location.php" target="mainB">การนำเข้าข้อมูล-Add</a>
      <a href="../PIC_Virtual/googlrtest/showmap2.php" target="mainB">แสดงข้อมูลบน Google map </a>
      <a href="Insertimag2db/culturemap1.php" target="_parent">Google map and Marker mouse over</a>
      <a href="Framemap1/codeselect_location.php" target="mainB">การสืบค้น-แสดงแผนที่</a>
      <a href="#services">การรายงานผลฐานข้อมูล</a>
  </div>
  <button class="dropdown-btn"><i class="fa fa-caret-right"></i>&ensp;ตัวอย่างชุดภาพทัวร์ความจริงเสมือน 
  </button>
  <div class="dropdown-container">
      <a href="#" target="mainB">การนำเข้าข้อมูลภาพ</a>
      <a href="#services">การแสดงผล</a>
      <a href="#services">การรายงานผลฐานข้อมูล</a>
  </div>
  <button class="dropdown-btn"><i class="fa fa-caret-right"></i>&ensp;ตัวอย่างแบบจำลองสามมิติ 
  </button>
  <div class="dropdown-container">
      <a href="#" target="mainB">การนำเข้าข้อมูลแบบจำลอง</a>
      <a href="#services">การแสดงผลแบบจำลองบนเว็บ</a>
      <a href="#services">การรายงานผลฐานข้อมูล</a>
  </div>
  <button class="dropdown-btn"><i class="fa fa-caret-right"></i>&ensp;ตัวอย่างระบบลงทะเบียน 
  </button>
  <div class="dropdown-container">
      <a href="login64/registry.php" target="mainB">ระบบลงทะเบียนนักท่องเที่ยว-ผู้ใช้งานทั่วไป</a>
      <a href="login64/registry2oper.php" target="mainB">ระบบลงทะเบียนผู้ดูแล/เจ้าหน้าที่</a>
      <a href="login64/loginwebgis.php" target="mainB">ระบบลงทะเบียนเข้า</a>
  </div>

</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html> 
