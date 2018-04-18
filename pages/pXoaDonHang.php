<form id="frmXoa" action="pAdmin.php?b=" method="POST" align="center">
      <h1>Mã đơn hàng</h1>
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
      </select> <br><br>
      <input type="submit" name="btnXoa" value="Xóa">
    </form>
    <?php
      if(isset($_POST["btnXoa"]))
      {
        $maDH = $_POST["MaDH"];
        
        $sql = "UPDATE DonDatHang
        SET BiXoa = '1'
        WHERE MaDonDatHang = '".$maDH."'";
        DataProvider::ExecuteQuery($sql);
      }
    ?>