<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÔNG TIN ĐÃ ĐƯỢC XỬ LÝ</title>
</head>

<body>
    <?php
    $name = $_POST['name'];
    $address =  $_POST['address'];
    $telephone = $_POST['telephone'];
    $gender =  $_POST['gender'];
    $nationality = $_POST['nationality'];
    $note =  $_POST['note'];
    ?>
    <div class="form-tt">
        <h2>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn nhập:</h2>
            <form action="./config.php" method="post">
                <div class="container">
                    <table>
                        <tr>
                            <td align="left">Họ tên:</td>
                            <td><?php echo $name ?></td>
                        </tr>
                        <tr>
                            <td align="left">Địa chỉ:</td>
                            <td><?php echo $address ?></td>
                        </tr>
                        <tr>
                            <td align="left">Số điện thoại:</td>
                            <td><?php echo $telephone ?></td>
                        </tr>
                        <tr>
                            <td align="left">Giới tính:</td>
                            <td><?php echo $gender ?></td>
                        </tr>
                        <tr>
                            <td align="left">Quốc tịch:</td>
                            <td><?php echo $nationality ?></td>
                        </tr>
                        <tr>
                            <td align="left">Các môn đã học:</td>
                            <td><?php
                                if (isset($_POST['sub1'])) echo  $_POST['sub1']. "," ;
                                if (isset($_POST['sub2'])) echo  $_POST['sub2'] . ",";
                                if (isset($_POST['sub3'])) echo  $_POST['sub3'] . ",";
                                if (isset($_POST['sub4'])) echo  $_POST['sub4'] ;


                                ?></td>
                        </tr>
                        <tr>
                            <td align="left">Ghi chú:</td>
                            <td><?php echo $note ?></td>
                        </tr>
                    </table>
                </div>
            </form>
            <div><a href="javascript:window.history.back(-1);">Trở về trang trước</a></div>
    </div>
</body>

</html>