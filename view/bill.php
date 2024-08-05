
<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="?act=sanpham" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Trở Lại</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">HanTai Shop</p>
                    <p class="mb-0">Bạn Có <?php if(isset($_SESSION['giohang'])){echo count($_SESSION['giohang']); } ?> Đơn Hàng</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>


                <?php

                if (isset($_SESSION['giohang'])) {
                  $i = 0;
                  $ttien = 0;
                  $sl = 0;
                  foreach ($_SESSION['giohang'] as $cart) {

                    $hinh = './upload/' . $cart['img'];

                ?>
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row align-items-center">
                            <div>
                              <img src="<?php echo $hinh ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                            </div>
                            <div class="ms-3">
                              <h5><?php echo $cart['name'] ?></h5>
                              
                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                              <h5 class="fw-normal mb-0"><?php echo $cart['soluong'] ?></h5>
                            </div>
                            <div style="width: 80px;">
                              <h5 class="mb-0"><?php echo number_format($cart['price']) ?> VND</h5>
                            </div>
                            <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                          </div>
                        </div>
                      </div>
                    </div><?php


                          $ttien +=$cart['price']*$cart['soluong'];
                          $sl += $sl + $cart['soluong'];
                          $i++;
                        }
                          ?>
                  <hr>
                  <div class="row">
                    <div class="col-4">
                      <p>Số Lượng :</p>
                    </div>
                    <div class="col-1">
                      <p><?php echo $i ?></p>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                      <p>Tổng Tiền :</p> <?php echo number_format($ttien) ?> VND
                    </div>

                  </div>


                <?php
                }
                ?>




              </div>
              <div class="col-lg-5">
                <?php
                if (isset($_SESSION['checkus'])) {

                  $fulname = $_SESSION['checkus']['user'];
                  $email = $_SESSION['checkus']['email'];
                  $diachi = $_SESSION['checkus']['address'];
                  $sdt = $_SESSION['checkus']['tel'];
                } else {
                  $fulname = '';
                  $email = '';
                  $diachi = '';
                  $sdt = '';
                }
                ?>
                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Thanh Toán</h5>
                      <!-- <img src="./upload/"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar"> -->
                    </div>

                    <p class="small mb-2">Card type</p>
                    <a href="#!" type="" class="text-white"><i class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                    <a href="#!" type="" class="text-white"><i class="fab fa-cc-visa fa-2x me-2"></i></a>
                    <a href="#!" type="" class="text-white"><i class="fab fa-cc-amex fa-2x me-2"></i></a>
                    <a href="#!" type="" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>

                    <form class="mt-4" method="post" action="?act=cfbill">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" name="hoten" value="<?php echo $fulname ?>" siez="19" placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Họ Tên</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="19" placeholder="Số điện thoại" minlength="10" name="numberphone" maxlength="10" value="<?php echo $sdt ?>" />
                        <label class="form-label" for="typeText">Số Điện Thoại</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="Email" size="7" id="exp" name="mail" value="<?php echo $email ?>" minlength="7" maxlength="15" />
                            <label class="form-label" for="typeExp">Email</label>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <select class="form-select form-select-sm" name="pttt" aria-label="Small select example">
                            <option value="1" selected>Tiền Mặt</option>
                            <option value="2">Online Banking</option>
                            <option value="3">Thẻ Ghi Nợ (Visa)</option>
                            <option value="4">...</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17" placeholder="Địa Chỉ" minlength="2" name="address" maxlength="30" value="<?php echo $diachi ?>" />
                        <label class="form-label" for="typeText">Địa Chỉ</label>
                      </div>



                      <hr class="my-4">

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Giá Tiền</p>
                        <p class="mb-2"><?php echo number_format($ttien) ?> VND</p>
                      </div>

                      <div class="d-flex justify-content-between">
                        <p class="mb-2">Giao Hàng</p>
                        <p class="mb-2">0 VND</p>
                      </div>

                      <div class="d-flex justify-content-between mb-4">
                        <p class="mb-2">Tổng Tiền</p>
                        <p class="mb-2"><?php echo number_format($ttien) ?> VND</p>
                      </div>

                      <button type="submit" name="submitmuahang" class="btn btn-info btn-block btn-lg">
                        <div class="d-flex justify-content-between">
                          <span><?php echo number_format($ttien) ?> VND</span>
                          <span>Thanh Toán <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                        </div>
                      </button>
                    </form>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

