<div align="center">
<form id="frmUpdate" action="pAdmin.php?b=24" method="POST">
      <label style="font-size: 17px;">Chọn mã đơn hàng cần sửa</label>
      <select name="maDH" id="maDH">
        <?php
        $sql = "SELECT MaDonDatHang
        FROM DonDatHang";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $maDH = $row["MaDonDatHang"]
        ?>
        <option value="<?php echo"$maDH" ?>"><?php echo"$maDH" ?></option>
        <?php
          } 
        ?>
      </select> <br>
      Ngày lập <input type="date" name="ngayLap"><br>
      Tổng thành tiền <input type="number" name="tongTien"> <br>
      Mã tài khoản
      <select name="maTK" id="maTK">
        <?php
        $sql = "SELECT MaTaiKhoan
        FROM TaiKhoan";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $maTK = $row["MaTaiKhoan"]
        ?>
        <option value="<?php echo"$maTK" ?>"><?php echo"$maTK" ?></option>
        <?php
          } 
        ?>
      </select> <br>
      Mã tình trạng
      <select name="maTT" id="maTT">
        <?php
        $sql = "SELECT MaTinhTrang
        FROM TinhTrang";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $maTT = $row["MaTinhTrang"]
        ?>
        <option value="<?php echo"$maTT" ?>"><?php echo"$maTT" ?></option>
        <?php
          } 
        ?>
      </select> <br>
      <input type="submit" name="btnSua" value="Sửa">
    </form>
    <?php
      if(isset($_POST["btnSua"]))
      {
        $maDH = $_POST["maDH"];
        $ngayLap = $_POST["ngayLap"];
        $tongTien = $_POST["tongTien"];
        $maTK = $_POST["maTK"];
        $maTT = $_POST["maTT"];
        
        $sql = "UPDATE DonDatHang
        SET NgayLap = '$ngayLap', TongThanhTien = '$tongTien', MaTaiKhoan = '$maTK', MaTinhTrang = '$maTT'
        WHERE MaDonDatHang = '".$maDH."' ";
        DataProvider::ExecuteQuery($sql);
      }
    ?>
</div>
