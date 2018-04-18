<form action="pAdmin.php?b=7" method="POST" align="center">
      Mã loại sản phẩm  <input type="number" name="txtMa" id="txtMa"><br>
      Tên loại sản phẩm <input type="text"name="txtTen"><br>
      <input type="submit" name="btnThem" value="Thêm">
</form>
    <?php
      if(isset($_POST["btnThem"]))
      {
        $ma = $_POST["txtMa"];
        $ten = $_POST["txtTen"];
        $sql = "insert into LoaiSanPham(MaLoaiSanPham, TenLoaiSanPham, BiXoa)
        values('".$ma."', '".$ten."', '0')";
        DataProvider::ExecuteQuery($sql);
        echo "<script type='text/javascript'>alert('Thêm thành công !!')</script>";
      }
    ?>