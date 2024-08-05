<?php
function tongbill()
{
    $tong = 0;
    if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
        foreach ($_SESSION['giohang'] as $cart) {
            $tong += $cart['price'] * $cart['soluong'];
        }
    }
    return $tong;
}

function add_bill($name, $email, $diachi, $sdt, $pttt, $ngaydh, $tongdh, $iduser)
{
  $sql = "insert into `bill`(`bill_name`,`bill_email`,`bill_address`,`bill_tel`,`bill_pttt`,`ngaydathang`,`total`,`id_kh`) values('$name','$email','$diachi','$sdt','$pttt','$ngaydh','$tongdh','$iduser')";
  return pdo_execute_id($sql);
}
function add_cart($iduser, $idpro, $img, $name, $price, $sl, $ttien, $idbill)
{
  $sql = "insert into `cart`(`iduser`,`idpro`,`img`,`name`,`price`,`soluong`,thanhtien,`idbill`) values('$iduser','$idpro','$img','$name','$price','$sl','$ttien',$idbill)";
  pdo_execute($sql);
}

function loadone_bill($idbill)
{
  $sql = "select * from bill where id = $idbill";
  $result = pdo_query_one($sql);
  return $result;
}

function loadone_card($idbill)
{
  $sql = "select * from cart where idbill = $idbill";
  $result = pdo_query($sql);
  return $result;
}
function update_cart($soluong,$id){
      // Sử dụng prepared statement để ngăn chặn SQL injection
      $sql = "UPDATE `cart` SET `soluong` = $soluong WHERE `idpro` = $id";
      pdo_execute($sql);
}

function loadall_bill(){
  $sql = "select * from bill";
  return pdo_query($sql);
}

function thaydoi_trangthai($ttdh, $iddh){
  $sql = "update bill set `bill_status` = '$ttdh' where `id` = '$iddh'";
  pdo_execute($sql);
}

function loadallbill_kh($idkh){
  $sql = "select * from bill where id_kh = $idkh";
  return pdo_query($sql);
}

function loadall_thongke(){
$sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
$sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
$sql.=" group by danhmuc.id order by danhmuc.id desc";
$listtk=pdo_query($sql);
return $listtk;
}

function loadall_doanhthu() {
 $sql=" SELECT
  bill_status,
  SUM(total) AS total_doanhthu
FROM
  bill
GROUP BY
  bill_status";

  $listtk=pdo_query($sql);
  return $listtk;
}


function delete_hd($iddh){
  $sql = "delete from `bill` where id='$iddh'";
  pdo_execute($sql);
}
