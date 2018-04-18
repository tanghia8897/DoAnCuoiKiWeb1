<?php
include_once ('lib/DataProvider.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Administrator</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
</head>
<body>
<div id="wallpaper">
  <img src="images/root.jpg" alt="admin">
</div>
<div id="menu">
  <ul>
    <li><a href="index.php" style="margin-left: 350px">Trang chủ</a></li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Sản phẩm</a>
      <div class="dropdown-content">
        <a href="pAdmin.php?b=2">Thêm</a>
        <a href="pAdmin.php?b=3">Xóa</a>
        <a href="pAdmin.php?b=4">Sửa</a>
        <a href="pAdmin.php?b=5">Liệt kê</a>
        <a href="pAdmin.php?b=6">Tìm kiếm</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Loại sản phẩm</a>
      <div class="dropdown-content">
        <a href="pAdmin.php?b=7">Thêm</a>
        <a href="pAdmin.php?b=8">Xóa</a>
        <a href="pAdmin.php?b=9">Sửa</a>
        <a href="pAdmin.php?b=10">Liệt kê</a>
        <a href="pAdmin.php?b=11">Tìm kiếm</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Nhà sản xuất</a>
      <div class="dropdown-content">
      <a href="pAdmin.php?b=12">Thêm</a>
      <a href="pAdmin.php?b=13">Xóa</a>
      <a href="pAdmin.php?b=14">Sửa</a>
      <a href="pAdmin.php?b=15">Liệt kê</a>
      <a href="pAdmin.php?b=16">Tìm kiếm</a>
    </div>
    </li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Tài khoản</a>
      <div class="dropdown-content">
        <a href="pAdmin.php?b=17">Thêm</a>
        <a href="pAdmin.php?b=18">Xóa</a>
        <a href="pAdmin.php?b=19">Sửa</a>
        <a href="pAdmin.php?b=20">Liệt kê</a>
        <a href="pAdmin.php?b=21">Tìm kiếm</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Đơn hàng</a>
      <div class="dropdown-content">
        <a href="pAdmin.php?b=22">Thêm</a>
        <a href="pAdmin.php?b=23">Xóa</a>
        <a href="pAdmin.php?b=24">Sửa</a>
        <a href="pAdmin.php?b=25">Liệt kê</a>
        <a href="pAdmin.php?b=26">Tìm kiếm</a>
      </div>
    </li>
  </ul>
  </div>
  <div id="content">
      <hr>
      <?php include ("pages/pQuanLyTongHop.php") ?>
  </div>
</body>
</html>