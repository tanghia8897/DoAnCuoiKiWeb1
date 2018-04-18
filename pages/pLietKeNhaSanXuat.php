<table align="center" cellspacing="0" cellpadding="7">
      <tr>
        <th>Mã hãng</th>
        <th>Tên hãng</th>
        <th>Logo URL</th>
        <th>Bị xóa</th>
      </tr>
      <?php
            $sql = "SELECT MaHangSanXuat, TenHangSanXuat, LogoURL, BiXoa
                    FROM HangSanXuat WHERE BiXoa = false";
            $result = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($result))
            {
                $maHang = $row["MaHangSanXuat"];
                $tenHang = $row["TenHangSanXuat"];
                $url = $row["LogoURL"];
                $biXoa = $row["BiXoa"];
                ?>
                <tr>
                <td><?php echo"$maHang" ?></td>
                <td><?php echo"$tenHang" ?></td>
                <td><?php echo"$url" ?></td>
                <td><?php echo"$biXoa" ?></td>
              </tr>
              <?php
            }
      ?>
</table>