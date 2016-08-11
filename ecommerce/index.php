<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Shop</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>

	<!-- Main wrapper starts here -->
	<div class="main_wrapper">
		
		<!-- Header starts here -->
		<header>
			<img id="logo" src="images/storefront-logo.png" alt="">
			<img id="banner" src="images/banner1.png" alt="">
		</header>
		<!-- Header ends here -->

		<!-- Navigation bar starts here -->
		<nav>
			
			<ul id="menu">
				<li></li> <a href="#">Home</a>
				<li></li> <a href="#">All Products</a>
				<li></li> <a href="#">My Account</a>
				<li></li> <a href="#">Sign Up</a>
				<li></li> <a href="#">Shopping Cart</a>
				<li></li> <a href="#">Contact Us</a>
			</ul>

			<div id="search">
				
				<form action="results.php" method="get" enctype="multipart/form-data">
					
					<input type="text" name="user-query" placeholder="Search a product">
					<button type="submit" name="search" value="Search">
					<i class="fa fa-search" aria-hidden="true"></i>
					</button>
				</form>
			</div>
		</nav>
		<!-- Navigation bar ends here -->
		
		<!-- Content wrapper starts here -->
		<div class="content-wrapper">
			
			<aside>
				This is the sidebar
			</aside>
			
			<main>
				This is the main content area
			</main>
		
		</div>
		<!-- Content wrapper starts here -->

		<footer>
			This is the footer
		</footer>
	
	</div>
	<!-- Main wrapper starts here -->	
</body>
</html>