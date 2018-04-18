<table align="center" cellspacing="0" cellpadding="7">
      <tr>
        <th>Mã đơn đặt hàng</th>
        <th>Ngày lập</th>
        <th>Tổng thành tiền</th>
        <th>Mã tài khoản</th>
        <th>Mã tình trạng</th>
      </tr>
      <?php
            $sql = "SELECT MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang
                    FROM DonDatHang";
            $result = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($result))
            {
                $ma = $row["MaDonDatHang"];
                $ngayLap = $row["NgayLap"];
                $tongTien = $row["TongThanhTien"];
                $maTK = $row["MaTaiKhoan"];
                $maTT = $row["MaTinhTrang"];
                ?>
                <tr>
                <td><?php echo"$maSP" ?></td>
                <td><?php echo"$tenSanPham" ?></td>
                <td><?php echo"$hinhURL" ?></td>
                <td><?php echo "$giaSanPham" ?></td>
                <td><?php echo "$ngayNhap" ?></td>
                <td><?php echo"$soLuongTon" ?></td>
                <td><?php echo "$soLuongBan" ?></td>
                <td><?php echo"$soLuongXem" ?></td>
                <td><?php echo"$moTa" ?></td>
                <td><?php echo"$biXoa" ?></td>
                <td><?php echo"$maLoai" ?></td>
                <td><?php echo"$maHangSanXuat" ?></td>
              </tr>
              <?php
            }
      ?>
    </table>