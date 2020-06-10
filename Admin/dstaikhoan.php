<div class="alert alert-primary mt-3 text-center" role="alert">
    <h3>DANH SÁCH TÀI KHOẢN NGƯỜI DÙNG</h3>
</div>
    <table id="example" class="table table-striped table-bordered table-responsive table-responsive-md" cellspacing="0">
        <thead>
            <tr class="bg-primary">
                    <th class="align-middle">STT</th>
                    <th class="align-middle">Tên đăng nhập</th>
                    <th class="align-middle">Họ và Tên</th>
                    <th class="align-middle">Địa chỉ</th>
                    <th class="align-middle">Số điện thoại</th>
                    <th class="align-middle">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'xewebbanxemaymay');
            mysqli_set_charset($con, 'utf8');
            $sql_table_member = "SELECT * FROM tbl_member order by ID ASC";
            $kq = mysqli_query($con, $sql_table_member);
            $i=1;
            while ($row = mysqli_fetch_assoc($kq)) {
                ?>
                <tr>
                    <td class="align-middle"><?php echo $i; ?></td>
                    <td class="align-middle"><?php echo $row['User']; ?></td>
                    <td class="align-middle"><?php echo $row['HoTen']; ?></td>
                    <td class="align-middle"><?php echo $row['DiaChi']; ?></td>
                    <td class="align-middle"><?php echo $row['SDT']; ?></td>
                    <td class="align-middle"><?php echo $row['Email']; ?></td>
                </tr>
            <?php
            $i++;
            }
            ?>
        </tbody>
    </table>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
