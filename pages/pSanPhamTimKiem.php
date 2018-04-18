<?php
         if(isset($_REQUEST['btnSearch']))
         {
            $search = ($_POST['searchBox']); //xử lý biến trước khi đưa vào query
            if(empty($search))
            {
                echo 'Nhập dữ liệu vào trước khi search';
            }
            else
            {
            ?>
            <table align="center" cellspacing="0" cellpadding="7">
            <tr>
              <th>Mã sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Hình URL</th>
              <th>Giá</th>
              <th>Ngày nhập</th>
              <th>Số lượng tồn</th>
              <th>Số lượng bán</th>
              <th>Số lượng xem</th>
              <th>Mô tả</th>
              <th>Bị xóa</th>
              <th>Mã loại sản phẩm</th>
              <th>Mã hãng sản xuất</th>
            </tr>
            <?php
                  $sql = "SELECT *
                          FROM SanPham WHERE SanPham.BiXoa = false and SanPham.tensanpham like '%$search%'";
                  $result = DataProvider::ExecuteQuery($sql);
                  while($row = mysqli_fetch_array($result))
                  {
                      $maSP = $row["MaSanPham"];
                      $tenSanPham = $row["TenSanPham"];
                      $hinhURL = $row["HinhURL"];
                      $giaSanPham = $row["GiaSanPham"];
                      $ngayNhap = $row["NgayNhap"];
                      $soLuongTon = $row["SoLuongTon"];
                      $soLuongBan = $row["SoLuongBan"];
                      $soLuongXem = $row["SoLuongXem"];
                      $moTa= $row["MoTa"];
                      $biXoa = $row["BiXoa"];
                      $maLoai =$row["MaLoaiSanPham"];
                      $maHangSanXuat = $row["MaHangSanXuat"];
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
            <?php
                }
                ?>
        <?php
            }
            ?>