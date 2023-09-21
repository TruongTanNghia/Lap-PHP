<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_4</title>
</head>
<style>
    td{padding-left: 10px;}
    .arr, .kq{width: 250px;}
    .kq{width: 250px; background-color: #cdfbfc; color: red; font-weight: bold;}
    .n{width: 72px;}
    .header{
        font-size: 20px; 
        color: white; 
        padding: 5px; 
        font-weight: bold;
    }
    table{background-color: #d1ded4; width: 450px;}
    .btn{background-color: #95ccfa; width: 80px;}
</style>
<body>
<?php
if(isset($_POST["find"])){
    if(isset( $_POST['arr'])){
        $s = $_POST['arr'];
        tachChuoi($s,$a);
        $n=$_POST['n'];
        if(isset($n) and is_numeric($n)){
            $kq=timKiem($a,$n);
            if($kq>0){
                $in_kq="Tìm thấy $n tại vị trí thứ $kq của mảng";
            }
            else{$in_kq="Không tìm thấy $n trong mảng";}
            $mang=Xuat($a);
        }
        else
            $n="Vui lòng nhập số!";
    }
}
function tachChuoi($s,&$a){
    $a=explode(",",$s);
}
function Xuat($a){
    $mang="";
    for($i=0;$i<count($a)-1;$i++){
        $mang.="$a[$i], ";
    }
    $mang.=$a[count($a)-1];
    return $mang;
}
function timKiem($a,$n){
    $x=0;
    for($i=0;$i<count($a);$i++){
        if($a[$i] == $n){
            $x+=$i+1;
        }
    }
    return $x;
}
?>
<form action="" method="post">
    <table align="center">
        <tr bgcolor="#39959e">
            <td class="header" colspan="2" align="center">TÌM KIẾM</td>
        </tr>
        <tr>
            <td>Nhập mảng:</td>
            <td><input type="text" class="arr" name="arr" value="<?php if(isset($s)) echo $s; ?>" required></td>
        </tr>
        <tr>
            <td>Nhập số cần tìm:</td>
            <td><input type="text" class="n" name="n" value="<?php if(isset($n)) echo $n;?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn" name="find" value="Tìm kiếm"></td>
        </tr>
        <tr>
            <td>Mảng:</td>
            <td><input type="text" class="arr" name="arr_kq" value="<?php if(isset($mang)) echo $mang; ?>"></td>
        </tr>
        <tr>
            <td>Kết quả tìm kiếm:</td>
            <td><input type="text" class="kq" name="kq" value="<?php if(isset($in_kq)) echo $in_kq; ?>"></td>
        </tr>
        <tr bgcolor="#75d0d2">
            <td colspan="2" align="center">(Các phần tử trong mảng sẽ cách nhau bằng dấu *,*)</td>
        </tr>
    </table>
</form>
</body>
</html>