<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$img;
if(is_file($hinhpath)){
  $hinh="<img src='".$hinhpath."' height='80' >";
}else{
  $hinh="Không có hình";
}
?>
<div class="boxright">
  <div class="boxtop">
    <h1>CẬP NHẬT HÀNG HÓA</h1>
  </div>
  <div class=" boxbt">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
      <div class="mb">
      <select name="iddm"> 
          <option value="0" selected>Tất cả</option> 
          <?php 
          foreach ($listdanhmuc as $danhmuc) { 
            // extract($danhmuc); 
            if($iddm==$danhmuc['id']) $s="selected"; else $s=""; 
            echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>'; 
          } 
          ?> 
        </select>
      </div>
      <div class="mb">
        Tên sản phẩm<br>
        <input type="text" name="tensp" value="<?php echo $name ?>">
      </div>
      <div class="mb">
        Giá<br>
        <input type="text" name="giasp" value="<?php echo $price ?>">
      </div>
      <div class=" mb">
        Hình <br>
        <input type="file" name="hinh">
        <?php echo $hinh ?>
      </div>
      <div class="mb">
        Mô tả<br>
        <textarea name="mota" cols="30" rows="10"><?php echo $mota ?></textarea>
      </div>
      <div class="mb">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="capnhat" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
      </div>
  
    </form>
    <?php
      if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
      ?>
  </div>
</div>