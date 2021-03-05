<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Cart - Vincent</title>

	<link rel="stylesheet"  href="css/css/kube.css">
	<link rel="stylesheet"  href="css/css/font-awesome.css">
	<link rel="stylesheet"  href="css/css/style.css">
</head>

<body>
<header class="vincent_header">
		<div class="row ">
			<div class="col col-3 vincent_header_left">
				<div class="vincent_inner">
					<div class="vincent_inner_h_contact">
						<div class="vincent_h_phone">088-2678801</div>
						<div class="vincent_h_wh">12:00 pm – 22:00 pm</div>
					</div>
				</div>
			</div>
			<div class="col col-6 vincent_header_center">
				<div class="vincent_def_header">
					<div class="vincent_logo_cont">
						<a href="index.php" class="vincent_image_logo">
						</a>
					</div>
					<nav class="vincent_menu_cont">
						<ul id="menu-main-menu" class="vincent_menu">
							<li class="menu-item active menu-item-has-children"><a href="index.php">Home</a></li>
							<li class="menu-item menu-item-has-children"><a href="menu1.php">Menu</a></li>
							<li class="menu-item menu-item-has-children"><a href="about2.php">About</a></li>
							<li class="menu-item menu-item-has-children"><a href="contact-w-gallery.php">Contact</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
				<div class="mobile_header ">
					<a href="index.php" class="vincent_image_logo"></a>
					<a href="javascript:void(0)" class="btn_mobile_menu">
						<span class="vincent_menu_line1"></span>
						<span class="vincent_menu_line2"></span>
						<span class="vincent_menu_line3"></span>
					</a>
				</div>
			</div>
			<div class="col col-3 vincent_header_right">
				<div class="vincent_inner">
				<a href="login.php" class="vincent_login">login / register</a>
					<a href="cart.php">
						<div class="vincent_shopping_cart">
							<div class="vincent_total_price">$0.00</div>
							<div class="vincent_total_items">0 items - View Cart</div>
							<div class="vincent_cart_item_counter">0</div>
						</div>
					</a>
					
				</div>
			</div>
		</div>
	</header>
	<div class="vincent_title_block vincent_corners">
		<div class="vincent_inner_text">
			<h1>Cart</h1>
		</div>
	</div>
	<div class="vincent_container vincent_typography">
		<div class="row gutters">
			<div class="col col-8 vincent_content">
				<table class="vincent_cart">
					<thead>
						<tr>
							<th></th>
							<th></th>
							<th>Product</th>
							<th><span>Price</span></th>
							<th>Quantity</th>
							<th><span>Total</span></th>
						</tr>
					</thead>
					<tbody>
						<tr class="vincent_cart_item">
							<td>
								<a class="vincent_product-remove" href="#"> × </a>
							</td>
							<td class="vincent_product-thumbnail">
								<a href="product.php">
									<img src="css/img/2-300x300.png" alt="">
								</a>
							</td>
							<td class="vincent_product-name" data-title="Product">
								<a href="product.php">Pepperoni</a>
							</td>
							<td class="vincent_product-price" data-title="Price">
								<span>$2.90</span>
							</td>
							<td  class="vincent_product-quantity"  data-title="Quantity">
								<input type="text" value="1" name="quantity" class="vincent_quantity">
							</td>
							<td class="vincent_product-subtotal" data-title="Total">
								<span>$2.90</span>
							</td>
						</tr>
						<tr class="vincent_cart_item">
							<td>
								<a class="vincent_product-remove" href="#"> × </a>
							</td>
							<td  class="vincent_product-thumbnail">
								<a href="product.php">
									<img src="css/img/11-300x300.png" alt="">
								</a>
							</td>
							<td class="vincent_product-name" data-title="Product">
								<a href="product.php">MARGHERITA</a>
							</td>
							<td class="vincent_product-price" data-title="Price">
								<span>$2.60</span>
							</td>
							<td  class="vincent_product-quantity"  data-title="Quantity">
								<input type="text" value="1" name="quantity" class="vincent_quantity">
							</td>
							<td class="vincent_product-subtotal" data-title="Total">
								<span>$2.60</span>
							</td>
						</tr>
						<tr class="vincent_cart_actions">
							<td colspan="6">	
								<button class="vincent_update_cart">Update cart</button>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="vincent_cart_totals">
					<h5>Cart totals</h5>
					<table>
						<tbody>
							<tr>
								<th>Subtotal</th>
								<td><span>$5.50</span></td>
							</tr>
							<tr>
								<th>Total</th>
								<td><span>$5.50</span></td>
							</tr>
						</tbody>
					</table>
					<a class="vincent_button vincent_button_background" href="checkout.php">Proceed to checkout</a>
				</div>
			</div>
			<div class="col col-4 vincent_sidebar">
				<div class="vincent_sidebar_block vincent_sidebar_categories">
					<h5>Blog Categories</h5>
					<ul>
						<li><a href="menu1.php">Burgers</a></li>
						<li><a href="menu1.php">Desserts</a></li>
						<li><a href="menu1.php">Drinks</a></li>
						<li><a href="menu1.php">Pasta</a></li>
						<li><a href="menu1.php">Pizzas</a></li>
						<li><a href="menu1.php">Salads</a></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<div class="vincent_back_to_top"></div>
	<footer>
		<div class="vincent_container">
			<div class="row">
				<div class="col col-12">
					<div class="vincent_logo_cont">
						<a href="index.php" class="vincent_image_logo_footer">
						</a>
					</div>
					<div class="vincent_foter_text">088-2678801 <span>12:00 pm – 22:00 pm</span></div>
					<ul class="vincent_foter_menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="menu1.php">Menu</a></li>
						<li><a href="about2.php">About</a></li>
						<li><a href="contact-w-gallery.php">Contact</a></li>
					</ul>
					<ul class="vincent_social">
						<li><a onclick="window.open('//www.facebook.com/EMeeHoonD/')"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a onclick="window.open('http://line.me/ti/p/~4731007048')"><i class="fab fa-line" aria-hidden="true"></i></a></li>
						<li><a onclick="window.open('mailto:paulsingyang@gmail.com')"><i class="fa fa-google" aria-hidden="true"></i></a></li>
					</ul>
					
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>