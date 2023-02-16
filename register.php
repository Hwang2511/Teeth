<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $password = ($password);

            $query = "INSERT INTO user (username, password, firstname, lastname, userlevel)
                        VALUE ('$username', '$password', '$firstname', '$lastname', 'm')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "สมัครสมาชิกสำเร็จ";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = ",ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
                header("Location: index.php");
            }
        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/.png" href="img\A1\H (2).png">
    <title>Register Page</title>

    <!-- CSS -->
    <link rel="stylesheet" href="a.css">

</head>
<body>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>สมัครสมาชิก</h1>
        <div class="input-control">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" name="username" placeholder="กรุณาใส่ชื่อผู้ใช้ของคุณ" required>
        </div>
        <div class="input-control">
                <label for="password">รหัสผ่าน</label>
                <input type="password" name="password" placeholder="กรุณาใส่รหัสผ่านของคุณ" required>
        </div>
        <div class="input-control">
                <label for="firstname">ชื่อจริง</label>
                <input type="text" name="firstname" placeholder="กรุณาใส่ชื่อจริงของคุณ" required>
        </div>
        <div class="input-control">
                <label for="lastname">นามสกุล</label>
                <input type="text" name="lastname" placeholder="กรุณาใส่นามสกุลของคุณ" required>
        </div>
        <input type="submit" name="submit" value="สมัครสมาชิก"
                      style= "  background: #0081B4;
                                color:white;
                                text-transform: capitalize;
                                font-size: 20px;
                                cursor: pointer; 
                                border: none ">
        <p>หากสมัครสมาชิกเรียบร้อยแล้ว <a href="index.php" style="text-decoration: none; color: #blue; font-weight:bold;">กลับไปที่หน้าแรก </a></p>
    </form>

    

</body>
</html>