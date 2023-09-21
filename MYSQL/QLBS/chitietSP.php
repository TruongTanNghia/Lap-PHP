
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
</head>
<style>

</style>
<body>
    <form action="">
    <?php
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="qlbs";
    $conn = mysqli_connect($severname, $username, $password, $dbname);
    if(!isset($_GET['id'])){
        header("Location:../Bai2/2_7.php");
    }
    $id = $_GET['id'];
    $query = "SELECT a.Ten_sua,b.Ten_hang_sua,a.TP_Dinh_Duong,a.Loi_ich,a.Trong_luong,a.Don_gia,a.Hinh FROM sua a JOIN hang_sua b ON a.Ma_hang_sua = b.Ma_hang_sua where Ma_sua = '$id'";
    $result = mysqli_query($conn,$query);
    $row=mysqli_fetch_row($result);
?>
        <table border="1" align='center'>
            <tr bgcolor='#ffeee6' class="header">
                <td colspan="2"><?php echo "$row[0] - $row[1]" ?></td>
            </tr>
            <tr>
                <td><img src="<?php echo "Hinh_sua/$row[6]" ?>" alt=""></td>
                <td>
                    <ul>
                        <li><b><i>Thành phần dinh dưỡng:</i></b></li>
                        <li><?php echo $row[2] ?></li>
                        <li class="a"><b><i>Thành phần dinh dưỡng:</i></b></li>
                        <li><?php echo $row[3] ?></li>
                        <li class="b"><?php echo "<b><i>Trọng lượng: </i></b>$row[4] gr - <b><i>Đơn giá: </i></b>$row[5] VNĐ" ?></li>
                    </ul>
                </td>
            </tr>
            <tr>
            <td align="end"><a style='color: purple;' href='javascript:window.history.back(-1);'>Quay về</a></td>
                <td></td>
            </tr>
            <?php

            ?>
        </table>
    </form>
</body>
</html>