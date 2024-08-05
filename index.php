<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/danhmuc.php";
include "model/cart.php";
include "model/donhang.php";
include "gobal.php";
if(!isset($_SESSION['giohang'])) {$_SESSION['giohang']=[];}

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc_home();
$sptop = loadall_sanpham_top5();

$top10 = top10_sanpham();
$dssp = danhsach_sanpham();
$dsdp = danhsach_danhmuc();
?>

<?php
include "view/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'lienhe':
            include "view/lienhe.php";
            break;


// đăng nhập, đăng ký


        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($user, $email, $pass);
                header('location: ?act=login');
            }
            include "view/login/dangki.php";
            break;


        case 'login': 
                if (isset($_POST['sublogin'])) {

                    $uname = $_POST['user'];
                    $password = $_POST['pass'];
                    $checkus = checkuser($uname, $password);
                    if (is_array($checkus)) {
                        $_SESSION['checkus'] = $checkus; 
                        header('location: ?act=home');
                    } else {
                        $thongbaolg = "Tài khoản sai hoặc không tòn tại vui lòng kiểm tra lại";
                    }
                }
                //
                include 'view/login/login.php';
                break;

        case 'edittk':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $id = $_POST['id'];
                        $role=$_POST['role'];
                        update_taikhoan($id, $user, $pass, $email, $address, $tel, $role);
                        $_SESSION['user'] = checkuser($user, $pass); //cạp nhật mới lại sau khi đã edit
                        $thongbao = "Cập nhật thành công!";  
                    }
                    include "view/login/edit.php";
                    break;
        case 'quenmk':
                    if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                        $email = $_POST['email'];
                        $checkemail = checkemail($email);
                        if (is_array($checkemail)) {
                            $thongbao = "Mật khẩu của bạn là :" . $checkemail['pass'];
                        } else {
                            $thongbao = "Email này không tồn tại";
                        }
                    }
                    include "view/login/quenmk.php";
                    break;        
            

        case 'logout': 
                unset($_SESSION['checkus']);
                header('location: ?act=home');
                break;


// sản phẩm

        case 'sanpham': 

                include "view/sanpham/allsanpham.php";
                break;
            
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;



            
        case 'sptheodanhmuc': 
                if (isset($_GET['iddm']) && ($_GET['iddm'])) {
                    $spcungloai = loadsp_theodanhmuc($_GET['iddm']);
                }
                include "view/chitietdm.php";
                break;
                
        case 'timkiem':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham/allsanpham.php";
            break;
            


        case 'home': 
                include "view/home.php";
                break;
            
        case 'buy':
            if(isset($_POST['submitbuy'])){
                $idsp = $_POST['idsp'];
                $img = $_POST['img'];
                $name = $_POST['namesp'];
                $gia = $_POST['gia'];
                $sl = $_POST['sl'];
                $ttien = tongbill();
                $addcart = [$idsp,$img,$name,$gia,$sl,$ttien];
                array_push($_SESSION['giohang'],$addcart);
                header('location: ?act=bill');
            }
            break;

        
