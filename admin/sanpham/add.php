<div class="row box">
    <div class="boxtrai">
        <div class="loai logoam tren">
            <img src="../image/logo-removebg-preview.png" width="150px" height="150px" alt="">
        </div>
        <div class="loai hieuung">
        <ul>
                <li><a href="?act=adddm">Danh Mục</a></li>
                <li><a href="?act=addsp">Sản Phẩm</a></li>
                <li><a href="?act=taikhoan">Tài Khoản</a></li>
                <li><a href="?act=dsbl">Bình Luận</a></li>
                <li><a href="?act=donhang">Đơn Hàng</a></li>
                <li><a href="index.php?act=thongke">Thống Kê</a></li>
                <li><a href="../index.php">Quay về Trang Chủ</a></li>
            </ul>
        </div>

    </div>
    <div class="boxphai">
        <div class="tieudeb">
            <h2>Thêm Sản Phẩm</h2>
        </div>
        <div class="bang">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">

            <div class="maloai">
                Danh Mục SP<br>
                <select name="iddm" id="">
                  <?php
                  foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                  }
                  ?>
                </select>
            </div>

            <div class="maloai">
                Tên sản phẩm<br>
                <input type="text" name="tensp">
            </div>
            <div class="maloai">
                Giá<br>
                <input type="text" name="giasp">
            </div>
            <div class="maloai">
                Hình<br>
                <input type="file" name="hinh">
            </div>
            <div class="maloai">
                Mổ Tả<br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="maloai">
                Giảm Giá<br>
                <input type="input" name="giamgia">
            </div>

            <div class="nut">
                <input type="submit" name="themmoi" value="Thêm Mới">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
            </form>
        </div>

    </div>

</div>