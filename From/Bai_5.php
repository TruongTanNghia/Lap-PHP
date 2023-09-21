<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaoke</title>
</head>
<body>
<?php
   if(isset($_POST['submit'])){
    $batDau = $_POST['GioBatDau'];
    $ketThuc = $_POST['GioKetThuc'];
    if($batDau <10 || $ketThuc>24 ) $t="Khung giờ nghỉ";
    else 
        if($batDau >= $ketThuc) $t="giờ bắt đầu phải < giờ kết thúc";
        else{
            if ($batDau<17) 
                if ($ketThuc<17) $t=($ketThuc-$batDau)*20000;
                else        $t=(17-$batDau)*20000 + ($ketThuc-17)*45000;
            else            $t=($ketThuc-$batDau)*45000;
            }  
   }
   
?>
    <form action="" method="post">
        <table bgcolor="#00FFCC" align="center" >
            <tr >
                <td colspan="6" bgcolor="#66FF66" align="center" >
                    <h2>Tính tiền KARAOKE</h2>
                </td>
            </tr>
            <tr>
                <td>
                    Giờ bắt đầu
                </td>
                <td>
                    <input type="text" name="GioBatDau" size="35" 
                    value="<?php if(isset($batDau)) echo $batDau; ?> ">
                </td>
                <td>
                    (h)
                </td>
            </tr>
            <tr>
                <td>
                    Giờ kết thúc
                </td>
                <td>
                    <input type="text" name="GioKetThuc" size="35" 
                    value="<?php if(isset($ketThuc)) echo abs($ketThuc); ?> ">
                </td>
                <td>
                    (h)
                </td>
            </tr>
            <tr>
                <td>
                    Tiền thanh toán
                </td>
                <td>
                <input type="text" name="t" size="35"  disabled value="<?php if(isset($t)) echo $t;?>">
                </td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" name="submit" value="Tính tiền">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>