<style>
body {       
            background: linear-gradient(to right, #ffffff, #f8f8f8);   
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .boxspct {
            background-color: #fff;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 80%;
        }


        .spchitiet {
            display: flex;
            justify-content: space-between;
        }

        .trai {
            width: 60%;
        }


        
        .trai {
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .imgct {
        flex: 1; /* Để hình ảnh chiếm phần diện tích còn lại của flex container */
        margin-right: 20px; /* Để tạo khoảng trống giữa hình ảnh và mô tả */
        }

        .imgct img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .cm {
        flex: 1; /* Để mô tả chiếm phần diện tích còn lại của flex container */
        }

        .cm strong {
        font-size: 20px; /* Thiết lập kích thước cho tiêu đề */
        }

        .cm hr {
        margin: 10px 0; /* Khoảng cách giữa tiêu đề và nội dung */
        }

        .cm span {
        font-size: 16px; /* Thiết lập kích thước cho nội dung mô tả */
        }


        /* ảnh */



        /* .imgct {
        position: relative;
        overflow: hidden;
        }

        .imgct::before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url(' echo $img_path . $onesp['img']; ') center center no-repeat;
        background-size: 100% 100%;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
        z-index: 1;
        }

        .imgct:hover::before {
        opacity: 1;
        transform: scale(1.1);
        } */



    /* kết thúc ảnh */

        .phai {
            width: 35%;
            text-align: center;
        }

        .namesp {
            font-size: 20px;
            color: #333;
        }

        .price {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }

        .voucher {
            margin-bottom: 20px;
        }

        .sizes {

            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
     

        .soluong {
            display: flex;
            align-items: center;
        }

        .sol input {
            width: 50px;
            padding: 5px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .datmua button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.5s ease; /* Thêm hiệu ứng chuyển màu nền trong 0.3 giây */
        }

        .datmua button:hover {
        background-color: #45a049;
        }


        .ctphai img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .luuy ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .luuy li {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        .tengoiy h3 {
            font-size: 24px;
            color: #333;
        }

        .boxcontent {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .boxspct a {
            text-decoration: none;
            color: #333;
        }

        .boxspct a:hover {
            color: #4CAF50;
        }




/* Tăng cường đường biên và đổ bóng cho boxspct */
/* Tạo nền trắng cho boxspct */
        .spchitiet {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
        }

        /* Tạo viền cho hình ảnh */
        .imgct img {
            border: 1px solid #ddd;
        }

        /* Hiệu ứng chuyển màu cho tiêu đề sản phẩm */
        .namesp {
            transition: color 0.5s ease;
        }

        .namesp:hover {
            color: #4CAF50;
        }

        /* Hiệu ứng chuyển màu và độ phóng to cho nút mua */
        .datmua button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.5s ease, transform 0.3s ease;
        }

        .datmua button:hover {
            background-color: #45a049;
            transform: scale(1.1);
        }

        /* Tạo đường kẻ ngang giữa tiêu đề và mô tả */
        .cm hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 10px 0;
        }

        /* Tạo box-shadow cho sản phẩm liên quan */
        .boxspct .boxcontent .boxspct {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Hiệu ứng hover cho sản phẩm liên quan */
        .boxspct .boxcontent .boxspct:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

    </style>




<div class="boxspct">

    <div class="spchitiet">
        <div class="trai">
            <div class="imgct" id="zoomimg">
                <img src="<?php echo $img_path . $onesp['img'];  ?>" height="330px" width="340px">
            </div>
            <div class="cm">
                <strong>Tiêu Đề</strong>
                <hr>
                <span><?php echo $onesp['mota'];  ?></span>
            </div>
        </div>


        <div class="phai">
            <div class="namesp">
                <strong> <?php echo $onesp['name']; ?> </strong>
                <hr>
            </div>
            <div class="boxtt">
                <div class="cttrai">
                    <div class="price">
                        <p>Giá bán tại: <a href="">Hà nội</a></p>
                        <span>Giá gốc:</span>
                        <p class="tien"><?php echo number_format($onesp['price']);  ?> VND</p>
                        <span>Chỉ còn:</span>
                        <br><br>
                        <strong><?php
                                $tt = $onesp['price'] - (($onesp['price'] * $onesp['giam_gia']) / 100);
                                echo number_format($tt);
                                ?> VND</strong>
                    </div>
                    <div class="voucher">
                        <div class="imgvoucher">

                            <img src="./image/logovnpay.png" width="90px" height="60px" alt="">
                        </div>
                        <div class="test">
                            <strong>Thanh toán ngay với NVPAY - Giảm tới 10%(Tối đa 20k)</strong>
                        </div>

                    </div>
                    <div class="bangsize">

                        <div class="sizes"><strong>Độ tuổi</strong></div>
                        <div class="size">14t-30t </div>
                        <div class="size">hoặc trở đi </div>


                    </div>
                    <form method="post" action="?act=buy">
                        <div class="soluong">
                            <div class="sol">
                                <input type="number" min="1" name="sl" value="1">
                            </div>
                            <?php if (isset($_SESSION['checkus']) && ($_SESSION['checkus'])) : ?>

                                <input type="hidden" name="idsp" value="<?php echo $onesp['id'] ?>">
                                <input type="hidden" name="img" value="<?php echo $onesp['img'] ?>">
                                <input type="hidden" name="namesp" value="<?php echo $onesp['name'] ?>">
                                <input type="hidden" name="gia" value="<?php echo $onesp['price'] ?>">
                                <div class="datmua">
                                    <button type="submit" name="submitbuy"><img src="./image/xehang.png" alt="" width="30px" height="30px">Mua</button>
                                </div>
                    </from>
                            <?php endif; ?>
                            </div>
                </div>

                <div class="ctphai">
                    <div class="anhn"> <img src="./image/logobyu.png" width="200px" height="180px" alt=""></div>
                    <br><br>
                    <div class="luuy">
                        <ul>
                            <li>Đổi trả miễn Phí 15 ngày</li>
                            <br><br>
                            <li>Đổi trả chính hãng 12 tháng</li>
                            <br><br>
                            <li>Freeship dưới 7km</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#binhluan").load("view/binhluan/binhluan.php", {
                idpro: <?= $id ?>
            });
        });
    </script>

    <div class="spchitiet" id="binhluan">

    </div>


    <div style="display: block;" class="spchitiet">
        <div class="row tengoiy">
            <h3><strong>Sản Phẩm Liên Quan</strong></h3>
        </div>
        <div class="row boxcontent">

            <?php
            foreach ($sp_cungloai as $sp_cungloai) {
                extract($sp_cungloai);
                $img = $img_path . $img;
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                echo ' <div class="boxspct">
                <a href="chitietsp.html">
                        <img src="' . $img . '" alt="" width="90"; height="100  "; />
                    </a>
                <a href="' . $linksp . '">' . $name . '</a>
                <hr>
                </div>';
            }
            ?>

        </div>
    </div>

</div>