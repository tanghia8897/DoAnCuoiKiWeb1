<form action="pAdmin.php?b=17" method="POST" align="center">
      Mã tài khoản  <input type="number" name="Ma" id="Ma"><br>
      Tên đăng nhập <input type="text" name="txtTen"><br>
      Mật khẩu <input type="text" name="URL"><br>
      Tên hiển thị <input type="txtTenHT"> <br>
      Địa chỉ <input type="text" name="txtDiaChi"> <br>
      Điện thoại <input type="number" name="dienThoai"> <br>
      Email <input type="email" name="email"> <br>
      Mã loại tài khoản
      <select name="loaiTK" id="loaiTK">
        <?php
        $sql = "SELECT distinct MaLoaiTaiKhoan
        FROM LoaiTaiKhoan";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $maTK = $row["MaLoaiTaiKhoan"]
        ?>
        <option value="<?php echo"$maTK" ?>"><?php echo"$maTK" ?></option>
        <?php
          } 
        ?>
      </select> <br>
      <input type="submit" name="btnThem" value="Thêm">
</form>
    <?php
      if(isset($_POST["btnThem"]))
      {
        $ma = $_POST["Ma"];
        $tenDN = $_POST["txtTen"];
        $tenHienThi = $_POST["txtTenHT"];
        $diaChi = $_POST["txtDiaChi"];
        $dienThoai = $_POST["dienThoai"];
        $email = $_POST["email"];
        $maLoaiTK = $_POST["loaiTK"];
        $sql = "insert into TaiKhoan(MaTaiKhoan, TenDangNhap, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan)
        values('".$ma."', '".$tenDN."', '".$tenHienThi."', '".$diaChi."', '".$dienThoai."', '".$email."', 0, '".$maLoaiTK."')";
        DataProvider::ExecuteQuery($sql);
      }
    ?>