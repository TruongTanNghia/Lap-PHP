<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Điểm Thi Đại Học</title>
</head>
<body>
<?php
   if(isset($_POST['submit'])){
    $math = $_POST['Math'];
    $physics = $_POST['Ly'];
    $chemistry = $_POST['Hoa'];
    $diemChuan = $_POST['diemChuan'];
    if($math <0 || $math>10  || $physics <0 || $physics>10 || $chemistry <0 || $chemistry>10  ||$diemChuan <0 || $diemChuan>30 )
        $kq="Nhập lại điểm chuẩn " & $tongDiem="Nhập lại điểm chuẩn";
    else{ 
        $tongDiem=$math+($physics+$chemistry);
        if($math>0 && $physics>0 && $chemistry>0 && $tongDiem>=$diemChuan) $kq="Đậu";
        else $kq="Rớt";
    }
    if(isset($_POST["reset"])){
        $math = "";
        $physics = "";
        $chemistry = "";
        $diemChuan = "";

    }
}

?>
    <form action="" method="post">
        <table bgcolor="aqua" align="center" >
            <tr>
                <td colspan="6" bgcolor="lime" align="center" >
                    <h2>KẾT QUẢ THI ĐẠI HỌC</h2>
                </td>
            </tr>
            <tr>
                <td>
                    Toán
                </td>
                <td>
                    <input type="text" name="Math" placeholder="Điểm toán"
                    value="<?php if(isset($math)) echo $math; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Lý
                </td>
                <td>
                    <input type="text" name="Ly" placeholder="Điểm lý"
                    value="<?php if(isset($physics)) echo $physics; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Hóa
                </td>
                <td>
                    <input type="text" name="Hoa" placeholder="điểm hóa"
                    value="<?php if(isset($chemistry)) echo $chemistry; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Điểm chuẩn
                </td>
                <td>
                    <input type="text" name="diemChuan" placeholder="Nhập điểm chuẩn"
                    value="<?php if(isset($diemChuan)) echo $diemChuan; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Tổng điểm
                </td>
                <td>
                <input type="text" name="td" disabled value="<?php if(isset($tongDiem)) echo $tongDiem;?>">
                </td>
            </tr>
            <tr>
                <td>
                    Kết quả thi
                </td>
                <td>
                <input type="text" name="kq" disabled value="<?php if(isset($kq)) echo $kq;?>">
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <input type="submit" name="submit" value="Xem quả thi">
                </td>
                <td>
                    <input type="submit" name="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>


    
</body>
</html>