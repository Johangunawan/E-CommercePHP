<?php
	include("koneksi.php");
	$idgaleri = $_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shoes Project</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery.slide.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
      <img src="css/images/logo.jpg" alt=""/>
	<div id="navigation">
        <ul>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </div>
    </div>
    <!-- End Header -->
    <!-- Slider -->
    <div id="slider">
      <div id="slider-holder">
        <ul>
          <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="css/images/slide2.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a> </div>
    </div>
    <!-- End Slider -->
  </div>
</div>
<!-- Top -->
<!-- Main -->
<div id="main">
  <div class="shell">
    <!-- Search, etc -->
    <div class="options">
      <div class="search">
        <form action="#" method="post">
          <span class="field">
          <input type="text" class="blink" value="SEARCH" title="SEARCH" />
          </span>
          <input type="text" class="search-submit" value="GO" />
        </form>
      </div>
      <span class="left"><a href="#">Advanced Search</a></span>
      <div class="right"> <span class="cart"> <a href="#" class="cart-ico">&nbsp;</a> <strong>$0.00</strong> </span> <span class="left more-links"> <a href="#">Checkout</a> <a href="#">Details</a> </span> </div>
    </div>
    <!-- End Search, etc -->
<!-- Menu -->
	<div id="navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="produk.php">Product</a></li>
          <li><a href="pembayaran.php">Confirmation Payment</a></li>
          <li><a href="keranjang.php">Cart</a></li>
          <li class="last"><a href="contactus.php">Contact Us</a></li>
        </ul>
      </div>
<!-- Menu -->
    <!-- Content -->
    <div id="content">
      <!-- Tabs -->
      <div class="tabs">
        <ul>
          <li><a href="#" class="active"><span>Keteranggan Foto</span></a></li>
          <li><a href="#"><span>Promo</span></a></li>
          <li><a href="#" class="red"><span>More Shoes</span></a></li>
        </ul>
      </div>
      <!-- Tabs -->
      <!-- Container -->
      <div id="container">
        <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" style="display:block;">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                
				<?php
				$gbr = "";
				$ttl = "";
				$desc = "";
				$result = mysqli_query($con,"Select * from gallery where Id = '$idgaleri'");
				while($row = mysqli_fetch_array($result)) // fetch untuk ngambil araay result
				{
					$gbr = $row[3];
					$ttl = $row[1];
					$desc = $row[2];
				}
				?>
				<center>
				<form id="ket-photo" action="index-web.php?id=<?php echo $idgaleri; ?>" method="">
				<div id="photo">
					<img src="gambar/<?php echo $gbr; ?>" />
				</div>
				<div id="details">
					<div class="field">
						<label>Brand Name</label>
						<?php echo $ttl; ?>
					</div>
					<div class="field">
						<label>Description</label>
						<?php echo $desc; ?>
					</div>
				</div>
				
				<input type="submit" value="Kembali"/>
				</form>
				<form id="ket-photo" action="insert.php?id=<?php echo $idgaleri; ?>" method="POST">
				<input type="submit" name="update" value="Beli" />
				</form>
			
			
			</center>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End First Tab Content -->
          <!-- Second Tab Content -->
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image2.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image2.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image2.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image2.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image1.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image1.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image1.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image1.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Second Tab Content -->
          <!-- Third Tab Content -->
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <ul>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image3.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image3.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image3.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image3.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image4.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image4.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image4.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image4.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image2.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image2.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image2.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image2.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image1.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image1.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image1.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img src="css/images/image1.jpg" alt="" /></a> </div>
                  <p> Item Number: <span>125515</span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">Adidas Shoes</a> </p>
                  <p class="price">Wholesale Price: <strong>53 USD</strong></p>
                </li>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Third Tab Content -->
        </div>
        <!-- Brands -->
        <div class="brands" align="center">
          <h3>Brands</h3>
          <div class="logos"> <a href="#"><img src="css/images/logo1.gif" alt="" /></a> <a href="#"><img src="css/images/logo2.gif" alt="" /></a> <a href="#"><img src="css/images/logo3.gif" alt="" /></a> <a href="#"><img src="css/images/logo4.gif" alt="" /></a> <a href="#"><img src="css/images/logo5.gif" alt="" /></a> </div>
        </div>
        <!-- End Brands -->
        <!-- Footer -->
        <div id="footer">
          <div class="left"> <a href="#">Home</a> <span>|</span> <a href="#">Support</a> <span>|</span> <a href="#">My Account</a> <span>|</span> <a href="#">The Store</a> <span>|</span> <a href="#">Contact</a> </div>
          <div class="right"> &copy; 2014. Design by <a href="#">ShoesProject.com</a> </div>
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
</body>
</html>
