<?php 
    require_once('conn.php');

    if (isset($_REQUEST['update_id'])) {
        try {
            $id = $_REQUEST['update_id'];
            $select_stmt = $db->prepare("SELECT * FROM user WHERE id = :id");
            $select_stmt->bindParam(':id', $id);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }

    if (isset($_REQUEST['btn_update'])) {
        $firstname_up = $_REQUEST['txt_firstname'];
        $lastname_up = $_REQUEST['txt_lastname'];
        $username_up = $_REQUEST['txt_username'];
        $password_up = $_REQUEST['txt_password'];
        $userlevel_up = $_REQUEST['txt_userlevel'];

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
                    $update_stmt = $db->prepare("UPDATE user SET firstname = :fname_up, lastname = :lname_up, username = :uname_up, 
                                                                                                    password =:pass_up , userlevel = :ulevel_up WHERE id = :id");
                    $update_stmt->bindParam(':fname_up', $firstname_up);
                    $update_stmt->bindParam(':lname_up', $lastname_up);
                    $update_stmt->bindParam(':uname_up', $username_up);
                    $update_stmt->bindParam(':pass_up', $password_up);
                    $update_stmt->bindParam(':ulevel_up', $userlevel_up);
                    $update_stmt->bindParam(':id', $id);

                    if ($update_stmt->execute()) {
                        $updateMsg = "แก้ไขข้อมูลเรียบร้อย";
                        header("refresh:2;viewdata.php");
                    }
                }
            } catch(PDOException $e) {
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
    <title>แก้ไขข้อมูล</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>

    <div class="container">
        <br>
    <div style="text-align:center; font-size: 40px; margin-top: 20px;">แก้ไขข้อมูล</div>

    <?php 
         if (isset($errorMsg)) {
    ?>
        <div class="alert alert-danger">
            <strong>Wrong! <?php echo $errorMsg; ?></strong>
        </div>
    <?php } ?>
    

    <?php 
         if (isset($updateMsg)) {
    ?>
        <div class="alert alert-success">
            <strong> <?php echo $updateMsg; ?></strong>
        </div>
    <?php } ?>

    <form method="post" class="form-horizontal mt-5">
            
            <div class="form-group text-center">
                <div class="row">
                    <label for="firstname" class="col-sm-3 control-label">ชื่อจริง</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_firstname" class="form-control" value="<?php echo $firstname; ?>">
                    </div>
                </div>
            </div>


            <div class="form-group text-center">
                <div class="row">
                    <label for="lastname" class="col-sm-3 control-label">นามสกุล</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_lastname" class="form-control" value="<?php echo $lastname; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <div class="row">
                    <label for="username" class="col-sm-3 control-label">ชื่อผู้ใช้</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_username" class="form-control" value="<?php echo $username; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <div class="row">
                    <label for="password" class="col-sm-3 control-label">รหัสผ่าน</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_password" class="form-control" value="<?php echo $password; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <div class="row">
                    <label for="userlevel" class="col-sm-3 control-label">ระดับผู้ใช้ <br> t = สมาชิก <br> m = แอดมิน</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_userlevel"  style="margin-top:15px;" class="form-control" value="<?php echo $userlevel; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group text-center">
                <div class="col-md-12 mt-3">
                    <input type="submit" name="btn_update" class="btn btn-success" value="แก้ไข">
                    <a href="viewdata.php" class="btn btn-danger">ยกเลิก</a>
                </div>
            </div>


    </form>

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>