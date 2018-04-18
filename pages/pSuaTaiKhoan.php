<div id="frmUpdate" align="center">
<form id="frmUpdate" action="pAdmin.php?b=19" method="POST">
      <label style="font-size: 17px;">Chọn tên tài khoản cần sửa</label>
      <select name="tenTK" id="tenTK">
        <?php
        $sql = "SELECT TenDangNhap
        FROM TaiKhoan";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $tenTK = $row["TenDangNhap"]
        ?>
        <option value="<?php echo"$tenTK" ?>"><?php echo"$tenTK" ?></option>
        <?php
          } 
        ?>
      </select> <br>
      Mật khẩu <input type="text" name="matKhau"><br>
      Tên hiển thị <input type="text" name="tenHienThi"> <br>
      Địa chỉ <input type="text" name="diaChi"> <br>
      Điện thoại <input type="number" name ="dt"> <br>
      Email <input type="email" name="email"> <br>
      Mã loại tài khoản 
      <select name="maLoaiTK" id="maLoaiTK">
        <?php
        $sql = "SELECT MaLoaiTaiKhoan
        FROM LoaiTaiKhoan";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $maLoaiTK = $row["MaLoaiTaiKhoan"]
        ?>
        <option value="<?php echo"$maLoaiTK" ?>"><?php echo"$maLoaiTK" ?></option>
        <?php
          } 
        ?>
      </select> <br>
      <input type="submit" name="btnSua" value="Sửa">
    </form>
    <?php
      if(isset($_POST["btnSua"]))
      {
        $ten = $_POST["TenTK"];
        $matKhau = $_POST["matKhau"];
        $tenHienThi = $_POST["tenHienThi"];
        $diaChi = $_POST["diaChi"];
        $dienThoai = $_POST["dt"];
        $email = $_POST["email"];
        $maLoaiTK = $_POST["maLoaiTK"];
        $sql = "UPDATE TaiKhoan
        SET MatKhau = '$matKhau', TenHienThi = '$tenHienThi', DiaChi = '$diaChi', DienThoai = '$dienThoai', Email ='$email', MaLoaiTaiKhoan = '$maLoaiTK'
        WHERE TenDangNhap like '".$ten."' ";
        DataProvider::ExecuteQuery($sql);
      }
    ?>
</div>
