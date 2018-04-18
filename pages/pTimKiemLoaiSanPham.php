<form action="pAdmin.php?b=11&flag=1" method="POST" align ="center">
    <input type="text" name="valueSearch">
    <input type="submit" name="btnTim" value="Tìm">
</form>

<table align="center" cellspacing="0" cellpadding="7">
      <tr>
        <th>Mã loại sản phẩm</th>
        <th>Tên loại sản phẩm</th>
      </tr>
      <?php
        if(isset($_GET["flag"]) && $_GET["flag"] == 1)
        {
            $tuKhoa = $_POST["valueSearch"];         
      
            $sql = "SELECT MaLoaiSanPham, TenLoaiSanPham, BiXoa
                    FROM LoaiSanPham WHERE BiXoa = false and TenLoaiSanPham like '%$tuKhoa%'";
            $result = DataProvider::ExecuteQuery($sql);
            while($row = mysqli_fetch_array($result))
            {
                $maLoaiSP = $row["MaLoaiSanPham"];
                $tenLoaiSanPham = $row["TenLoaiSanPham"];
                ?>
                <tr>
                    <td><?php echo"$maLoaiSP" ?></td>
                    <td><?php echo"$tenLoaiSanPham" ?></td>
                </tr>
              <?php
            }
      ?>
    </table>
    <?php
        }
    ?>