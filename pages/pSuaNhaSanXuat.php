<div id="frmUpdate" align="center">
<form id="frmUpdate" action="pAdmin.php?b=14" method="POST">
      <label style="font-size: 17px;">Chọn mã hãng sản xuất cần sửa</label>
      <select name="maHangSX" id="maHangLoaiSX">
        <?php
        $sql = "SELECT MaHangSanXuat
        FROM HangSanXuat";
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
      Tên hãng sản xuất <input type="text" name="Ten" id="Ten"><br>
      Logo URL <input type="text" name="URL"><br>


      <input type="submit" name="btnSua" value="Sửa">
    </form>
    <?php
      if(isset($_POST["btnSua"]))
      {
        $ma = $_POST["maHangSX"];
        $ten = $_POST["Ten"];
        $url = $_POST["URL"];
        $sql = "UPDATE HangSanXuat
        SET TenHangSanXuat = '$ten', LogoURL = '$ten'
        WHERE MaLoaiSanPham = '".$ma."' ";
        DataProvider::ExecuteQuery($sql);
      }
    ?>
</div>
