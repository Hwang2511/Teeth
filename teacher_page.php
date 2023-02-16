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
  <link rel="icon" type="image/.png" href="img\A1\H (2).png">
</head>
<body>

  <!-- header start -->
  <header class="header">
     <div class="container">
        <div class="header-main">
           <div class="MERGSCHOOL">
              <a href="#">HTMLCOURSE</a>
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
                <img src="https://i.ibb.co/h8RKhyF/SM.png" alt="close">
             </div>
             <ul class="menu">
              <li class="menu-item">
                <a href="#">หน้าแรก</a>
                <li class="menu-item">
                <a href="viewdata.php">ดูข้อมูลนักเรียน</a>
                <li class="menu-item">
                <a href="testdit.html">จัดการแบบทดสอบ</a>
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
         <p style="font-size:25px; text-align:center; font-weight:bold;">เรื่อง การสร้างเว็บไซต์ด้วยโปรแกรม Microsoft Visual Studio Code</p>
         <br>
      <p style="text-align: center; font-size: 18px; font-weight: bold; margin-top:-4px;" >สวัสดีคุณ : <?php echo $_SESSION['user']; ?></p> 
      <p style="text-align: center; font-size: 18px; font-weight: bold;">คุณสามารถดูข้อมูลผู้ใช้งานเว็บไซต์ได้ที่หน้าเพจนี้  
      </p>
      <br>
               <center> 
               <a href="testdit.html" target="_black" style="font-weight: bold;">
               <button style="padding: 20px 14px; 
                                          font-size: 14px;
                                          color:white;
                                          background: #3A4F7A; 
                                          box-shadow: 5px 8px 8px rgba(0,0,0,0.2);
                                          border: none;
                                          border-radius: 5px 5px 5px 5px;">
                    จัดการแบบทดสอบ</button></a>

                <a href="viewdata.php" target="_black" style="font-weight: bold;">
                <button style="padding: 20px 30px 20px 30px; 
                                          margin-left:30px;
                                          color:white;
                                          font-size: 14px;
                                          background: #3A4F7A; 
                                          box-shadow: 5px 8px 8px rgba(0,0,0,0.2);
                                          border: none;
                                          border-radius: 5px 5px 5px 5px;">ดูข้อมูลนักเรียน</button></a>
                </center>
      <center><img src="img\A1\820000 (3).png" width="850" height="500" style="margin-left:-30px;"></center>
      </div>
        </div>
   



</body>
</html>
<?php } ?>