// hóa đơn(bill)

        case 'bill':
            if(!empty($_SESSION['giohang'])){
                include 'view/bill.php';
            }else{
                header("location:?act=sanpham&thongbap=add giỏ hàng");
            }
            
            break;
  
        

        case 'cfbill':
            if(isset($_POST['submitmuahang']) && $_SESSION['giohang']!=null){

              if(isset($_SESSION['checkus'])){
                $iduser= $_SESSION['checkus']['id'];
            }
              else{ 
                $iduser= 0;
            }
                $name = $_POST['hoten'];
                $email = $_POST['mail'];
                $diachi = $_POST['address'];
                $sdt = $_POST['numberphone'];
                $datedh = date('Y-m-d');
                $tongbill = tongbill();
                $pttt = $_POST['pttt'];
                $id = add_bill($name,$email,$diachi,$sdt,$pttt,$datedh,$tongbill,$iduser);

                foreach($_SESSION['giohang'] as $cart){
                    $tong=0;
                    $tong += $cart['price'] * $cart['soluong'];
                  add_cart($_SESSION['checkus']['id'],$cart['id'],$cart['img'],$cart['name'],$cart['price'],$cart['soluong'],$tong,$id);
                                                            
                    
                }
                $_SESSION['giohang'] = [];
                $listbill = loadone_bill($id);
                $billct = loadone_card($id);
                include 'view/hoadon.php';
            }else{
                echo "vì bạn đã load lại trang nên bạn vui lòng sang trang đơn hàng để xem lại";
                header("location:?act=sanpham.php");
                exit();
            }
            
            
            break;


            case 'delbill':
                if(isset($_SESSION['checkus'])&&($_SESSION['checkus'])){
                    $idkh =  $_SESSION['checkus']['id'];
                    $dh = loadallbill_kh($idkh);
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $id = $_GET['id'];
                        delete_hd($id);
                    }
                    if($dh==null){
                     $thongbao="chưa có gì"; 
                     } 
                 }else{
                     $thongbao= "bạn cần đăng nhập để xem";
                 }
                //  include 'view/lichsudonhang.php';
                header('location:?act=lichsudonhang');
    
    
            break;


            case 'delhd':// xóa sản phẩm trong giỏ hàng
                if(isset($_GET['idhd'])){  
                    array_splice($_SESSION['giohang'],$_GET['idhd'],1);
                  } else {
                    $_SESSION['giohang']=[];
                  }
                  header('location: ?act=sanpham');
                break;



            case 'xacnhanbill':
                if(isset($_GET['id']) && $_GET['ttdh']>3){
                $id=$_GET['id'];
                $ttdh=$_GET['ttdh'];
                thaydoi_trangthai($ttdh,$id);
                echo " <p style='color:red; font-size:20px;' >----------------------------------cảm ơn Bạn đã đánh giá chúng tôi 5*</p>";
                }else{
                    echo "ôi hỏng";
                    var_dump($ttdh);
                }
                $idkh =  $_SESSION['checkus']['id'];
                $dh = loadallbill_kh($idkh);
                include "view/lichsudonhang.php";
                break;   


// lịch sử đơn hàng


          case 'dhct':
            $id=$_GET['id'];
              $listbill = loadone_bill($id);
              $billct = loadone_card($id);

            include "view/hoadon.php";
            break;          


          case 'lichsudonhang':
            if(isset($_SESSION['checkus'])&&($_SESSION['checkus'])){
               $idkh =  $_SESSION['checkus']['id'];
               $dh = loadallbill_kh($idkh);
               if($dh==null){
                $thongbao="chưa có gì"; 
                } 

          include 'view/lichsudonhang.php';
            }else{
                echo "ko có checkuss";
            }
          break;

          
// thao tác giỏ hàng          
        
        case 'giohang':    
            if(isset($_SESSION['checkus']) && $_SESSION['checkus']){
                include "view/giohang.php";
            }else{
                echo '<span style="color:red; text-align:center;"><a href="?act=login">bạn phải đăng nhập.</a></span>';
            }  
            break;
        
        case 'themvaogiohang':
            if(isset($_SESSION['checkus']) && $_SESSION['checkus']){
              
                if (isset($_POST['idsp'])) {
                    $idSanPham = $_POST['idsp'];
                    $sanPham = loadone_sanpham($idSanPham);
                    print_r($sanPham);
                    $id=(int)($idSanPham);
                    // Kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
                    $sanPhamDaCo = false;
                    foreach ($_SESSION['giohang'] as $sp){ 
                        if ($sp['id'] === $id) {
                            $soluong=$sp['soluong'];
                            $soluong+=1;
                            $sp['soluong']=$soluong;
                            $sanPhamDaCo = true;
                            break;
                        }
                    }
                
                    // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
                    if (!$sanPhamDaCo) {
                        $sanPham['soluong'] = 1;
                        $_SESSION['giohang'][] = $sanPham;
                    }
                    // Chuyển hướng người dùng đến trang giỏ hàng
                  
                    
                }
                    include "view/giohang.php";
            }else{
                    header("location:?act=login");
            }
            break;
            
            

        case 'updategiohang':
                if (isset($_POST['soluong'])) {
                        $soluong = $_POST['soluong'];
                        foreach ($soluong as $key => $value) {
                            if($value>0){
                                $_SESSION['giohang'][$key]['soluong'] = $value;
                                $id=$_SESSION['giohang'][$key]['id'];
                                update_cart($value,$id);
                            }
                         
                        }
                    }
                    include "view/giohang.php";
                    break;
                
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe.php':
            include "view/lienhe.php";
            break;
        

        default:
            include "view/home.php";
            break;
        
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
?>
