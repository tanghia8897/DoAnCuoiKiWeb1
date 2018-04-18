<div>
	<?php
		if(isset($_SESSION['maTaiKhoan']))
		{
			include ("modules/mThongTinTaiKhoan.php");
		}
		else
		{
			include ("modules/mDangNhapTaiKhoan.php");
		}
	?>
</div>

<div id = "header">
	<div class="row">
		<div class="logo">
			<a href="index.php"><img src="images/logo.jpg" ></a>                
		</div>
		<h1 >PALLADIUM STORE</h1>
		<div id="hr"></div>
		<p id="sub">PALLADIUM STORE VIỆT NAM</p>
	</div>
</div>

<div class="bottomheader">
	<div class="container">
		<ul>
			<li class="dropdown">
				<a href="index.php"><b>Trang chủ</b></a>
			</li>
			
			<li class="dropdown">
				<a href="#lienhe"><b>Liên hệ</b></a>
			</li>
			
			<li class="dropdown">
				<a href="" class="dropbtn"><b>Thương hiệu</b></a>
				<div class="dropdown-content">
					<ul list-group>
						<?php include ('modules/mMenuHang.php'); ?>
					</ul> 
				</div>
			</li>
			
			<li class="dropdown">
				<a href="" class="dropbtn"><b>Dòng sản phẩm</b></a>
				<div class="dropdown-cont">
					<ul list-group>
						<?php include ('modules/mMenuLoai.php'); ?>
					</ul> 
				</div>
			</li>
			
			<form class="form-inline navbar-form pull-right sr" action="index.php?a=5" method="post">
				<input class="form-control " type="text" placeholder="Search.." name="search">
				<input class="fa fa-search btn btn-primary" name="ok" type="submit" value="search">
			</form>
		</ul>
	</div> <!-- end container -->
</div> <!-- end bottomheader -->

<div class="top">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		
		<div class="carousel-inner" role="listbox"> 
			<div class="carousel-item active">
				<img src="images/1.jpg" alt="First slide" style="width: 1920px;height: 450px;" >  
			</div>
			
			<div class="carousel-item">
				<img src="images/2.jpg" alt="First slide" style="width: 1920px;height: 450px;">
			</div>
			
			<div class="carousel-item">
				<img src="images/3.jpg" alt="First slide" style="width: 1920px;height: 450px;">
			</div>
		</div>
		
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="icon-prev" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="icon-next" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div> <!-- het carousel -->
</div> <!-- end top -->	