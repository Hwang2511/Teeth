<?php 

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/.png" href="img\A1\H (2).png">
    <title>Login Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="a.css">

</head>
<body>
    <div>
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>

        <div>
            <form action="login.php" method="post">
               <h1>HTMLCOURSE</h1>
               <h2>เข้าสู่ระบบ</h2>
               <br>
               <div class="input-control">
                     <label for="username">ชื่อผู้ใช้</label>
                     <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-control">
                     <label for="password">รหัสผ่าน</label>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <main>
                    <input type="submit" name="submit" value="เข้าสู่ระบบ" 
                    style= " background: #0081B4;
                                color:white;
                                font-weight:500;
                                text-transform: capitalize;
                                font-size: 20px;
                                cursor: pointer; 
                                border: none ">
                    <p>หากยังไม่เป็นสมาชิก คลิกที่นี่เพื่อ <a href="register.php"  style="text-decoration: none; color: #blue; font-weight:bold; text-align:center;" >สมัครสมาชิก</a></p>
                </main>    
            </form>

   

</body>
</html>

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>