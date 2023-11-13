<div class="boxright">
        <div class="boxtop">     
                Thêm mới danh mục
                <a href="index.php?act=listdm">   
                    <input class="btn btn-primary ne" type="button"  value="Danh sách">
                </a>
        </div>
        <div class="boxbt">
            <form action="index.php?act=adddm"  method="post">
                <div class="mb-3 mt-3">
                    <label for="">Mã loại:</label>
                    <input type="text" name="maloai" disabled class="form-control" placeholder="" >
                  </div>
                  <div class="mb-3">
                    <label for="pwd">Tên loại</label>
                    <input type="text" name="tenloai" class="form-control" require placeholder="" >
                  </div>
                <div class=" mb">
                    <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm mới">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
                    
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;

                ?>

            </form>
            </div>
    </div>