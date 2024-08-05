
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container">
    <a href="?act=home"><< back</a>
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
    <?php foreach($listbill as $value):?>
    <tr>
      <th scope="row"><?php echo $value['id']?></th>
      <td><?php echo $value['bill_name']?></td>
      <td><?php echo $value['bill_address']?></td>
      <td><?php echo $value['bill_address']?></td>
      <td><?php echo $value['bill_email']?></td>
      <td><?php 
      switch($value['bill_pttt']){
        case 0:{
            echo "thanh toán trực tiếp";
            break;
        }
        case 1:{
            echo "chuyển khoản";
            break;
        }
        case 2:{
            echo "thanh toán online";
            break;
        }
        default: echo "thanh toán trực tiếp";
        break;
      }
      ?></td>
      <td><?php echo $value['ngaydathang']?></td>
      <td><?php echo number_format($value['total'])?> VND</td>
      <td><?php 
            switch($value['bill_status']){
                case 0:{
                    echo "Đơn Hàng Mới";
                    break;
                }
                case 1:{
                    echo "Đang xử lý ";
                    break;
                }
                case 2:{
                    echo "Đang giao hàng";
                    break;
                }
                case 3:{
                    echo "Đã nhận hàng";
                    break;
                }
                case 4:{
                  echo "hoàn thành";
                  break;
                }
                default: echo "Đơn Hàng Mới";
                break;
              }
      ?></td>
      <td><a href="?act=ttdh&iddh=<?php echo $value['id']?>">xem</a></td>

    </tr>
    <?php endforeach;?>
    
  </tbody>
</table>
    </div>
</div>