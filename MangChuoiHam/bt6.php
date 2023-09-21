<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_6</title>
</head>
<style>
    table{
        background-color: #d1ded4;
        width: 410px;
    }
    b{color: red;}
    .header{
        font-size: 20px; 
        color: white; 
        padding: 5px; 
        font-weight: bold;
    }
    .btn{width: 150px;}
    .a, .a1{background-color: #cce6e3;}
    .a, .a2{padding-left: 10px; width: 130px;}
    .b{background-color: #cbfbfd;}
    .b, .b1{width: 220px;}
</style>
<body>
<?php
if(isset($_POST["sapxep"])){
    if(isset( $_POST['arr'])){
        $s = $_POST['arr'];
        tachChuoi($s,$a);
        $n=count($a);
        TangDan($a,$n);
        $mangtang=xuatMang($a);
        GiamDan($a,$n);
        $manggiam=xuatMang($a);
    }
}
function tachChuoi($s,&$a){
    $a=explode(",",$s);
}
function xuatMang($a){
    $mang="";
    for($i=0;$i<count($a)-1;$i++){
        $mang.="$a[$i], ";
    }
    $mang.=$a[count($a)-1];
    return $mang;
}
function TangDan(&$a,$n){
    for($i=0;$i<$n-1;$i++){
        for($j=$i+1;$j<$n;$j++){
            if($a[$i]>$a[$j]){
                $tg = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $tg;        
            }
        }
    }
    return $a;
}
function GiamDan(&$a,$n){
    for($i=0;$i<$n-1;$i++){
        for($j=$i+1;$j<$n;$j++){
            if($a[$i]<$a[$j]){
                $tg = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $tg;        
            }
        }
    }
    return $a;
}
?>
<form action="" method="post">
    <table align="center">
        <tr bgcolor="#2f9b97">
            <td class="header" colspan="2" align="center">SẮP XẾP MẢNG</td>
        </tr>
        <tr>
            <td class="a2">Nhập mảng:</td>
            <td><input type="text" class="b1" name="arr" value="<?php if(isset($s)) echo $s; ?>" required><b> (*)</b></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn" name="sapxep" value="Sắp xếp tăng/giảm"></td>
        </tr>
        <tr>
            <td class="a"><b>Sau khi sắp xếp:</b></td>
            <td class="a1"></td>
        </tr>
        <tr>
            <td class="a">Tăng dần:</td>
            <td class="a1"><input type="text" class="b" name="tang" value="<?php if(isset($mangtang)) echo $mangtang; ?>"></td>
        </tr>
        <tr>
            <td class="a">Giảm dần:</td>
            <td class="a1"><input type="text" class="b" name="giam" value="<?php if(isset($manggiam)) echo $manggiam; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><b>(*)</b> Các số được nhập cách nhau bằng dấu *,*</td>
        </tr>
    </table>
</form>
</body>
</html>