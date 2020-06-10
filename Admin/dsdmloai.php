<div class="alert alert-primary mt-3 text-center" role="alert">
    <h3>DANH SÁCH HÃNG SẢN XUẤT</h3>
</div>
<div>
    <a href="index_admin.php?nc=themloaisp">
        <button class="btn btn-danger mr-4 mb-2"><i class='fas fa-arrows-alt mr-1'></i>Thêm mới</button>
    </a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered" cellspacing="0">
        <thead>
            <tr class="bg-primary">
                <th>STT</th>
                <th>Tên loại</th>
                <th>Trạng thái</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'xemay');
            mysqli_set_charset($con, 'utf8');
            $sql_table_hsx = "SELECT * FROM tbl_dmloai order by IDLoai ASC";
            $kq = mysqli_query($con, $sql_table_hsx);
            $i = 1;
            while ($row = mysqli_fetch_assoc($kq)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['TenLoai']; ?></td>
                    <td><?php if ($row['TrangThai'] == 1) {
                                echo "Hiển thị";
                            } else {
                                echo "Không hiển thị";
                            }; ?></td>
                    <td style="vertical-align: middle; text-align: center;">
                        <a href="index_admin.php?nc=sualoaispx&id=<?php echo $row['IDLoai']; ?>">
                            <button class="btn btn-success">Sửa</button>
                        </a>
                    </td>
                    <td style="vertical-align: middle; text-align: center;">
                        <a onclick="return confirm('Bạn có chắc là muốn xóa hãng sản xuất này không?');" href="index_admin.php?nc=dmloai&action=deleteloaisp&id=<?php echo $row['IDLoai'];?>">
                            <button class="btn btn-danger">Xóa</button>
                        </a>
                    </td>
                    <?php require('xulynhaploaisp.php'); ?>
                </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>