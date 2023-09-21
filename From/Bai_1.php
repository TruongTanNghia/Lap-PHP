<!DOCTYPE html>
<html>
<head>
    <title> Diện Tích Hình chữ nhật</title>
    <style>
        table{
            text-align: center
            width: 500px;
            margin: auto;
            background: #ffca97;
        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
            background: #ffa500;
            color: #ffffff;
        }

        .tine{
            width: 300px;
        }
        input{
            width: 200px;
        }
        button{
            background: #34a853;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
        button:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
    
<?php
if (isset($_POST['submit'])){  /* kiem tra xem da nhan hay chưa */
    $width = $_POST['width'];
    $height = $_POST['height'];
    if (isset($width) and is_numeric($width) and $width>0){
        if (isset($height) and is_numeric($height) and $height>0){
            $acreage = $width*$height;
        }else{
            $height="Khong duoc de trong";
        }
    }else{
        $width="Khong duoc de trong";
    }
    
}
    
   
?>
    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                Diện Tích Hình Chữ Nhật
                </td>
            </tr>

            <tr>
                <td>
                    Chều rộng
                </td>
                <td>
                    <input type="text" name="width" value="<?php if (isset($width)) echo $width;?>" required>
                </td>
            </tr>

            <tr>
                <td>
                    Chều cao
                </td>
                <td>
                    <input type="text" name="height" value="<?php if (isset($height)) echo $height;?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    Diện tích
                </td>
                <td>
                    <input type="text" name="area" value="<?php if (isset($acreage)) echo $acreage; else echo "";?>" readonly >
                </td>
            </tr>


            <tr class = "tine">
            <td colspan="2" align="center" >
                <input bgcolor="#e4dedf" type="submit" name="submit" value="Tính">
                <?php if(isset($_POST['submit'])) echo "<input type='submit' name=reset' value='Nhập lại'>"?>
            </td>
        </tr>
            
        </tr>
        </table>
    </form>
</body>
</html>