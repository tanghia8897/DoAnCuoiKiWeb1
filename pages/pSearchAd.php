
<div class="container spmoi">
    <a href="#" id="spmoi">DANH SÁCH SẢN PHẨM TÌM KIẾM NÂNG CAO</a>
    <hr>
    <div class="row">
      <?php
         if(isset($_REQUEST['ok']))
         {
            $search = ($_POST['search']); //xử lý biến trước khi đưa vào query
            $mahangsanxuat = ($_POST['hangsx']);
            $maloaisanpham = ($_POST['loaisp']);
            if(empty($search))
            {
                echo 'Nhập dữ liệu vào trước khi search';
            }
            else
            {
                $sql = " SELECT  SanPham.MaSanPham , SanPham.TenSanPham, SanPham.GiaSanPham, SanPham.HinhURL
                        FROM SanPham, loaisanpham, hangsanxuat
                        WHERE SanPham.BiXoa = false and SanPham.tensanpham like '%$search%' and loaisanpham.TenLoaiSanPham = '$maloaisanpham' and hangsanxuat.TenHangSanXuat ='$mahangsanxuat' ";
                $result1 = DataProvider::ExecuteQuery($sql);
                $num = mysqli_num_rows($result);
                if($num > 0 && $search != "")
                {
                    while($row = mysqli_fetch_array($result1))
                    {
                        $hinhURL = $row["HinhURL"];
                        $tenSanPham = $row["TenSanPham"];
                        $giaSanPham = $row["GiaSanPham"];
                        $maSanPham = $row["MaSanPham"];
                        include ("templates/tempThumbProduct.php");
                    }
                }
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
         }   
        ?>
    </div> <!-- end row -->
  </div> <!-- end container <-->
