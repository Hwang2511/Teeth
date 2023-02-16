<?php 
    require_once('conn.php');

    if (isset($_REQUEST['btn_insert'])) {
        $firstname = $_REQUEST['txt_firstname'];
        $lastname = $_REQUEST['txt_lastname'];
        $username = $_REQUEST['txt_username'];
        $password = $_REQUEST['txt_password'];
        $userlevel = $_REQUEST['txt_userlevel'];
    
        if (empty($firstname)) {
            $errorMsg = "กรุณากรอกชื่อจริง";
        }if (empty($lastname)) {
            $errorMsg = "กรุณากรอกนามสกุล";
        }if (empty($password)) {
            $errorMsg = "กรุณากรอกรหัสผ่าน";
        }if (empty($username)) {
            $errorMsg = "กรุณากรอกชื่อผู้ใช้";
        } else if (empty($userlevel)) {
            $errorMsg = "กรุณากรอกระดับของผู้ใช้";
        } else {
            try {
                if (!isset($errorMsg)) {
                    $insert_stmt = $db->prepare("INSERT INTO user(firstname, lastname,username,password,userlevel) VALUES (:fname, :lname ,:uname ,:pass ,:ulevel)");
                    $insert_stmt->bindParam(':fname', $firstname);
                    $insert_stmt->bindParam(':lname', $lastname);
                    $insert_stmt->bindParam(':uname', $username);
                    $insert_stmt->bindParam(':pass', $password);
                    $insert_stmt->bindParam(':ulevel', $userlevel);

                    if ($insert_stmt->execute()) {
                        $insertMsg = "เพิ่มข้อมูลสำเร็จ";
                        header("refresh:2;viewdata.php");
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/.png" href="img\A1\H (2).png">
    <title>เพิ่มข้อมูล</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>

    <div class="container">
        <br>
    <div style="text-align:center; font-size: 40px; margin-top: 20px;">เพิ่มข้อมูล</div>

    <?php 
         if (isset($errorMsg)) {
    ?>
        <div class="alert alert-danger">
            <strong>Wrong! <?php echo $errorMsg; ?></strong>
        </div>
    <?php } ?>
    

    <?php 
         if (isset($insertMsg)) {
    ?>
        <div class="alert alert-success">
            <strong><?php echo $insertMsg; ?></strong>
        </div>
    <?php } ?>

    <form method="post" class="form-horizontal mt-5">
            
    <div class="form-group text-center">
                <div class="row">
                    <label for="username" class="col-sm-3 control-label">ชื่อผู้ใช้</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_username" class="form-control" placeholder="กรุณาระบุชื่อผู้ใช้">
                    </div>
                </div>
            </div>
            
            <div class="form-group text-center">
                <div class="row">
                    <label for="password" class="col-sm-3 control-label">รหัสผ่าน</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_password" class="form-control" placeholder="กรุณาระบุรหัสผ่าน">
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <div class="row">
                    <label for="firstname" class="col-sm-3 control-label">ชื่อจริง</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_firstname" class="form-control" placeholder="กรุณาระบุชื่อจริง.">
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">นามสกุล</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_lastname" class="form-control" placeholder="กรุณาระบุนามสกุล">
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <div class="row">
                    <label for="userlevel" class="col-sm-3 control-label">ระดับผู้ใช้ <br> t = สมาชิก <br> m = แอดมิน</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_userlevel" class="form-control" style="margin-top:15px;" placeholder="กรุณาระบุระดับผู้ใช้งาน">
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <div class="col-md-12 mt-3">
                    <input type="submit" name="btn_insert" class="btn btn-success" value="เพิ่มข้อมูล">
                    <a href="viewdata.php" class="btn btn-danger">ยกเลิก</a>
                </div>
            </div>

    </form>
    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>