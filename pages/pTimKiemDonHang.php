<form action="pAdmin.php?b=26&flag=1" method="POST" align ="center">
    <input type="number" name="valueSearch">
    <input type="submit" name="btnTim" value="Tìm">
</form>

<table align="center" cellspacing="0" cellpadding="7">
      <tr>
        <th>Mã đơn hàng</th>
        <th>Ngày lập</th>
        <th>Tổng thành tiền</th>
        <th>Mã tài khoản</th>
        <th>Mã tình trạng</th>
      </tr>
      <?php
        if(isset($_GET["flag"]) && $_GET["flag"] == 1)
        {
            $tuKhoa = $_POST["valueSearch"];         
      
            $sql = "SELECT MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang
                    FROM DonDatHang WHERE MaDonDatHang like '%$tuKhoa%'";
            $result = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($result))
            {
                $maDH = $row["MaDonDatHang"];
                $ngayLap = $row["NgayLap"];
                $tongTien = $row["TongThanhTien"];
                $maTK = $row["MaTaiKhoan"];
                $maTT = $row["MaTinhTrang"];
                ?>
                <tr>
                <td><?php echo "$maDH" ?></td>
                <td><?php echo "$ngayLap" ?></td>
                <td><?php echo"$tongTien" ?></td>
                <td><?php echo "$maTK" ?></td>
                <td><?php echo"$maTT" ?></td>
                
              </tr>
              <?php
            }
      ?>
    </table>
    <?php
        }
    ?>