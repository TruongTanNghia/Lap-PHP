<?php
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="qlbs";
    $conn = mysqli_connect($severname, $username, $password, $dbname);
    $query = "SELECT Ten_sua,Trong_luong,Don_gia,Hinh FROM sua";
    $result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin các sản phẩm</title>
</head>
<style>
    table{border-collapse: collapse;width: 750px;}
 
    td{border: 1px solid black;}
    ul{list-style-type: none; margin-left: -35px;}
    .listsp{width: 150px; height: 200px;}
    .a, .b{font-size: 15px;}
    .header{
        font-size: 25px; 
        color: #f96409;
        padding: 5px; 
        font-weight: bold;
        text-align: center;
    }
</style>
<body>
    <form action="">
        <table align='center'>
            <tr bgcolor='#ffeee6'>
                <td colspan="5" class="header">THÔNG TIN CÁC SẢN PHẨM</td>
            </tr>  
            <?php
            if(mysqli_num_rows($result) <> 0)
            {	
                $sosp1hang = 5;
                $sohang = 0;
                $demso = 0;
            while($rows= mysqli_fetch_array($result)) {
                if($demso == $sosp1hang){
                    echo "<tr>";
                }
                echo " <td><b>{$rows['Ten_sua']}</b></br>
                          
                            {$rows['Trong_luong']} gr- {$rows['Don_gia']} VND</br>
                            <img src = 'Hinh_sua/{$rows["Hinh"]}' alt='sai image' width='100px' height='100px'
                        <td>";
                if($demso == $sosp1hang -1){
                    echo '</tr>';
                    $demso = 0;
                    }
                    else $demso +=1;
                } 
            }
            ?>
        </table>
    </form>
</body>
</html>