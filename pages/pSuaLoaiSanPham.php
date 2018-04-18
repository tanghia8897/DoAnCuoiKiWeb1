<div id="frmUpdate" align="center">
<form id="frmUpdate" action="pAdmin.php?b=9" method="POST">
      <label style="font-size: 17px;">Chọn mã loại sản phẩm cần sửa</label>
      <select name="maLoaiSP" id="maLoaiSP">
        <?php
        $sql = "SELECT MaLoaiSanPham
        FROM LoaiSanPham";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
          $maLoaiSP = $row["MaLoaiSanPham"]
        ?>
        <option value="<?php echo"$maLoaiSP" ?>"><?php echo"$maLoaiSP" ?></option>
        <?php
          } 
        ?>
      </select> <br>
      Tên loại sản phẩm <input type="text" name="Ten" id="Ten"><br>
     

      <input type="submit" name="btnSua" value="Sửa">
    </form>
    <?php
      if(isset($_POST["btnSua"]))
      {
        $ma = $_POST["maLoaiSP"];
        $ten = $_POST["Ten"];
        $sql = "UPDATE LoaiSanPham
        SET TenLoaiSanPham = '$ten'
        WHERE MaLoaiSanPham = '".$ma."' ";
        DataProvider::ExecuteQuery($sql);
      }
    ?>
</div>
