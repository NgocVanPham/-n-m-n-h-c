<?php
require("../connect/connect.php");
?>
<div class="alert alert-primary mt-3" role="alert">
  <h3>SẢN PHẨM</h3>
</div>
<div class="row">
    <div class="col-md-4 text-center">
        <div class="card text-white bg-primary mb-3 w-100" >
            <div class="card-header"><h4>TỔNG SẢN PHẨM</h4></div>
            <div class="card-body">
                <p class="card-text" style="font-size: 50px;">
                    <?php
                    $sql_sumsp = "select  sum(SoLuong) from tbl_dmsp";
                    $kq = mysqli_query($con, $sql_sumsp);
                    $row = mysqli_fetch_assoc($kq);
                    echo $row['sum(SoLuong)'];
                    ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 text-center">
        <div class="card text-white bg-success mb-3">
            <div class="card-header"><h4>SẢN PHẨM ĐÃ BÁN</h4></div>
            <div class="card-body">
                <p class="card-text" style="font-size: 50px;">
                    <?php
                    $sql_sumsp = "select  sum(SoLuongBan) from tbl_dmsp";
                    $kq = mysqli_query($con, $sql_sumsp);
                    $row = mysqli_fetch_assoc($kq);
                    echo $row['sum(SoLuongBan)'];
                    ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4 text-center">
        <div class="card text-white bg-secondary mb-3">
            <div class="card-header"><h4>SẢN PHẨM CÒN</h4></div>
            <div class="card-body">
                <p class="card-text" style="font-size: 50px;">
                    <?php
                    $sql_sumsp = "select  (sum(SoLuong) - sum(SoLuongBan)) from tbl_dmsp";
                    $kq = mysqli_query($con, $sql_sumsp);
                    $row = mysqli_fetch_assoc($kq);
                    echo $row['(sum(SoLuong) - sum(SoLuongBan))'];
                    ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row col-12 p-0">
    <div class="card text-white bg-warning mb-3 ml-3 pl-0 w-100">
        <div class="card-header text-center"><h4>TỔNG DOANH THU</h4></div>
        <div class="card-body">
            <p class="card-text text-center" style="font-size: 50px;">
                <?php
                $sql_sumsp = "select  sum(SoLuong * Gia) from tbl_hoadonchitiet";
                $kq = mysqli_query($con, $sql_sumsp);
                $row = mysqli_fetch_assoc($kq);
                echo number_format($row['sum(SoLuong * Gia)'], 0).' đ';
                ?>
            </p>
        </div>
    </div>
</div>