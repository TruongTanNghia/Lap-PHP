<?php
    $severname="localhost";
    $username="root";
    $password="";
    $dbname="quanly_ban_sua";
    $conn = mysqli_connect($severname, $username, $password, $dbname);
    $query = "SELECT a.Ten_sua,b.Ten_hang_sua,a.TP_Dinh_Duong,a.Loi_ich,a.Trong_luong,a.Don_gia,a.Hinh FROM sua a JOIN hang_sua b ON a.Ma_hang_sua = b.Ma_hang_sua";
    $result = mysqli_query($conn,$query);
    if(isset($_POST['find'])){
        $Ls = $_POST['LS'];
        $Hs = $_POST['HS'];
        $keyword = $_POST['keyword'];
        $query = "SELECT a.Ten_sua,b.Ten_hang_sua,a.TP_Dinh_Duong,a.Loi_ich,a.Trong_luong,a.Don_gia,a.Hinh FROM sua a JOIN hang_sua b ON a.Ma_hang_sua = b.Ma_hang_sua WHERE a.Ten_sua like '%$keyword%'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)!=0){
            $num = mysqli_num_rows($result);
            $kq="Có $num sản phẩm được tìm thấy";
        }
        else
            $kq="Không tìm thấy sản phẩm này";
    }
?>
   <style>
 
        img{
            width: 150px;
            height: 150px;
        }
       td, th {
           border: 1px solid #828282 ;
           text-align: left;
           padding: 8px;
       }
  
       th{
           background-color: #ffeee6;
       }
       td:has(img){
           display: flex;
           justify-content: center;
           align-items: center;

       }
       form{
           width: 100%;
           text-align: center;
           background-color: #fecccd;
           border: white solid 1px;
       }
       td:has(h2){
           color: #e87132;
           font-style: italic;
           text-align: center;
            background-color: #ffeee6;
       }
   </style>

<form action="" method="POST">
   <h1>TÌM KIẾM THÔNG TIN SỮA</h1>
   Tên sữa: <input type="text" name="keyword" value="<?php echo $keyword ?? "" ?>">
   <button type="submit" name="find"> Tìm kiếm</button>
   Loại sữa: <input type="text" name="keyword" value="<?php echo $Ls ?? "" ?>">
   <button type="submit" name="find"> Tìm kiếm</button>
   Hãng sữa: <input type="text" name="keyword" value="<?php echo $Hs ?? "" ?>">
   <button type="submit" name="find"> Tìm kiếm</button>    
</form>


<?php if(!isset($result)) :?>

<?php elseif(mysqli_num_rows($result) == 0):?>
    <h1>Không tìm thấy</h1>
<?php else:?>
    <h4 align ='center'>Có <?php echo mysqli_num_rows($result) ?> sản phẩm được tìm thấy</h4>
   <table table align='center' width='50%' border='1'>
      <?php if(mysqli_num_rows($result)!==0) :?>
         <?php foreach ($result as $item ) :?>
          <tr >
              <td colspan="2">
                  <h2>
                     <?php echo $item['Ten_sua'] ?>
                  </h2>
              </td>
          </tr>
            <tr>
               <td>
                  <img src="./Hinh_sua/<?php echo $item['Hinh'] ?> " alt=""  srcset="">

               </td>
               <td>
                  <strong> Thành phần dinh dưỡng</strong>
                  <br>
                  <?php echo $item['TP_Dinh_Duong'] ?>
                  <br>
                  <strong> Lợi ích</strong>
                  <br>
                  <?php echo $item['Loi_ich'] ?>
                  <p><strong>Trọng lượng: </strong> <?php echo $item['Trong_luong']?> gr
                     - <strong>Đơn giá: </strong><?php echo $item['Don_gia'] ?> VND
                  </p>
               </td>
            </tr>
         <?php endforeach;?>

      <?php endif;?>
   </table>

<?php endif;?>






