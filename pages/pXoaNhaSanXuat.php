<form id="frmXoa" action="pAdmin.php?b=" method="POST" align="center">
      <h1>Tên hãng sản xuất</h1>
      <select name="tenHangSX" id="tenHangSX">
        <?php
        $sql = "SELECT TenHangSanXuat
        FROM HangSanXuat WHERE BiXoa = 0";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $tenHangSX = $row["TenHangSanXuat"]
        ?>
        <option value="<?php echo"$tenHangSX" ?>"><?php echo"$tenHangSX" ?></option>
        <?php
          } 
        ?>
      </select> <br><br>
      <input type="submit" name="btnXoa" value="Xóa">
    </form>
    <?php
      if(isset($_POST["btnXoa"]))
      {
        $tenHangSX = $_POST["tenHangSX"];
        
        $sql = "UPDATE HangSanXuat
        SET BiXoa = '1'
        WHERE TenHangSanXuat like '".$tenHangSX."'";
        DataProvider::ExecuteQuery($sql);
      }
    ?>