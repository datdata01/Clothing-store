<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">tài khoản</th>
                    <th scope="col">địa chỉ</th>
                    <th scope="col">sdt</th>
                    <th scope="col">email</th>
                    <th scope="col">phương thức</th>
                    <th scope="col">ngày đặt hàng</th>
                    <th scope="col">tổng</th>
                    <th scope="col">trạng thái</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $bill['id'] ?></th>
                    <td><?php echo $bill['bill_name'] ?></td>
                    <td><?php echo $bill['bill_address'] ?></td>
                    <td><?php echo $bill['bill_address'] ?></td>
                    <td><?php echo $bill['bill_email'] ?></td>
                    <td><?php
                        switch ($bill['bill_pttt']) {
                            case 0: {
                                    echo "thanh toán trực tiếp";
                                    break;
                                }
                            case 1: {
                                    echo "chuyển khoản";
                                    break;
                                }
                            case 2: {
                                    echo "thanh toán online";
                                    break;
                                }
                            default:
                                echo "thanh toán trực tiếp";
                                break;
                        }
                        ?></td>
                    <td><?php echo $bill['ngaydathang'] ?></td>
                    <td><?php echo number_format($bill['total']) ?> VND</td>
                    <td>
                        <form action="?act=ttdh" method="post">
                            <input type="hidden" name="iddh" value="<?php echo $bill['id'] ?>">

                            <select class="form-select" name="ttdh" aria-label="Default select example">
                                <?php for ($i = 0; $i < 4; $i++) : ?>
                                    <option value="<?= $i ?>" <?= ($bill['bill_status'] == $i) ? 'selected' : '' ?> <?= ($bill['bill_status']>$i)?'disabled':$i?>>
                                        <?php
                                        if ($i == 0 ) {
                                            echo 'Đơn Hàng Mới';
                                        } else if ($i == 1) {
                                            echo 'Đang Xử lý';
                                        } else if ($i == 2) {
                                            echo 'Đang Giao Hàng';
                                        } else if ($i == 3) {
                                            echo 'Đã nhận hàng';
                                        }else if($i==4){
                                            echo 'hoàn thành';
                                        }
                                        ?>
                                    </option>
                                <?php endfor ?>
                            </select>
                    </td>
                    <td><button type="submit" name="btnsub" class="btn btn-warning">Cập Nhật</button></td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
</div>