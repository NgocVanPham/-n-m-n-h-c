 <?php
	require("../connect/connect.php");
?>
<div class="row">
    <div class="col-12">
<form action="" method="POST" enctype="multipart/form-data">
    <h3 class="text-center">CHỨC NĂNG THÊM LOẠI SẢN PHẨM</h3>
    <div class="form-group">
      <label>Tên loại:</label>
      <input type="text" class="form-control" name="txt_TenLoai">
    </div>
    <div class="form-group">
      <label>Trạng thái:</label>
      <select name="txt_TrangThai" class="form-control">
        <option value="1">Hiển thị</option>
        <option value="0">Không hiển thị</option>
      </select>
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-primary w-50 mb-5" name="btn_themloaisp">Thêm HSX</button>
    </div>
    <?php require('xulynhaploaisp.php');?>
  </form>
    </div>
</div>