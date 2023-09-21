<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KẾT QUẢ PHÉP TÍNH HAI SỐ</title>
    <link rel="stylesheet" href="Bai6.css">
</head>

<body>
    <?php
    $So1 = $_POST['So1'];
    $So2 = $_POST['So2'];
    $pt = $_POST['pheptinh'];
    if (isset($_POST['tinh'])) {
        if (is_numeric($So1) && is_numeric($So2)) {
            pheptinh($pt, $So1, $So2);
        } else {
            echo "<font color='red'>Vui lòng nhập vào số! </font>";
            echo '<a href="javascript:window.history.back(-1);">Trở về trang trước</a>';
           
        }
    }
    function pheptinh($pt, $So1, $So2)
    {
        if ($pt == 'Cộng') {
            echo $kq = $So1 + $So2;
        } elseif ($pt == 'Trừ') {
            echo $kq = $So1 - $So2;
        } elseif ($pt == 'Nhân') {
            echo $kq = $So1 * $So2;
        } elseif ($pt == 'Chia') {
            if ($So2 != 0) {
                echo $kq = $So1 / $So2;
            } else {
                echo 'Không thể chia cho 0';
            }
        }
    }

    ?>
    <div class="form">
        <div class="container">
            <form class="signup" action="" method="post">
                <div class="header">
                    <h3 align="center">PHÉP TÍNH HAI SỐ</h3>
                </div>
                <div class="text">
                    <label for="chon">Chọn phép tính: <?php echo $pt ?> </label>
                </div>
                <div class="inputs">
                    <table align="center">
                        <tr>
                            <td align="left">Số 1:</td>
                            <td><input type="text" name="So1" value="<?php echo $So1 ?>" /></td>
                        </tr>
                        <tr>
                            <td align="left">Số 2:</td>
                            <td><input type="text" name="So2" value="<?php echo $So2 ?>" /></td>
                        </tr>
                        <tr>
                            <td align="left">Kết quả:</td>
                            <td><input type="text" name="pheptinh" value="<?php pheptinh($pt, $So1, $So2) ?>" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
                        </tr>
                    </table>
                </div>

            </form>
        </div>
    </div>

</body>

</html>