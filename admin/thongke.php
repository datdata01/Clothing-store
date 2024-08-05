<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container">
    <a href="?act=home">
        << back</a>
        <button style="float: right;" type="submit" name="btnsub" class="btn btn-warning"><a style="text-decoration: none;"  href="index.php?act=bieudo"><strong style="color: white;">Thống Kê SP theo DM</strong></a></button>

            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            echo '<tr>
                                    <td>' . $madm . '</td>
                                    <td>' . $tendm . '</td>
                                    <td>' . $countsp . '</td>
                                    <td>' . $maxprice . '</td>
                                    <td>' . $minprice . '</td>
                                    <td>' . $avgprice . '</td>
                                </tr>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
                        <!--  -->
                        <!-- Thêm các thẻ bảng và vòng lặp -->
<table>
    <thead>
        <p style="color:green; font-size:20px;">Lương cty</p>
        <tr>
            <th>Trạng thái</th>
            <th>||</th>
            <th>Tổng doanh thu</th>
         
        </tr>
    </thead>
    <tbody>
        <?php foreach ($thongkedt as $tk): ?>
            <?php if($tk['bill_status']<3){$tt ='chưa nhận tiền(khả năng trả hàng)';}elseif($tk['bill_status']==3){$tt= 'đẫ nhận chưa phản hồi(khả năng hoàn tiền)';}else{$tt='hoàn thành';}?>
            <tr>
                <td><?= $tt ?></td>
                <td>||</td>
                <td><?= $tk['total_doanhthu'] ?></td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

                        
                        
                        <!--  -->

            <div class="row">
            <header>
            <h1>Thống Kê Doanh Thu</h1>
            </header>
        
                <section class="revenue">
                <div class="container">
                <canvas id="revenueChart"></canvas>
                </div>
                </section>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script src="script.js"></script>
            </div>


            <canvas id="doanhThuChart" width="400" height="200"></canvas>
           
            <!-- -----------------------------------------test -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
$(document).ready(function() {
    // Gọi hàm loadall_doanhthu để lấy dữ liệu từ cơ sở dữ liệu
    loadall_doanhthu().then(function(data) {
        // Chuẩn bị dữ liệu cho biểu đồ
        var labels = [];
        var revenues = [];

        data.forEach(function(item) {
            labels.push(item.bill_status);
            revenues.push(item.total_revenue);
        });

        // Vẽ biểu đồ
        var ctx = document.getElementById('doanhThuChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Doanh thu',
                    data: revenues,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
});

function loadall_doanhthu() {
    // Thực hiện truy vấn để lấy dữ liệu từ cơ sở dữ liệu
    return $.ajax({
        url: 'DUAN_MAIN/model/cart.php', // Điều chỉnh đường dẫn đến script PHP xử lý truy vấn
        method: 'GET',
        dataType: 'json'
    });
}
</script>

            
            
            
            <!-- -----------------------------------------------test -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Giả sử bạn có dữ liệu doanh thu theo tháng
            var months = ['Tháng 12'];
            
            var revenueData = [500000];

            var ctx = document.getElementById('revenueChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Doanh Thu (VNĐ)',
                        data: revenueData,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            });
        </script>

</div>