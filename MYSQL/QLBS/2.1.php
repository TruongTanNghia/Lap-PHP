
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Hãng Sữa</title>
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
?>
<?php
if(mysqli_num_rows($result)==0) echo 'Chưa có dữ liệu';
else {
echo "<h1 align='center'><font size='5' color ='black'> <b>THÔNG TIN HÃNG SỮA</b></font></h1>";
echo "<table align='center' width='50%' border='1' cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
echo '<tr>
<th width="50">MaHS</th>
<th width="450">Tên Hãng Sữa</th>
<th width="2500">Địa Chỉ</th>
<th width="300">Điện Thoại</th>
<th width="400">Email</th>
</tr>';
if(mysqli_num_rows($result)<>0)
{ $stt=1;
	$bg = '#eeeeee';
while($rows=mysqli_fetch_row($result))
{ 
echo "<tr bgcoloer='".$bg."'>";
echo "<td>$rows[0]</td>";
echo "<td>$rows[1]</td>";
echo "<td>$rows[2]</td>";
echo "<td>$rows[3]</td>";
echo "<td>$rows[4]</td>";
echo "</tr>";

}//while
}
}
mysqli_free_result($result);
mysqli_close($conn);
?>
</body>
</html>
