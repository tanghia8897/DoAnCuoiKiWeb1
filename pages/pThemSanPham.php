<form action="pAdmin.php?b=2" method="POST" align="center">
      Mã sản phẩm  <input type="number" name="txtMa" id="txtMa"><br>
      Tên sản phẩm <input type="text"name="txtTen"><br>
      Hình URL     <input type="text" name="txtURL" id="txtURL"><br>
      Giá sản phẩm <input type="number" name="txtGia" id="txtGia"><br>
      Ngày nhập    <input type="date" name="txtNgayNhap" id="txtNgayNhap"><br>
      Số lượng tồn <input type="number" name="txtSL" id="txtSL"><br>
      Mô tả <br><textarea name="txtMoTa" id="txtMoTa" cols="30" rows="10"></textarea><br>
      Mã loại sản phẩm 
      <select name="MaSP" id="MaSP">
        <?php
          $sql = "SELECT distinct MaLoaiSanPham 
          FROM SanPham";
          $result = DataProvider::ExecuteQuery($sql);
          while($row = mysqli_fetch_array($result))
          {
            $maSP = $row["MaLoaiSanPham"]
        ?>
          <option value="<?php echo"$maSP" ?>"><?php echo"$maSP" ?></option>
        <?php
          } 
        ?>
      </select> <br>
      Mã hãng sản xuất
      <select name="hangSX" id="hangSX">
        <?php
        $sql = "SELECT distinct MaHangSanXuat 
        FROM SanPham";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $maSP = $row["MaHangSanXuat"]
        ?>
        <option value="<?php echo"$maSP" ?>"><?php echo"$maSP" ?></option>
        <?php
          } 
        ?>
      </select> <br><br>
      <input type="submit" name="btnThem" value="Thêm">
    </form>
    <?php
      if(isset($_POST["btnThem"]))
      {
        $ma = $_POST["txtMa"];
        $ten = $_POST["txtTen"];
        $URL = $_POST["txtURL"];
        $gia = $_POST["txtGia"];
        $soLuongTon = $_POST["txtSL"];
        $ngayNhap = $_POST["txtNgayNhap"];
        $moTa = $_POST["txtMoTa"];
        $maLoai =$_POST["MaSP"];
        $maHangSX = $_POST["hangSX"];
        $sql = "insert into sanpham(MaSanPham, TenSanPham, HinhURL, GiaSanPham, NgayNhap, SoLuongTon, SoLuongBan, SoLuongXem, MoTa, BiXoa, MaLoaiSanPham, MaHangSanXuat)
        values('".$ma."', '".$ten."', '".$URL."', '".$gia."','".$ngayNhap."', '".$soLuongTon."', '0' , '0' , '".$moTa."', '0', '".$maLoai."', '".$maHangSX."')";
        DataProvider::ExecuteQuery($sql);
      }
    ?>