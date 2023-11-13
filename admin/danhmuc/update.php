<?php
    if(is_array($dm)){
        extract($dm);
    }   
?>
<div class="boxright">
        <div class="boxtop">     
                Cập nhập danh mục
        </div>
        <div class="boxbt">
            <form action="index.php?act=updatedm"  method="post">
                <div class="mb-3 mt-3">
                    <label for="">Mã loại:</label>
                    <input type="text" name="maloai" disabled class="form-control" placeholder="" >
                  </div>
                  <div class="mb-3">
                    <label for="pwd">Tên loại</label>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ;?>" class="form-control" require placeholder="" >
                  </div>
                <div class=" mb">
                    <input type="hidden" name="id" value= "<?php if(isset($id)&&($id>0)) echo $id ;?>" >
                    <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhập">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
                    
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>

            </form>
            </div>
    </div>
