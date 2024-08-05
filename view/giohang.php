
<?php if (isset($_SESSION['giohang'])) : ?>
    <form method="post" action="?act=updategiohang">
        <div class="container mt-4">
            <?php print_r($_SESSION['giohang']);?>
            <?php $i = 0; ?>
            <?php foreach (($_SESSION['giohang']) as $value) : ?>
                <div class="row mb-3 border p-2">
                    <div class="col-md-3">
                        <img class="img-fluid" src="./upload/<?php echo isset($value['img']) ? $value['img'] : ''; ?>" alt="Product Image">
                    </div>
                    <div class="col-md-5">
                        <h5><?php echo isset($value['name']) ? "sản phẩm:" . $value['name'] : ''; ?></h5>
                    </div>
                    <div class="col-md-5">
                        <h5><?php echo isset($value['soluong']) ? "giá:" . $value['price']*$value['soluong'].".VNĐ" : '0.VND'; ?></h5>
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="form-control" name="soluong[<?php echo $i?>]" value="<?php echo isset($value['soluong']) ? $value['soluong'] : ''; ?>" >
                    </div>
                    <div class="col-md-2">
                        <a href="?act=delhd&idhd=<?php echo $i; ?>" class="btn btn-danger">Xóa</a>
                    </div>
                </div>
                <?php $i++; endforeach; ?>

                <div class="row mt-3">
                    <div class="col-md-8"></div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning">Cập nhật Giỏ Hàng</button>
                        <a href="?act=bill" class="btn btn-primary">Mua</a>
                        <a href="?act=sanpham" class="btn btn-primary">Quay lại</a>
                    </div>
                </div>
        </div>
    </form>
<?php endif; ?>


