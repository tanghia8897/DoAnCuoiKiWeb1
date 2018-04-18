<form action="pAdmin.php?b=22" method="POST" align="center">
      Mã đơn hàng  <input type="number" name="Ma" id="Ma"><br>
      Ngày lập <input type="date" name="ngayNhap"><br>
      Tổng thành tiền <input type="number" name="tongTien"><br>
      
      Mã tài khoản
      <select name="maTK" id="maTK">
        <?php
        $sql = "SELECT distinct MaTaiKhoan
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
        $sql = "SELECT distinct MaTinhTrang
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
      <input type="submit" name="btnThem" value="Thêm">
</form>
    <?php
      if(isset($_POST["btnThem"]))
      {
        $maDH = $_POST["Ma"];
        $ngayLap = $_POST["ngayNhap"];
        $tongThanhTien = $_POST["tongTien"];
        $maTK = $_POST["maTK"];
        $maTT = $_POST["maTT"];
        $sql = "insert into DonDatHang(MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang)
        values('".$maDH."', '".$ngayLap."', '".$tongThanhTien."', '".$maTK."', '".$maTT."')";
        DataProvider::ExecuteQuery($sql);
      }
    ?>