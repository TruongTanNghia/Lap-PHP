<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style1.css">
    <title>Tính Tiền Điện</title>
  </head>
  <body>
  <?php
    if (isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $old_number=$_POST['old_number'];
    $new_number=$_POST['new_number'];
    $dongia=$_POST['dongia'];
    $thanhTien=0;
    if (isset($old_number) and is_numeric($old_number) and $old_number>0 and isset($new_number) and is_numeric($new_number) and $new_number>0){
        if($old_number<=$new_number){
            $thanhTien = ($new_number-$old_number)*$dongia;
        }
        else 
        $new_number = "Số mới phải lớn hơn số cũ";
    }
    }

    if (isset($_POST['reset'])){
        $old_number="";
        $new_number="";
    }
    ?>

    <div class="container">
      <form action="" method="post">
      <table align="center" bgcolor="#00FFFF">
        <tr>
            <td colspan="2" bgcolor="Aqua"><h1><font color="Black">Phần Mềm Tính Tiền Điện </h1></td>
        </tr>
        </table>    
        <table align="center" bgcolor= "#C0C0C0">
          <tr>
            <td>
              <label for="">Tên chủ hộ</label>
            </td>
            <td>
              <input type="text" name="Name" class="button" value="<?php if (isset($Name)) echo $Name;?>" />
            </td>
          </tr>

          <tr>
            <td>
              <label for="">Chỉ số cũ</label>
            </td>
            <td>
              <input type="text" name="old_number" class="button" value="<?php if (isset($old_number)) echo $old_number;echo "";?>"/>
            </td>
            <td>(Kw)</td>
          </tr>

          <tr>
            <td>
              <label for="">Chỉ số mới</label>
            </td>
            <td>
              <input type="text" name="new_number" class="button" value="<?php if (isset($new_number)) echo $new_number;echo "";?>"/>
            </td>
            <td>(Kw)</td>
          </tr>

          <tr>
            <td>
              <label for="">Đơn giá</label>
            </td>
            <td>
              <input type="text" name="dongia" class="button" value="<?php if (isset($dongia)) echo $dongia; else echo "2000";?>"/>
            </td>
            <td>(VND)</td>
          </tr>

          <tr>
            <td>
              <label for="">Số Tiền Thanh Toán</label>
            </td>
            <td>
              <input
                type="text"
                name="sotien"
                class="button"
                style="background-color: #CCCCFF"
                value="<?php if (isset($thanhTien)) echo $thanhTien; else echo "";?>"
                readonly
              />

            </td>
            <td>(VND)</td>
          </tr>
          <tr>
            <td colspan="3" style="text-align: center">
              <input type="submit" value="submit" name="submit" class="button" />
              <input type="submit" value="reset" name="reset" class="button" />

            </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>