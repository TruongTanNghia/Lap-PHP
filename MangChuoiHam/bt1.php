<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_1</title>
</head>
<style>
    table{background-color; 99FFFF width: 450px;}
    td{padding-left: 10px;}
    .header{
        font-size: 20px; 
        color: red ; 
        padding: 5px; 
        font-weight: bold;
    }
    .n, .a{width: 92px;}
    .btn{width: 100px; background-color: lightyellow;}
    .mang, .b{width: 250px;}
</style>
<body>
    
<?php
if(isset($_POST['submit'])){
    $n=$_POST['n'];
    if(isset($n) and is_numeric($n) and $n>0){
        tao_Mang($n,$a);
        $inmang=in_mang($a);
        $demsochan=dem_chan($a);
        $demsonho=dem_nho($a);
        $tong=tong_am($a);
        $vitri=vi_tri_0($a);
        sap_xep($a);
        $sapXep=in_mang($a);
    }
    else{
        $n="Nhập n lớn hơn 0";
    }
}
function tao_Mang($n,&$a){
    for($i=0;$i<$n;$i++){
        $a[$i]=rand(-200,200);
    }
    return $a;
}
function in_mang($a){
    $mang="";
    for($i=0;$i<count($a);$i++){
        $mang .= $a[$i]." ";
    }
    return $mang;
}
function dem_chan($a){
    $dem=0;
    for($i=0;$i<count($a);$i++){
        if($a[$i]%2==0){
            $dem++;
        }
    }
    return $dem;
}
function dem_nho($a){
    $dem=0;
    for($i=0;$i<count($a);$i++){
        if($a[$i]<100){
            $dem++;
        }
    }
    return $dem;
}
function tong_am($a){
    $tong=0;
    for($i=0;$i<count($a);$i++){
        if($a[$i]<0){
            $tong+=$a[$i];
        }
    }
    return $tong;
}
function vi_tri_0($a){
    $vitri="";
    for($i=0;$i<count($a);$i++){
        if($a[$i]==0){
            $s=$i+1;
            $vitri.=$s." ";
        }
    }
    return $vitri;
}
function sap_xep(&$a){
    for($i=0;$i<count($a)-1;$i++){
        for($j=$i+1;$j<count($a);$j++){
            if($a[$i]>$a[$j]){
                $tg = $a[$i];
                $a[$i] = $a[$j];
                $a[$j] = $tg;        
            }
        }
    }
    return $a;
}
?>

<form action="" method="POST">
    <table align="center" bgcolor="99FFFF">
        <tr align="center" bgcolor="#99FF33">
            <td colspan="2" class="header">BÀI TẬP 1</td>
        </tr>
        <tr >
            <td bgcolor = "Silver">Nhập n: </td>
            <td>
                <input class="n" type="text" name="n" value="<?php if(isset($n)) echo $n;?>" required>
            </td>
        </tr>
        <tr>
            <td bgcolor = "Silver"></td>
            <td><input class="btn" type="submit" name="submit" value="Thực hiện"></td>
        </tr>
        <tr>
            <td bgcolor = "Silver">Mảng phát sinh:</td>
            <td><input class="mang" type="text" value="<?php if(isset($inmang)) echo $inmang; ?>" readonly></td>
        </tr>
        <tr>
            <td bgcolor = "Silver">Số phần Tử Chẵn:</td>
            <td><input class="a" type="text" value="<?php if(isset($demsochan)) echo $demsochan; ?>" readonly></td>
        </tr>
        <tr>
            <td bgcolor = "Silver">Số Phần Tử < 100:</td>
            <td><input class="a" type="text" value="<?php if(isset($demsonho)) echo $demsonho; ?>" readonly></td>
        </tr>
        <tr>
            <td bgcolor = "Silver">Tổng Phần Tử Âm:</td>
            <td><input class="a" type="text" value="<?php if(isset($tong)) echo $tong; ?>" readonly></td>
        </tr>
        <tr>
            <td bgcolor = "Silver">Vị Trí Phần Tử = 0:</td>
            <td><input class="b" type="text" value="<?php if(isset($vitri)) echo $vitri; ?>" readonly></td>
        </tr>
        <tr>
            <td bgcolor = "Silver">Mảng Tăng Dần:</td>
            <td><input class="mang" type="text" value="<?php if(isset($sapXep)) echo $sapXep; ?>" readonly></td>
        </tr>
    </table>
</form>
</body>
</html>