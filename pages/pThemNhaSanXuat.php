<form action="pAdmin.php?b=12" method="POST" align="center">
      Mã hãng sản xuất  <input type="number" name="Ma" id="Ma"><br>
      Tên hãng sản xuất <input type="text" name="txtTen"><br>
      Logo URL <input type="text" name="URL"><br>
      <input type="submit" name="btnThem" value="Thêm">
</form>
    <?php
      if(isset($_POST["btnThem"]))
      {
        $ma = $_POST["Ma"];
        $ten = $_POST["txtTen"];
        $url = $_POST["URL"];
        $sql = "insert into HangSanXuat(MaHangSanXuat, TenHangSanXuat, LogoURL, BiXoa)
        values('".$ma."', '".$ten."', '".$url."', 0)";
        DataProvider::ExecuteQuery($sql);
      }
    ?>