<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_5</title>
</head>
<style>
    .header{
        font-size: 20px; 
        color: white; 
        padding: 5px; 
        font-weight: bold;
    }
    table{width: 500px; background-color: #fff5ff;}
    .a1, .b2{padding-left: 10px;}
    .a, .b2{background-color: #fedaf4;}
    .btn{background-color: #fffea9;}
    .a1{width: 250px;}
    .b{background-color: #fba9a9;width: 250px;}
    b{color: red;}
</style>
<body>
<?php
if(isset($_POST["submit"])){
    if(isset( $_POST['arr'])){
        $s = $_POST['arr'];
        tachChuoi($s,$a);
        if(isset($_POST['x'])){
            $x=$_POST['x'];
            if(isset($_POST['y'])){
                $y=$_POST['y'];
                $mangcu=Xuat($a);
                thayThe($a,$x,$y);
                $mangmoi=Xuat($a);
            }
        }
    }
}
function tachChuoi($s,&$a){
    $a=explode(",",$s);
}
function Xuat($a){
    $mang="";
    for($i=0;$i<count($a)-1;$i++){
        $mang.="$a[$i] ";
    }
    $mang.=$a[count($a)-1];
    return $mang;
}
function thayThe(&$a,$x,$y){
    for($i=0;$i<count($a);$i++){
        if($a[$i] == $x){
            $a[$i] = $y;
        }
    }
    return $a;
}
?> 
<form action="" method="post">
    <table align="center"  style="width: 500px;" bgcolor="#fff5ff">
        <tr bgcolor="#a10971">
            <td class="header" colspan="2" align="center">THAY THẾ</td>
        </tr>
        <tr>
            <td class="b2">Nhập các phần tử:</td>
            <td class="a"><input type="text" class="a1" name="arr" value="<?php if(isset($s)) echo $s; ?>" required></td>
        </tr>
        <tr>
            <td class="b2">Giá trị cần thay thế:</td>
            <td class="a"><input type="text" name="x" value="<?php if(isset($x)) echo $x;?>" required></td>
        </tr>
        <tr>
            <td class="b2">Giá trị thay thế:</td>
            <td class="a"><input type="text" name="y" value="<?php if(isset($y)) echo $y;?>" required></td>
        </tr>
        <tr>
            <td class="a"></td>
            <td class="a"><input class="btn" type="submit" name="submit" value="Thay thế"></td>
        </tr>
        <tr>
            <td class="a1">Mảng cũ:</td>
            <td><input type="text" class="b" name="old" value="<?php if(isset($mangcu)) echo $mangcu; ?>"></td>
        </tr>
        <tr>
            <td class="a1">Mãng sau khi thay thế:</td>
            <td><input type="text" class="b" name="new" value="<?php if(isset($mangmoi)) echo $mangmoi; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">(<b>Ghi chú: </b>Các phần tử trong mảng sẽ cách nhau bằng dấu *,*)</td>
        </tr>
    </table>
</form>
</body>
</html>