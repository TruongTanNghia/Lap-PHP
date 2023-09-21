<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai_3</title>
</head>
<body>
<style>
    table{
        border: 1px solid black;
        width: 500px;
        background-color: #FFFFCC;
    }
    .header{
        font-size: 20px; 
        color: white; 
        padding: 5px; 
        font-weight: bold;
    }
    .a1, .a2{
        padding-left: 10px;
    }
    .btn{background-color: #FFFF66; width: 180px;}
    .a, .a2{background-color: #99FF33;} 
    .b, .arr{background: #99FFFF; width: 250px;}
    .nhap{width: 210px;}
    b{color: red;}

</style>
<?php
if(isset($_POST['submit'])){
    $n=$_POST['n'];
    if(isset($n) and is_numeric($n) and $n>0){
        tao_mang($n,$a);
        $xuatMang=xuat_mang($a);
        $giaTriMax=tim_max($a);
        $giaTriMin=tim_min($a);
        $Sum=tinh_tong($a);
    }
    else{
        $n="Nhập N lớn hơn 0";
    }
}
function tao_mang($n,&$a){
    for($i=0;$i<$n;$i++){
        $a[$i]=rand(0,20);
    }
    return $a;
}
function xuat_mang($a){
    $s="";
    for($i=0;$i<count($a);$i++){
        $s.=$a[$i]." ";
    }
    return $s;
}
function tim_max($a){
    $giaTriMax=$a[0];
    for($i=0;$i<count($a);$i++){
        if($a[$i] > $giaTriMax){
            $giaTriMax = $a[$i];
        }
    } 
    return $giaTriMax;
}
function tim_min($a){
    $giaTriMin=$a[0];
    for($i=0;$i<count($a);$i++){
        if($a[$i] < $giaTriMin){
            $giaTriMin = $a[$i];
        }
    } 
    return $giaTriMin;
}
function tinh_tong($a){
    $Sum=0;
    for($i=0;$i<count($a);$i++){
        $Sum+=$a[$i];
    }
    return $Sum;
}
?>
<form action="" method="post">
    <table align="center">
        <tr bgcolor="#00DD00" align="center">
            <td class="header" colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</td>
        </tr>
        <tr>
            <td class="a2">Nhập số phần tử:</td>
            <td class="a"> <input class="nhap" type="text" name="n" value="<?php if (isset($n)) echo $n?>" required></td>
        </tr>
        <tr>
            <td class="a"></td>
            <td class="a"><input class="btn" type="submit" name="submit" value="Phát sinh và tính toán"></td>
        </tr>
        <tr>
            <td class="a1" bgcolor="#33FF99" >Mảng: </td>
            <td> <input type="text" class="arr" name="arr" value="<?php if(isset($xuatMang)) echo $xuatMang; else echo ""; ?>"></td>
        </tr>
        <tr>
            <td class="a1" bgcolor="#33FF99" >GTLN (MAX) trong mảng:</td>
            <td > <input type="text" class="b" name="giaTriMax" value="<?php if (isset($giaTriMax)) echo $giaTriMax;?>"></td>
        </tr>
        <tr>
            <td class="a1" bgcolor="#33FF99">GTNN (MIN) trong mảng:</td>
            <td> <input type="text" class="b" name="giaTriMin" value="<?php if (isset($giaTriMin)) echo $giaTriMin;?>"></td>
        </tr>
        <tr>
            <td class="a1" bgcolor="#33FF99">Tổng mảng:</td>
            <td> <input type="text" class="b" name="price" value="<?php if (isset($Sum)) echo $Sum;?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">(<b>Ghi chú: </b>Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)</td>
        </tr>
    </table>
</form>
</body>
</html>