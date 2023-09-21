<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_7</title>
</head>
<style>
    table{background-color: #b9eeff; width: 400px;}
    .header{
        font-size: 20px; 
        color: white; 
        padding: 5px; 
        font-weight: bold;
    }
    .a, .a2{width: 100px;}
    .a1, .a2{background-color: #faffd7;}
</style>
<body>
<?php
if(isset($_POST['submit'])){
    $year=$_POST['year'];
    if(isset($year) and is_numeric($year) and $year > 0){
        $can=tinh_can($year);
        $chi=tinh_chi($year);
        $am_lich=$can." ".$chi;
        $link=img($year);
    }
    else{
        $error="Năm dương lịch phải là số và lớn hơn 0!";
    }


}
function img($year){
    $a=array(  
    "img/than.jpg",
    "img/dau.jpg",
    "img/tuat.jpg",
    "img/hoi.jpg",
    "img/chuot.jpg",
    "img/suu.jpg",
    "img/dan.jpg",
    "img/meo.jpg" ,
    "img/thin.jpg",
    "img/ty.jpg",
    "img/ngo.jpg",
    "img/mui.jpg");
    for($i=0;$i<count($a);$i++){
        if($year%12==$i){
            return $a[$i];
        }
    }
}
function tinh_can($year){
    $a=array("Canh","Tân","Nhâm","Quý","Giáp","Ất","Bính","Đinh","Mậu","Kỷ");
    foreach($a as $y=> $can){
        if($year%10==$y){
            return $can;
        }
    }
}
function tinh_chi($year){
    $a=array("Thân","Dậu","Tuất","Hợi","Tý","Sửu","Dần","Mẹo","Thìn","Tỵ","Ngọ","Mùi");
    for($i=0;$i<count($a);$i++){
        if($year%12==$i){
            return $a[$i];
        }
    }
}
?>
<form action="" method="post">
    <table align="center">
        <tr bgcolor="#0f62c6" align="center">
            <td colspan="3" class="header">TÍNH NĂM ÂM LỊCH</td>
        </tr>
        <tr align="center">
            <td>Năm dương lịch</td>
            <td></td>
            <td>Năm âm lịch</td>
        </tr>
        <tr align="center">
            <td><input class="a" type="text" name="year" value="<?php if(isset($year)) echo $year;?>" required></td>
            <td><input class="a1" type="submit" style="color: red; background-color: lightyellow;" name="submit" value="=>"></td>
            <td><input class="a2" type="text" style="color: red; background-color: lightyellow;" name="amlich" value="<?php if(isset($am_lich)) echo $am_lich;?>" readonly></td>
        </tr>
        <tr>
            <td colspan="3" align="center" style="color: red;"><?php if(isset($error)) echo $error ?></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><img src="<?php if(isset($link)) echo $link ?>" width="150px"></td>
        </tr>
    </table>
</form>
</body>
</html>