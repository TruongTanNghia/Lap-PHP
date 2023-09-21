<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÔNG TIN CÁC SẢN PHẨM</title>
</head>
<style>
    table{border-collapse: collapse;width: 750px;}
    td{border: 1px solid black;}
    ul{list-style-type: none; margin-left: -35px;}
    .header{
        font-size: 25px; 
        color: #f96409;
        padding: 5px; 
        font-weight: bold;
        text-align: center;
    }
</style>
<body>
<?php
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="qlbs";
    $conn = mysqli_connect($severname, $username, $password, $dbname);
    $query = "SELECT Ma_sua,Ten_sua,Trong_luong,Don_gia,Hinh FROM sua";
    $result = mysqli_query($conn,$query);
?>
    <form action="chi_tiet_sp.php" method="get">
        <table align='center'>
            <tr bgcolor='#ffeee6'>
                <td colspan="5"  class='header'>THÔNG TIN CÁC SẢN PHẨM</td>
            </tr>   
            <?php
            if(mysqli_num_rows($result)>0){       
                $sosp1hang = 5;
                $sohang = 0;
                $dem = 0;
                while ($row=mysqli_fetch_row($result)){
                    if($dem == $sosp1hang){
                        echo "<tr>";
                    }
                    echo "<td class='listsp'>
                    <ul align='center'>
                        <li ><a href='chitietSP.php?id=$row[0]'><b>$row[1]</b></a></li>
                        <li >$row[2] gr - $row[3] VNĐ</li>
                        <li><img src='Hinh_sua/$row[4]' height='100px''</li>'
                    </ul>
                    </td>";
                    if($dem == $sosp1hang -1){
                        echo '</tr>';
                        $dem = 0;
                    }
                    else $dem +=1;
                }
            }?>
        </table>
    </form>
</body>
</html>