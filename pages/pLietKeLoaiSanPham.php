<table align="center" cellspacing="0" cellpadding="7">
      <tr>
        <th>Mã loại sản phẩm</th>
        <th>Tên loại sản phẩm</th>
        <th>Bị xóa</th>
      </tr>
      <?php
            $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham, BiXoa
                    FROM LoaiSanPham WHERE BiXoa = false";
            $result = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($result))
            {
                $maLoaiSP = $row["MaLoaiSanPham"];
                $tenLoaiSanPham = $row["TenLoaiSanPham"];
                $biXoa = $row["BiXoa"];
                ?>
                <tr>
                <td><?php echo"$maLoaiSP" ?></td>
                <td><?php echo"$tenLoaiSanPham" ?></td>
                <td><?php echo"$biXoa" ?></td>
              </tr>
              <?php
            }
      ?>
    </table>