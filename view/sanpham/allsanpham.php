
<?php 
include "./view/menu.php";
?>
    <style>
    
.card {
    position: relative;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
}

.product-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    text-align: center;
    padding: 10px;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.card:hover .product-overlay {
    transform: translateY(0);
}

.product-overlay a {
    text-decoration: none;
    color: #fff;
}

    </style>
<div class="container">
    <div class="row allsp">
        <div class="col-4">
            
        <div style="border: 1px solid gray;text-align:center;border-radius:10px" class="test row">
        <h3 style="text-align: center;" >Danh Mục</h3>
        <a style="text-decoration: none; color: #000; padding-bottom: 10px;" href="?act=sanpham">Tất cả sản phẩm</a>
           <?php foreach($dsdm as $value):?>
            <p><a id="tendanhmuc" style="text-decoration: none;color:black" href="?act=sptheodanhmuc&iddm=<?php echo $value['id']?>"><?php echo $value['name']?></a></p>
            <?php endforeach;?>

            </div>

            <div style="border-radius: 10px;border:1px solid gray;margin-top:50px" class="row">
      

            </div>
        </div>
        <div class="col-8">


        <div class="row">
    <?php foreach ($dssp as $value) : ?>





        <!-- test -->
    <div class="col-3">
    <div class="card">
        <img src="./upload/<?php echo $value['img'] ?>" class="card-img-top" alt="Fissure in Sandstone" />
        <div class="card-body">
            <h5><?php echo $value['name']; ?></h5>
            <hr>
            <p><?php echo number_format($value['price']) ?> VND</p>
            <div class="row">
                <div class="product-overlay">
                <div style="text-align: center;" class="col-6">
                    <button type="button" class="btn btn-warning">
                        <a href="?act=sanphamct&idsp=<?php echo $value['id'] ?>">Xem</a>
                    </button>
                </div>
                <div style="text-align: center;" class="col-6">
                    <button type="button" class="btn btn-warning">
                        <a href="?act=sanphamct&idsp=<?php echo $value['id'] ?>">Mua</a>
                    </button>
                </div>
                <div style="text-align: center;" class="col-6">
                    <form method="post" action="?act=themvaogiohang">
                        <input type="hidden" name="idsp" value="<?php echo $value['id'] ?>">
                        <input type="hidden" name="name" value="<?php echo $value['name'] ?>">
                        <input type="hidden" name="price" value="<?php echo $value['price'] ?>">
                        <input type="hidden" name="img" value="<?php echo $value['img'] ?>">
                        <button type="submit" class="btn btn-warning">
                            Thêm vào Giỏ Hàng
                        </button>
                    </form>
                </div>
                </div> 
            </div>
        </div>
    </div>
</div>

        <?php endforeach; ?>
    </div>

                        
    </div>
    </div>
</div> 
<p style="color:red;"><?php isset($_GET['thongbao'])?$_GET['thongbao']:'';?></p>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script>
    $(document).ready(function() {
        $(".card").hover(
            function() {
                $(this).find(".product-overlay").css("transform", "translateY(0)");
            },
            function() {
                $(this).find(".product-overlay").css("transform", "translateY(100%)");
            }
        );
    });
</script>

