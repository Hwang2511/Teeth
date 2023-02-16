<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
       

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password '";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 't') {
                header("Location: teacher_page.php");
            }

            if ($_SESSION['userlevel'] == 'm') {
                header("Location: student_page.php");
            }
        } else {
            $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
            header("Location: index.php");
        }

    } else {
        header("Location: index.php");
    }


?>