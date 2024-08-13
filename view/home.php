<?php include "menu.php"; ?>
<?php include "banner.php"; ?>
<div class="container">

    <div class="tieude">
        <h2><strong>Danh Mục Yêu Thích</strong></h2>
    </div>
    <div class="topdm">
        <?php
        foreach ($dsdm as $dm) {
            extract($dm);
            $hinh = $img_path . $img;
            $linksp = "?act=sptheodanhmuc&iddm=" . $id;
            echo '<div class="chitiet">
            <div class="anhdm">
                <img src="' . $hinh . '" height="100px" width="100px" alt="">
            </div>
            <div class="tendm">
                <a href="' . $linksp . '">
                    ' . $name . '
                </a>
            </div>
        </div>
        ';
        }
        ?>

    </div>





    <div style="margin-top:50px" class="row top10sp">
        <div class="row">
            <h2 style="text-align:center;"><strong>Sản Phẩm Nổi Bật</strong></h2>
        </div>

        <div class="row top10sps ">
            <?php foreach ($top10 as $value) {
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
            ?>

                <div class="col-3">
                    <div class="card">
                        <img src="./upload/<?php echo $value['img'] ?>" class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value['name'] ?></h5>
                            <hr>
                            <h6><?php echo number_format($value['price']) ?>VNĐ</h6>
                            <div style="text-align: center;">
                                <button type="button" class="btn btn-warning"><a style="text-decoration: none;color:#fff;" href="?act=sanphamct&idsp=<?php echo $value['id'] ?>">Xem</a></button>
                                &emsp;&emsp;
                                <button type="submit" class="btn btn-warning"><a style="text-decoration: none;color:#fff" href="?act=sanphamct&idsp=<?php echo $value['id'] ?>">Mua</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>

    <div class="row goiysp " style="margin-top: 15px; margin-left: 4px;">
        <div class="tengoiy">
            <h2><strong>Gợi Ý Sản Phẩm Theo Giai Đoạn</strong></h2>
        </div>
        <div class="goiy">
            <img src="./image/goiy.png" width="100px" height="200px" alt="">

        </div>
    </div>
    <div class="post">
        <div class="tieudepost" style="padding: 10px;">
            <h2><strong>Bài Viết Đáng Chú Ý</strong></h2>
        </div>
        <div class="postall" style="display: flex;">
            <div class="baipost_1" style="margin-right: 200px; margin-left: 35px;">
                <img src="./image/baipost_1.jpg" alt="" width="500px" height="400px">
                <p><a href="">Bùng nổ cảm xúc cùng sự kiện Festival <br> Mẫu váy và váy của KidsPlaza diễn ra tại Hà Nội</a></p>

            </div>
            <div class="baipost_2">
                <img src="./image/baipost_2.jpg" alt="" width="500px" height="400px">
                <p>
                    <a href="">Tại hội thảo, các chuyên gia trong lĩnh vực tiền<br>sản đã tổ chức các buổi hội thảo</a>
                </p>
            </div>
        </div>
    </div>
</div>