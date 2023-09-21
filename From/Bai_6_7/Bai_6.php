<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHÉP TÍNH HAI SỐ</title>
    <link rel="stylesheet" href="Bai6.css">
</head>

<body>

    <?php
    if (isset($_POST['So1']))
        $So1 = trim($_POST['So1']);
    if (isset($_POST['So2']))
        $So2 = trim($_POST['So2']);

    
    ?>
    <div class="form">
        <div class="container">
            <form class="signup" action="./Bai_6_kq.php" method="post">
                <div class="header">
                    <h3 align="center">PHÉP TÍNH HAI SỐ</h3>
                </div>
                <div class="text">
                    <label for="chon">Chọn phép tính: </label>
                    <input type="radio" name="pheptinh" value="Cộng">Cộng </input>
                    <input type="radio" name="pheptinh" value="Trừ">Trừ</input>
                    <input type="radio" name="pheptinh" value="Nhân">Nhân</input>
                    <input type="radio" name="pheptinh" value="Chia">Chia</input>
                </div>
                <div class="inputs">
                    <table align="center">
                        <tr>
                            <td align="left">Số thứ nhất:</td>
                            <td><input type="text" name="So1" placeholder="" required=""></td>
                        </tr>
                        <tr>
                            <td align="left">Số thứ nhì:</td>
                            <td><input type="text" name="So2" placeholder="" required=""></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
                        </tr>
                    </table>
                </div>

            </form>
        </div>
    </div>
</body>

</html>