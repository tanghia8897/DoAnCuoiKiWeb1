<table align="center" cellspacing="0" cellpadding="7">
      <tr>
        <th>Mã tài khoản</th>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
        <th>Tên hiển thị</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Bi xóa</th>
        <th>Mã loại tài khoản</th>
      </tr>
      <?php
            $sql = "SELECT MaTaiKhoan, TenDangNhap, MatKhau, TenHienThi, DiaChi, DienThoai, Email, BiXoa, MaLoaiTaiKhoan
                    FROM TaiKhoan WHERE BiXoa = false";
            $result = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($result))
            {
                $ma = $row["MaTaiKhoan"];
                $tenDN = $row["TenDangNhap"];
                $matKhau = $row["MatKhau"];
                $tenHienThi = $row["TenHienThi"];
                $diaChi = $row["DiaChi"];
                $dienThoai = $row["DienThoai"];
                $email = $row["Email"];
                $biXoa = $row["BiXoa"];
                $maLoai = $row["MaLoaiTaiKhoan"];
                ?>
                <tr>
                <td><?php echo"$ma" ?></td>
                <td><?php echo"$tenDN" ?></td>
                <td><?php echo"$matKhau" ?></td>
                <td><?php echo "$tenHienThi" ?></td>
                <td><?php echo "$diaChi" ?></td>
                <td><?php echo"$dienThoai" ?></td>
                <td><?php echo "$email" ?></td>
                <td><?php echo"$biXoa" ?></td>
                <td><?php echo"$maLoai" ?></td>
                
              </tr>
              <?php
            }
      ?>
    </table>