
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin các sản phẩm</title>
</head>
<style>
    table{border-collapse: collapse;width: 500px;}
    .header{
        font-size: 25px; 
        color: #f96409;
        padding: 5px; 
        font-weight: bold;
        text-align: center;
    }
    ul{list-style-type: none; margin-left: -35px;}
</style>
<body>

    <form action="">
        <table align='center' border="1">
            <tr bgcolor='#ffeee6'>
                <td colspan="2" class="header">THÔNG TIN CÁC SẢN PHẨM</td>
            </tr>  
            <?php
                $severname="localhost";
                $username="root";
                $password="";
                $dbname="qlbs";
                $conn = mysqli_connect($severname, $username, $password, $dbname);
                $query = "SELECT a.Ten_sua,b.Ten_hang_sua,c.Ten_loai,a.Trong_luong,a.Don_gia,a.Hinh FROM sua a JOIN hang_sua b ON a.Ma_hang_sua = b.Ma_hang_sua JOIN loai_sua c ON a.Ma_loai_sua = c.Ma_loai_sua";
                $result = mysqli_query($conn,$query);
            ?>

            <?php
            if(mysqli_num_rows($result) <> 0)
            {	$dem = 1;
            while($rows= mysqli_fetch_array($result)) {
                $bg = ($dem % 2 == 0 ? 'lightblue' : 'lightgrey');
                echo '<tr bgcolor ="'.$bg.'">';
                echo "<td><img src = 'Hinh_sua/{$rows["Hinh"]}' alt='sai image' width='200px' height='200px'</td>";
                echo "<td>{$rows['Ten_sua']}</br>Nhà sản xuât:{$rows['Ten_hang_sua']}</br>{$rows['Ten_loai']}-{$rows['Trong_luong']} gr-{$rows['Don_gia']} VND</td>";
                echo '</tr>';
                $dem+=1;
                    } 
            }
            
            ?>
        </table>
    </form>
</body>
</html>