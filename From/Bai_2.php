<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tính Chu vi Và Diện tích</title>
</head>
<body>

<?php
define('PI',3.14);
if (isset($_POST['submit'])){  /* kiem tra xem da nhan hay chưa */
    $banKinh=$_POST['banKinh'];; /* khi nhan vào thì xem như đã nhập PI */
    if (isset($banKinh) and is_numeric($banKinh) and $banKinh>0){
        $dienTich=round(PI*$banKinh*$banKinh,1);
        $chuVi=round(2*PI*$banKinh,1);
    }else{
        $banKinh="Khong duoc de trong";
    }
}

if (isset($_POST['reset'])){
    $dienTich="";
    $chuVi="";
    $banKinh="";
}
?>

<form action="" method="post">
    <table align="center" bgcolor="#00FFFF">
        <tr>
            <td colspan="2" bgcolor="Aqua"><h1><font color="fuchsia"> Tính Chu vi Và Diện tích</h1></td>
        </tr>
        
        <tr>
            <td><font color="fuchsia"> Bán Kính</td>
            <td> <input type="text" name="banKinh" style="background-color: lightblack; width: 230px"
            value="<?php if (isset($banKinh)) echo $banKinh;?>"></td>
        </tr>

        <tr>
            <td><font color="fuchsia"> Diện tích</td>
            <td> <input type="text" name="dientich" style="background-color: lightblack; width: 230px" readonly
                        value="<?php if (isset($dienTich)) echo $dienTich; else echo "";?>">
            </td>
        </tr>

        <tr>
            <td><font color="fuchsia"> Chu vi</td>
            <td> <input type="text" name="chuvi" style="background-color: lightblack; width: 230px" readonly
                        value="<?php if (isset($chuVi)) echo $chuVi;echo "";?>" >
            </td>
        </tr>

        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="submit" value="Tính">
                <input type="submit" name="reset" value="Clear">
            </td>
        </tr>

    </table>
</form>
</body>
</html>