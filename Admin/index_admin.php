<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quản trị hệ thống</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../images/logo.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
</head>
<style>

</style>

<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top fixed-top">
    <a class="navbar-brand" href="index_admin.php"><i class='fas fa-home mr-1'></i>Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <?php
        if (isset($_SESSION['tendnadmin']) && $_SESSION['tendnadmin']) { ?>
          <li class='nav-item'><a class="nav-link text-white">Hello: <?php echo $_SESSION['tendnadmin']; ?></a></li>
        <?php } else { ?>
          <li class="nav-item"><a class="nav-link text-white" data-toggle="modal" data-target="#login" href=" #">Đăng nhập</a></li>
        <?php
        }
        ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="index_admin.php?nc=thoat"><i class='fas fa-share-square mr-1'></i>Thoát</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <div class="col-md-3 pl-2">
      <div class="card">
        <ul class="list-group list-group-flush text-white">
          <li class="list-group-item bg-dark"><a href="index_admin.php?nc=nhapsp"><i class="fas fa-caret-right mr-2"></i>Quản lý sản phẩm</a></li>
          <li class="list-group-item bg-dark"><a href="index_admin.php?nc=hsx"><i class="fas fa-caret-right mr-2"></i>Quản lý hãng sản xuất</a></li>
          <li class="list-group-item bg-dark"><a href="index_admin.php?nc=dmloai"><i class="fas fa-caret-right mr-2"></i>Quản lý loại</a></li>
          <li class="list-group-item bg-dark"><a href="index_admin.php?nc=tintuc"><i class="fas fa-caret-right mr-2"></i>Quản lý tin tức</a></li>
          <li class="list-group-item bg-dark"><a href="index_admin.php?nc=taikhoan"><i class="fas fa-caret-right mr-2"></i>Quản lý tài khoản người dùng</a></li>
          <li class="list-group-item bg-dark"><a href="index_admin.php?nc=thongke"><i class="fas fa-caret-right mr-2"></i>Thống kê đơn hàng</a></li>
          <li class="list-group-item bg-dark"><a href="index_admin.php?nc=hangton"><i class="fas fa-caret-right mr-2"></i>Thống kê hàng tồn</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-9 pr-5">
      <?php
      if ($_SESSION['tendnadmin'] != '') {
        if (isset($_GET['nc'])) {
          if ($_GET['nc'] == 'hsx') {
            require('dshsx.php');
          }
          if ($_GET['nc'] == 'themhsx') {
            require('fr_NhapHangSX.php');
          }
          if ($_GET['nc'] == 'suahsx') {
            require('fr_SuaHSX.php');
          }
          if ($_GET['nc'] == 'dmloai') {
            require('dsdmloai.php');
          }
          if ($_GET['nc'] == 'themloaisp') {
            require('fr_NhapLoaiSP.php');
          }
          if ($_GET['nc'] == 'sualoaispx') {
            require('fr_SuaLoaiSP.php');
          }
          if ($_GET['nc'] == 'nhapsp') {
            require('dssp.php');
          }
          if ($_GET['nc'] == 'themsp') {
            require('fr_NhapSanPham.php');
          }
          if ($_GET['nc'] == 'suasp') {
            require('fr_SuaSanPham.php');
          }
          if ($_GET['nc'] == 'tintuc') {
            require('dstintuc.php');
          }
          if ($_GET['nc'] == 'themtt') {
            require('fr_TinTuc.php');
          }
          if ($_GET['nc'] == 'view_suatt') {
            require('fr_SuaTinTuc.php');
          }
          if ($_GET['nc'] == 'chitietdh') {
            require('fr_ChiTietDH.php');
          }
          if ($_GET['nc'] == 'taikhoan') {
            require('dstaikhoan.php');
          }
          if ($_GET['nc'] == 'thongke') {
            require('fr_ThongKeDH.php');
          }
          if ($_GET['nc'] == 'xacnhan') {
            require('xulyxacnhan.php');
          }
          if ($_GET['nc'] == 'hangton') {
            require('fr_HangTon.php');
          }
          if ($_GET['nc'] == 'thoat') {
            session_destroy();
            header("location: ../admin/login_admin.php");
          }
        } else {
          include('home.php');
        }
      } else {
        header("location: login_admin.php");
      }
      ?>

    </div>
  </div>
  <div class="container-fluid p-0 mt-3">
    <div class="col-12 text-center text-white bg-dark py-3">
      <h5>&copy; tranvanthanh</h5>
    </div>
  </div>
</body>

</html>