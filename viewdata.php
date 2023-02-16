<?php 
    require_once('conn.php');

    if (isset($_REQUEST['delete_id'])) {
        $id = $_REQUEST['delete_id'];

        $select_stmt = $db->prepare("SELECT * FROM user WHERE id = :id");
        $select_stmt->bindParam(':id', $id);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

        // Delete an original record from db
        $delete_stmt = $db->prepare('DELETE FROM user WHERE id = :id');
        $delete_stmt->bindParam(':id', $id);
        $delete_stmt->execute();

        header('Location:viewdata.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/.png" href="img\A1\H (2).png">
    <title>ดูข้อมูลนักเรียน</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>

    <div class="container">
    <div style="text-align:center; font-size: 40px; margin-top: 20px;">แสดงข้อมูสมาชิก(นักเรียน)</div>
    <a href="add.php" class="btn btn-success mb-3" style="margin-top: 20px">เพิ่มข้อมูล+</a>

    <a href="teacher_page.php" target="_black" style="background:white; font-weight: bold;">
    <button style="padding: 10px 14px; 
                             color:white;
                                          margin-left: 870px;           
                                          font-size: 14px;
                                          background: #579BB1; 
                                          border: none;
                                          border-radius: 5px 5px 5px 5px;">กลับไปหน้าแรก</button></a>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ชื่อผู้ใช้</th>
                <th>รหัสผ่าน</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ระดับผู้ใช้ </th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
                
            </tr>
        </thead>

        <tbody>
            <?php 
                $select_stmt = $db->prepare("SELECT * FROM user");
                $select_stmt->execute();

                while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>

                <tr>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["userlevel"]; ?></td>
                    <td><a href="edit.php?update_id=<?php echo $row["id"]; ?>" class="btn btn-warning">แก้ไขข้อมูล</a></td>
                    <td><a href="?delete_id=<?php echo $row["id"]; ?>" class="btn btn-danger">ลบข้อมูล</a></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
    </div>
 <p style="margin-left:80px; font-weight:bold;">ระดับผู้ใช้ 
                                            <p style="margin-left:80px; margin-top:-10px;">    
                                                 t (Teacher) = ผู้สอนหรือแอดมิน
                                                <br>
                                                 m (Member) = สามาชิกหรือนักเรียนนักศึกษา</p>
                <br>
                <br>

    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>