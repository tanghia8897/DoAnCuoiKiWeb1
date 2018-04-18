<div id="frmUpdate" align="center">
<form id="frmUpdate" action="pAdmin.php?b=4" method="POST">
      <label style="font-size: 17px;">Chọn mã sản phẩm cần sửa</label>
      <select name="maSP" id="maSP">
        <?php
        $sql = "SELECT MaSanPham
        FROM SanPham";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $maSP = $row["MaSanPham"]
        ?>
        <option value="<?php echo"$maSP" ?>"><?php echo"$maSP" ?></option>
        <?php
          } 
        ?>
      </select> <br>
      Tên sản phẩm <input type="text" name="Ten" id="Ten"><br>
      Hình URL <input type="text" name="URL" id="URL"><br>
      Giá sản phẩm <input type="number" name="Gia" id="Gia"><br>
      Ngày nhập <input type="date" name="NgayNhap" id="NgayNhap"><br>
      Số lượng tồn <input type="number" name="SLTon" id="SLTon"><br>
      Số lượng bán <input type="number" name="SLBan" id="SLBan"><br>
      Số lượt xem <input type="number" name="SLXem" id="SLXem"><br>
      Mô tả <input type="text" name="MoTa" id="MoTa"><br>
      Mã loại sản phẩm 
      <select name="MaLoai" id="MaLoai">
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
          $maHangSX = $row["MaHangSanXuat"]
        ?>
        <option value="<?php echo"$maHangSX" ?>"><?php echo"$maHangSX" ?></option>
        <?php
          } 
        ?>
      </select> <br>

      <input type="submit" name="btnSua" value="Sửa">
    </form>
    <?php
      if(isset($_POST["btnSua"]))
      {
        $ma = $_POST["maSP"];
        $ten = $_POST["Ten"];
        $URL = $_POST["URL"];
        $gia = $_POST["Gia"];
        $ngayNhap = $_POST["NgayNhap"];
        $soLuongTon = $_POST["SLTon"];
        $soLuongBan = $_POST["SLBan"];
        $soLuongXem = $_POST["SLXem"];
        $moTa = $_POST["MoTa"];
        $maLoaiSP = $_POST["MaLoai"];
        $maHangSX = $_POST["hangSX"];
        // $sql = "UPDATE SanPham
        // SET TenSanPham = '".$ten."', HinhURL = '.$URL.', GiaSanPham = '.$gia.', NgayNhap = '.$ngayNhap.', SoLuongTon = '.$soLuongTon.', SoLuongBan = '.$soLuongBan.', SoLuongXem = '.$soLuongXem.', MoTa = '.$moTa.', MaLoaiSanPham = '.$maLoaiSP.', MaHangSanXuat = '.$maHangSX.'
        // WHERE MaSanPham = '".$ma."' ";
        $sql = "UPDATE SanPham
        SET TenSanPham = '$ten', HinhURL = '$URL', GiaSanPham = '$gia', NgayNhap = '$ngayNhap', SoLuongTon = '$soLuongTon', SoLuongBan = '$soLuongBan', SoLuongXem = '$soLuongXem', MoTa = '$moTa', MaLoaiSanPham = '$maLoaiSP', MaHangSanXuat = '$maHangSX'
        WHERE MaSanPham = '".$ma."' ";
        DataProvider::ExecuteQuery($sql);
      }
    ?>
</div>
