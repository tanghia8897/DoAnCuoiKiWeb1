<form id="frmXoa" action="pAdmin.php?b=8" method="POST" align="center">
      <h1>Tên loại sản phẩm</h1>
      <select name="tenLoaiSP" id="tenLoaiSP">
        <?php
        $sql = "SELECT TenLoaiSanPham
        FROM LoaiSanPham WHERE BiXoa = 0";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $tenLoaiSP = $row["TenLoaiSanPham"]
        ?>
        <option value="<?php echo"$tenLoaiSP" ?>"><?php echo"$tenLoaiSP" ?></option>
        <?php
          } 
        ?>
      </select> <br><br>
      <input type="submit" name="btnXoa" value="Xóa">
    </form>
    <?php
      if(isset($_POST["btnXoa"]))
      {
        $tenLoaiSP = $_POST["tenLoaiSP"];
        $sql = "UPDATE LoaiSanPham
        SET BiXoa = '1'
        WHERE TenLoaiSanPham like '".$tenLoaiSP."'";
        DataProvider::ExecuteQuery($sql);
      }
    ?>