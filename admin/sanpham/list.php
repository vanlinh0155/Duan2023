<div class="boxright">
    <div class="boxtop">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <form action="#" method="post">
            <input type="text" name="kyw">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
                ?>
            </select>
            <input type="submit" name="listok" value="GO">
        </form>
    </form>
    <div class="boxbt ml">
        <div class="container">
            <div class="bang">
                <table class="table table-hover">
                    <tr>
                        <th></th>
                        <th>Mã loại</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình</th>
                        <th>Giá</th>
                        <th>Lượt xem</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp="index.php?act=suasp&id=".$id;
                        $xoasp="index.php?act=xoasp&id=".$id;
                        $hinhpath="../upload/".$img;
                        if(is_file($hinhpath)){
                            $hinh="<img src='".$hinhpath."' height='80'>";
                        }else{
                            $hinh="Không có hình";
                        }
                        echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$price.'</td>
                             <td><a href="'.$suasp.'"><input class="btn btn-warning" type="button" value="Sửa"></a>  <a href="'. $xoasp.'"><input type="button" class="btn btn-danger" value="Xóa"></a></td>
                        </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="ml">
              <a href="index.php?act=addsp"><input class="btn btn-success" type="button" value="Nhập thêm"></a>
            </div>
        </div>
    </div>
</div>