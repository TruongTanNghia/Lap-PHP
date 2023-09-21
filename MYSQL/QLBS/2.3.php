
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
    $query = "SELECT * FROM khach_hang";
    $result = mysqli_query($conn,$query);
?>
<?php
if(mysqli_num_rows($result)==0) echo 'Chưa có dữ liệu';
else {
echo "<h1 align='center'><font size='5' color='black'> THÔNG TIN KHÁCH HÀNG</font></h1>";
echo "<table align='center' width='50%' border='1' cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
echo '<tr >
<th width="150">MaKH</th>
<th width="950">Tên Khách Hàng</th>
<th width="250" >Giới tính</th>
<th width="3000">Địa Chỉ</th>
<th width="400">Điện Thoại</th>
</tr>';
if(mysqli_num_rows($result) <> 0)
	{	$dem = 1;
		while($rows= mysqli_fetch_array($result)) {
			$bg = ($dem % 2 == 0 ? '#fefefe' : '#fee0c1');
			echo '<tr bgcolor ="'.$bg.'">';
			echo "<td> {$rows['Ma_khach_hang']} </td>";
			echo "<td> {$rows['Ten_khach_hang']} </td>";
			if($rows['Phai'] == 0) echo "<td style='text-align:center;'><img src='icon/phai0.jpg' width='30px' height = '30px'/></td>";
				else echo "<td style='text-align:center;'><img src='icon/phai1.jpg' width='30px' height = '30px'/></td>";
			echo "<td> {$rows['Dia_chi']} </td>";
			echo "<td> {$rows['Dien_thoai']} </td>";
			echo "</tr>";
			$dem+=1;
		} 
	}
}
mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>
