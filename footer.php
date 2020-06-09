<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4 p-0">
                <h5 class="mt-3">THÔNG TIN</h5>
                <hr class="light">
                <p>SĐT: 0354293658</p>
                <p>Email: ngocvanpham1998@gmail.com</p>
                <p>Địa chỉ: 36/44/13A-BINH THANH </p>
                <div class="col-12 social padding">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <h5 class="mt-3">LOẠI XE</h5>
                <hr class="light">
                <ul class="nav flex-column">
                    <?php
                    require('./connect/connect.php');
                    $sql = "Select * from tbl_dmloai order by IDLoai asc";
                    $query = mysqli_query($con, $sql);
                    if (mysqli_num_rows($query) > 0) {
                        while ($rows = mysqli_fetch_array($query)) { ?>
                            <li class="nav-item"><a class="nav-link" href="index.php?action=loaisp&idloai=<?php echo $rows['IDLoai']; ?>"><?php echo $rows['TenLoai']; ?></a></li><?php
                        }
                    } else echo "Không có dữ liệu";
                    ?>
            </div>
            </ul>

            <div class="col-md-4 p-0">
                <h5 class="mt-3">TIỆN ÍCH</h5>
                <hr class="light">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Phụ tùng xe máy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dầu nhớt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giá xe SH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giá xe Exciter 150</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giá xe Winnwe X</a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; ngocvanpham</h5>
            </div>
        </div>
    </div>
</footer>