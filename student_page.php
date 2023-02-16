<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>หน้าแรก</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <link rel="stylesheet" type="text/css" href="ab.css">
  <link rel="icon" type="image/.png" href=" img\A1\H (2).png">
</head>
<body>

  <!-- header start -->
  <header class="header">
     <div class="container">
        <div class="header-main">
        <div class="MERGSCHOOL">
             <a href="http://localhost/Webcreat/student_page.php">HTMLCOURSE</a>
             <p style="margin-left:65px; color:white; margin-top:-7px; font-size:14px; font-weight:bold;">การสร้างเว็บด้วยโปรแกรม Microsoft Visual Studio Code</p>
           </div>
           <div class="open-nav-menu">
              <span></span>
           </div>
           <div class="menu-overlay">
           </div>
           <!-- navigation menu start -->
           <nav class="nav-menu">
             <div class="close-nav-menu">
                <img src="img\A1\ดีไซน์ที่ไม่มีชื่อ (12).png" alt="close" width="50" height="50">
             </div>
             <ul class="menu">
              <li class="menu-item">
                <a href="#">หน้าแรก</a>
                <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">หน่วยการเรียนรู้ <i class="plus"></i></a>
                        <ul class="sub-menu">
                        <li class="menu-item"><a href="Unit_1.html">หน่วยที่ 1 ความรู้เบื้อต้นเกี่ยวกับภาษา HTML และ CSS</a></li>
                        <li class="menu-item"><a href="Unit_2.html"> หน่วยที่ 2 เริ่มต้นเขียนเว็บไซต์ด้วยภาษา HTML และ  ภาษาCSS</a></li>
                        <li class="menu-item"><a href="Unit_3.html"> หน่วยที่ 3 การใช้แท็กของภาษา HTML ในการสร้างเว็บไซต์</a></li>              
                        <li class="menu-item"><a href="Unit_4.html"> หน่วยที่ 4 การตกแต่งเว็บไซต์ด้วย CSS3</a></li>
                        <li class="menu-item"><a href="Unit_5.html"> หน่วยที่ 5  การจัดหน้าเว็บไซต์ด้วย CSS3</a></li>        
                        <li class="menu-item"><a href="Unit_6.html"> หน่วยที่ 6 ทำให้เว็บไซต์ออนไลน์</a></li>
                   </ul>
            </li>
            <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">แบบทดสอบ <i class="plus"></i></a>
                        <ul class="sub-menu">
                             <li class="menu-item"><a href="test1.html" >แบบทดสอบหน่วยที่ 1</a></li>
                             <li class="menu-item"><a href="test2.html">แบบทดสอบหน่วยที่ 2</a></li>
                             <li class="menu-item"><a href="test3.html">แบบทดสอบหน่วยที่ 3</a></li>
                             <li class="menu-item"><a href="test4.html">แบบทดสอบหน่วยที่ 4</a></li>
                             <li class="menu-item"><a href="test5.html">แบบทดสอบหน่วยที่ 5</a></li>
                             <li class="menu-item"><a href="test6.html">แบบทดสอบหน่วยที่ 6</a></li>
                   </ul>
            </li>
                <li class="menu-item">
                   <a href="logout.php">ออกจากระบบ</a>
                </li>
             </ul>
           </nav>
      </div>
    </div>
 </header>
<section class="home-section">
</section>
<script src="script.js">
</script>

      <div class="content">
               <p style="text-align: center; font-size: 30px; font-weight: bold; margin: 0px 0px 10px -10px;">
               ยินดีต้อนรับสู่บทเรียน</p>
               <p style="text-align: center; font-size: 20px; font-weight: bold; margin: top -10px;" >สวัสดีคุณ "<?php echo $_SESSION['user']; ?>"</p>
               <br>
               <center><div class ="roro"><img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Visual_Studio_Code_1.35_icon.svg/2048px-Visual_Studio_Code_1.35_icon.svg.png" alt="" height="150" width="150" style="margin-top:-15px;"></div></center>
               <p style="text-align:center; font-weight:bold; font-size:20px;">เรื่อง การสร้างเว็บไซต์ด้วยโปรแกรม Microsoft Visual Studio Code</p>
               
               <center><img src="img\A1\820000 (3).png" width="850" height="500" style="margin-left:-30px;"></center>
       
               
               <p style="font-size: 25px; font-weight: bold;" >แนะนำเนื้อหาบทเรียน</p>
               <p><a href="Unit_1.html" style="color:black;"> หน่วยการเรียนรู้ที่ 1 ความรู้เบื้อต้นเกี่ยวกับภาษา HTML และCSS</p></a>
               <p><a href="Unit_2.html" style="color:black;">หน่วยการเรียนรู้ที่ 2 เริ่มต้นเขียนเว็บไซต์ด้วยภาษา HTML และ  ภาษาCSS</a></p>
               <p><a href="Unit_3.html" style="color:black;">หน่วยการเรียนรู้ที่ 3 การใช้แท็กของภาษา HTML ในการสร้างเว็บไซต์</a></p>
               <p><a href="Unit_4.html" style="color:black;">หน่วยการเรียนรู้ที่ 4 การตกแต่งเว็บไซต์ด้วย CSS3</a></p>
               <p><a href="Unit_5.html" style="color:black;">หน่วยการเรียนรู้ที่ 5 การจัดหน้าเว็บด้วยไซต์ CSS3</a></p>
               <p><a href="Unit_6.html" style="color:black;">หน่วยการเรียนรู้ที่ 6 ทำให้เว็บไซต์ออนไลน์</a></p>
        </p>
      <p>
   </p>

        </div>
       </div>

</body>
</html>
<?php }
?>