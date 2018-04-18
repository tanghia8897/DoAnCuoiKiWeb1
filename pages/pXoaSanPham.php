    <form id="frmXoa" action="pAdmin.php?b=3" method="POST" align="center">
      <h1>Tên sản phẩm</h1>
      <select name="tenSP" id="tenSP">
        <?php
        $sql = "SELECT TenSanPham
        FROM SanPham WHERE BiXoa = 0";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $maSP = $row["TenSanPham"]
        ?>
        <option value="<?php echo"$maSP" ?>"><?php echo"$maSP" ?></option>
        <?php
          } 
        ?>
      </select> <br><br>
      <input type="submit" name="btnXoa" value="Xóa">
    </form>
    <?php
      if(isset($_POST["btnXoa"]))
      {
        $tenSP = $_POST["tenSP"];
        
        $sql = "UPDATE SanPham
        SET BiXoa = '1'
        WHERE TenSanPham like '".$tenSP."'";
        DataProvider::ExecuteQuery($sql);
      }
    ?>