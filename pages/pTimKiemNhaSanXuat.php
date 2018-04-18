<form action="pAdmin.php?b=16&flag=1" method="POST" align ="center">
    <input type="text" name="valueSearch">
    <input type="submit" name="btnTim" value="Tìm">
</form>

<table align="center" cellspacing="0" cellpadding="7">
      <tr>
        <th>Mã hãng</th>
        <th>Tên hãng</th>
        <th>Logo URL</th>
        <th>Bị xóa</th>
      </tr>
      <?php
        if(isset($_GET["flag"]) && $_GET["flag"] == 1)
        {
            $tuKhoa = $_POST["valueSearch"];         
      
            $sql = "SELECT MaHangSanXuat, TenHangSanXuat, LogoURL, BiXoa
                    FROM HangSanXuat WHERE TenHangSanXuat like '%$tuKhoa%'";
            $result = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($result))
            {
                $maHang = $row["MaHangSanXuat"];
                $tenHang = $row["TenHangSanXuat"];
                $hinhURL = $row["LogoURL"];
                $biXoa = $row["BiXoa"]
                ?>
                <tr>
                <td><?php echo"$maHang" ?></td>
                <td><?php echo"$tenHang" ?></td>
                <td><?php echo"$hinhURL" ?></td>
                <td><?php echo"$biXoa" ?></td>
              </tr>
              <?php
            }
      ?>
    </table>
    <?php
        }
    ?>