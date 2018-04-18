<form id="frmXoa" action="pAdmin.php?b=18" method="POST" align="center">
      <h1>Tên tài khoản</h1>
      <select name="tenTK" id="tenTK">
        <?php
        $sql = "SELECT TenDangNhap
        FROM TaiKhoan WHERE BiXoa = 0";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $tenTK = $row["TenDangNhap"]
        ?>
        <option value="<?php echo"$tenTK" ?>"><?php echo"$tenTK" ?></option>
        <?php
          } 
        ?>
      </select> <br><br>
      <input type="submit" name="btnXoa" value="Xóa">
    </form>
    <?php
      if(isset($_POST["btnXoa"]))
      {
        $tenTK = $_POST["tenTK"];
        
        $sql = "UPDATE TaiKhoan
        SET BiXoa = '1'
        WHERE TenDangNhap like '".$tenTK."'";
        DataProvider::ExecuteQuery($sql);
      }
    ?>