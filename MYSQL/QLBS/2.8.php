<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Sữa Đơn Giản</title>
</head>
<h1 align= 'center'><b>Thông Tin Chi Tiết Các Loại Sữa</b></h1>
<body>  
<?php
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="quanly_ban_sua";
    $conn = mysqli_connect($severname, $username, $password, $dbname);
    $query = "SELECT * FROM sua";
    $result = mysqli_query($conn,$query);
    $numRows = mysqli_num_rows($result);
    $rowsPerPage=2; // So mau tin tren moi trang 
    $maxPage = ceil($numRows/$rowsPerPage); // Tinh tong so trang
    if(!isset($_GET['page']))
    {
        $_GET['page']='1';
    }
    $offset = ($_GET['page']-1)*$rowsPerPage; // Vi tri dau tien tren moi trang
    $query = "SELECT a.Ten_sua,b.Ten_hang_sua,a.TP_Dinh_Duong,a.Loi_ich,a.Trong_luong,a.Don_gia,a.Hinh FROM sua a JOIN hang_sua b ON a.Ma_hang_sua = b.Ma_hang_sua LIMIT $offset,$rowsPerPage";
    $result = mysqli_query($conn,$query);
?>
<form action="">
        <table align="center" border="1">
            <?php 
                if(mysqli_num_rows($result)!=0){
                    while ($row=mysqli_fetch_row($result)){
                        echo "
                            <tr bgcolor='#ffeee6' class='header'>
                                <td colspan='2'>$row[0] - $row[1]</td>
                            </tr> 
                            <tr class='sp'>
                                <td><img src='Hinh_sua/$row[6]' alt=''></td>
                                <td>
                                    <ul>
                                        <li><b><i>Thành Phần Dinh Dưỡng:</i></b></li>
                                        <li>$row[2]</li>
                                        <li class='a'><b><i>Thành Phần Dinh Dưỡng:</i></b></li>
                                        <li>$row[3]</li>
                                        <li class='b'><b><i>Trọng lượng: </i></b>$row[4] gr - <b><i>Đơn giá: </i></b>$row[5] VNĐ</li>
                                    </ul>
                                </td>
                            </tr>
                        ";
                    }
                }
             ?> 
        </table>
            <div align='center' style="margin-top: 20px;">
                <a href="2.8.php?page=1"><?php if($_GET['page']==1) echo ""; else echo '<<';?></a>
                <a href="2.8.php?page=<?php echo $_GET['page']-1;?>"><?php if($_GET['page']==1) echo ""; else echo '<';?></a>
                <?php for($i=1;$i<=$maxPage;$i++){ ?>
                <a href="2.8.php?page=<?php echo $i ?>"><?php echo $i ?></a>
                <?php } ?>
                <a href="2.8.php?page=<?php echo $_GET['page']+1;?>"><?php if($_GET['page']==$maxPage) echo ""; else echo '>';?></a>
                <a href="2.8.php?page=<?php echo $maxPage?>"><?php if($_GET['page']==$maxPage) echo ""; else echo '>>';?></a>
            </div>
    </form>
</body>
</html>