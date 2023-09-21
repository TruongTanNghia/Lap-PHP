
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Khách Hàng</title>
</head>
<body>
<?php
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="qlbs";
    $conn = mysqli_connect($severname, $username, $password, $dbname);
    if(!$conn){
        die("connect failed: ". mysqli_connect_error());
    }
    $query = "SELECT * FROM hang_sua";
    $result = mysqli_query($conn,$query);
    $numRows = mysqli_num_rows($result);
    $rowsPerPage=5; 
    $maxPage = ceil($numRows/$rowsPerPage);
    if(!isset($_GET['page']))
    {
        $_GET['page']='1';
    }
    $offset = ($_GET['page']-1)*$rowsPerPage;
    $query = "SELECT a.Ten_sua,b.Ten_hang_sua,c.Ten_loai,a.Trong_luong,a.Don_gia FROM sua a JOIN hang_sua b ON a.Ma_hang_sua = b.Ma_hang_sua JOIN loai_sua c ON a.Ma_loai_sua = c.Ma_loai_sua LIMIT $offset,$rowsPerPage";
    $result = mysqli_query($conn,$query);
?>
<?php
if(mysqli_num_rows($result)==0) echo 'Chưa có dữ liệu';
else {
echo "<h1 align='center'><font size='5' color='black'> THÔNG TIN SỮA</font></h1>";
echo "<table align='center' width='50%' border='1' cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
echo '<tr >
<th width="50">STT</th>
<th width="550">Tên sữa</th>
<th width="450">Tên Hãng Sữa</th>
<th width="2500">Tên Loại</th>
<th width="300">Trọng Lượng</th>
<th width="400">Đơn Gía</th>
</tr>';
if(mysqli_num_rows($result) <> 0)
	{	$dem = 1;
		while($rows= mysqli_fetch_array($result)) {
			$bg = ($dem % 2 == 0 ? '#fefefe' : '#fee0c1');
			echo '<tr bgcolor ="'.$bg.'">';
			echo "<td> {$dem} </td>";
			echo "<td> {$rows['Ten_sua']} </td>";
			echo "<td> {$rows['Ten_hang_sua']} </td>";
			echo "<td> {$rows['Ten_loai']} </td>";
			echo "<td> {$rows['Trong_luong']} </td>";
			echo "<td> {$rows['Don_gia']} </td>";
			echo "</tr>";
			$dem+=1;
		} 
	}
}
echo "</table>";
$re = mysqli_query($conn, 'SELECT * FROM sua');
$numRows = mysqli_num_rows($re);//tong so bản tin cần hiển thị
$maxPage = floor($numRows/$rowsPerPage) + 1;//tòn số trang 
?>
    <div align='center' style="margin-top: 20px;">
                <a href="2.4.php?page=1"><?php if($_GET['page']==1) echo ""; else echo '<<';?></a>
                <a href="2.4.php?page=<?php echo $_GET['page']-1;?>"><?php if($_GET['page']==1) echo ""; else echo '<';?></a>
                <?php for($i=1;$i<=$maxPage;$i++){ ?>
                <a href="2.4.php?page=<?php echo $i ?>"><?php echo $i ?></a>
                <?php } ?>
                <a href="2.4.php?page=<?php echo $_GET['page']+1;?>"><?php if($_GET['page']==$maxPage) echo ""; else echo '>';?></a>
                <a href="2.4.php?page=<?php echo $maxPage?>"><?php if($_GET['page']==$maxPage) echo ""; else echo '>>';?></a>
    </div>
</body>
</html>
