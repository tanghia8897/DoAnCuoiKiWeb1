<div id="frmUpdate" align="center">
<form id="frmXoa" action="pAdmin.php" method="POST">
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
      Hình URL <input type="text"><br>
      Giá sản phẩm <input type="number"><br>
      Ngày nhập <input type="date" value="Ngày nhập"><br>
      Số lượng tồn <input type="number"><br>
      Số lượng bán <input type="number"><br>
      Số lượt xem <input type="number"><br>
      Mô tả <input type="text"><br>
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

      <input type="submit" name="btnSua" value="Sửa">
    </form>
    <?php
      if(isset($_POST["btnSua"]))
      {
        $tenSP = $_POST["tenSP"];
        
        $sql = "UPDATE SanPham
        SET BiXoa = '1'
        WHERE TenSanPham like '.$tenSP.'";
        DataProvider::ExecuteQuery($sql);
      }
    ?>
</div>