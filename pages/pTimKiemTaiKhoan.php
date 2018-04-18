<form action="pAdmin.php?b=21&flag=1" method="POST" align ="center">
    <input type="text" name="valueSearch">
    <input type="submit" name="btnTim" value="Tìm">
</form>

<table align="center" cellspacing="0" cellpadding="7">
      <tr>
        <th>Mã tài khoản</th>
        <th>Tên tài khoản</th>
        <th>Mật khẩu</th>
        <th>Tên hiển thị</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
        <th>Email</th>
        <th>Bị xóa</th>
        <th>Mã loại tài khoản</th>
      </tr>
      <?php
        if(isset($_GET["flag"]) && $_GET["flag"] == 1)
        {
            $tuKhoa = $_POST["valueSearch"];         
      
            $sql = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan
                    FROM TaiKhoan WHERE TenDangNhap like '%$tuKhoa%'";
            $result = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($result))
            {
                $maTK = $row["MaTaiKhoan"];
                $tenTK = $row["TenDangNhap"];
                $matKhau = $row["MatKhau"];
                $tenHienThi = $row["TenHienThi"];
                $diaChi = $row["DiaChi"];
                $dienThoai = $row["DienThoai"];
                $email = $row["Email"];
                $biXoa = $row["BiXoa"];
                $maLoaiTK= $row["MaLoaiTaiKhoan"];      
                ?>
                <tr>
                <td><?php echo"$maTK" ?></td>
                <td><?php echo"$tenTK" ?></td>
                <td><?php echo"$matKhau" ?></td>
                <td><?php echo "$tenHienThi" ?></td>
                <td><?php echo "$diaChi" ?></td>
                <td><?php echo"$dienThoai" ?></td>
                <td><?php echo "$email" ?></td>
                <td><?php echo "$biXoa" ?></td>
                <td><?php echo"$maLoaiTK" ?></td>
                
              </tr>
              <?php
            }
      ?>
    </table>
    <?php
        }
    ?>