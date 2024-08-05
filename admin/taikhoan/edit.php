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
            <h2>List Tài Khoản</h2>
        </div>
        <div class="bangl">
            <form action="?act=updatetk"  method="post">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TK</th>
                    <th>Tên Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Số Điện Thoại</th> 
                    
                    <th>Vai Trò</th>
                    <th>Active</th>
                </tr>
                <!-- -----------cách 1------------- -->
                <!-- <?php
                ?> -->
                <!-- -----------cách 2------------- -->
                <?php
                            # code..
                            extract($tk);
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>  
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            
                        </tr>';
                    ?>
                    <tr>
                        <td></td>
                        <td><input type="hidden" name="id" value='<?=$id?>'></td>
                        <td><input type="text" name="user" value='<?=$user?>'></td>
                        <td><input type="text" name="pass" value='<?=$pass?>'></td>
                        <td><input type="text" name="email" value='<?=$email?>'></td>
                        <td><input type="text" name="address" value='<?=$address?>'></td>
                        <td><input type="text" name="tel" value='<?=$tel?>'></td>
                        <td><input type="text" name="role" value='<?=$role?>'></td>
                        <td><input type="text" name="active" value="chưa kích hoạt"></td>
                        <td><button type="submit" name="submit">Sửa</button></td>
                        
                    </tr>
                
            </table>
            <form>
           
        </div>

    </div>

</div>