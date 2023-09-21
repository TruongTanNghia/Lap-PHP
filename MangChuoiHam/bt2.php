<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai_2</title>
</head>
<style>
    .btn{background-color: #faf794; width: 110px;}
    .kq{color: red; background-color: #c5fa93; width: 102px;} 
    .nhap{width: 200px;}
    b{color: red;}
    table{background-color: #ccd9cf; width: 400px;}
    td{padding-left: 10px;}
    
    .header{
        font-size: 20px; 
        color: white; 
        padding: 5px; 
        font-weight: bold;
    }
    
</style>
<body>
<?php
if (isset($_POST['tinh'])){
    if(isset($_POST['dayso'])){
        $s=$_POST['dayso'];
        tach_day_so($s,$a);
        $tong=tinh_tong($a);
    }   
}
function tach_day_so($s,&$a){
    $a=explode(",",$s);
}
function tinh_tong($a){
    $tong=0;
    for($i=0;$i<count($a);$i++){
        if(is_numeric($a[$i])){
            $tong+=$a[$i];
        }
    }
    return $tong;
}
?>
<form action="" method="POST">
    <table align="center">
        <tr bgcolor="#008000" align="center">
            <td class="header" colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</td>
        </tr>
        <tr>
            <td bgcolor = "Silver">Nhập dãy số:</td>
            <td>
                <input class="nhap" type="text" name="dayso" value="<?php if(isset($s)) echo $s;?>" required>
                <b>(*)</b>
            </td>
        </tr>
        <tr>
            <td bgcolor = "Silver"></td>
            <td><input class="btn" type="submit" name="tinh" value="Tổng dãy số"></td>
        </tr>
        <tr>
            <td bgcolor = "Silver">Kết quả:</td>
            <td>
                <input type="text" name="ketqua" class="kq" readonly
                value="<?php if (isset($tong)) echo $tong;?>">
            </td>
        </tr>
        <tr align="center" bgcolor = "Silver">
            <td colspan="2"><b>(*)</b>Các số được nhập cách nhau bằng dấu *,*</td>
        </tr>
    </table>
</form>
</body>
</html>