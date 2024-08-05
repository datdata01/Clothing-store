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
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
      if($dh!=null):
        foreach ($dh as $value) :

          ?>
            <tr>
              <th scope="row"><?php echo $value['id'] ?></th>
              <td><?php echo $value['bill_name'] ?></td>
              <td><?php echo $value['bill_address'] ?></td>
              <td><?php echo $value['bill_address'] ?></td>
              <td><?php echo $value['bill_email'] ?></td>
              <td><?php
                  switch ($value['bill_pttt']) {
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
              <td><?php echo $value['ngaydathang'] ?></td>
              <td><?php echo number_format($value['total']) ?> VND</td>
              <td><?php
                  switch ($value['bill_status']) {
                    case 0: {
                      echo "Đơn Hàng Mới";
                      echo '<td><a href="?act=delbill&id=' . $value['id'] . '" class="btn btn-warning"><strong style="color: white;">Hủy Đơn</strong></a></td>';
                      break;
  
                        break;
                      }
                    case 1: {
                        echo "Đang xử lý ";
                        echo '<td><a href="?act=delbill&id='.$value['id'].'" class="btn btn-warning" style="color: white; text-decoration: none;"><span><Strong>Hủy Đơn</Strong></span></a></Strong></button></td> ';
                        break;
                      }
                    case 2: {
                        echo "Đang giao hàng";
                        echo '<td> <p style="color: red;">Không thể hủy</p></td>';
                        break;
                      }
                    case 3: {
                        echo "Đã nhận hàng";
                        echo '<td><a href="?act=xacnhanbill&id='.$value['id'].'&ttdh=4" class="btn btn-warning" style="color: white; text-decoration: none;"><span><Strong>Xác nhận</Strong></span></a></Strong></button></td> ';
                        break;
                      }
                    case 4:{
                        echo "<p style='color:red;'>hoàn thành<p>";
                        break;
                    }
                    default:
                      echo "Đơn Hàng Mới";
                      break;
                  }
                  ?></td>
                </td>
                
                <td><a href="?act=dhct&id='<?=$value['id']?>'">chi tiết</a></td>;
  
  
            </tr>
          <?php endforeach;  
             
        
        endif;
        
          
          ?>
          <td><a href="?act=sanpham"class="btn btn-warning" style="color: white; text-decoration: none;">quay lại</a></td>;
          <?php echo isset($thongbao)?$thongbao:''; ?>
        
      </tbody>
    </table>
  </div>
</div>