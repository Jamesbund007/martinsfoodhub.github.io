

<!doctype html>

<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>	Martin's Food Hub | Website </title>
	<link rel="stylesheet"  href="style1.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="icon" href="icon.png" type="image/x-icon">
	

</head>
<body>
	<div class="header" >



		<div class="inner_header" >

			<div class="Logo_Container">
				<div class="imaho"> <img src="logo80.png"> </div>
				<h1>MARTIN'S<SPAN> FOOD HUB</SPAN></h1>
				



				
			</div>

			<ul class="navigation"> 
				<li class="active"><a href="index.php" style="text-decoration: none;"><i class="fas fa-home"></i>Home</a></li>
				<li><a href="Products.php" style="text-decoration: none;"><i class="fas fa-ballot"></i>Products</a></li>
				<li><a href="aboutus.php" style="text-decoration: none;"><i class="fas fa-user"></i>About Us</a></li>

				<li><a href="#" style="text-decoration: none;"><i class="fas fa-phone"></i>Contact</a>
					<div class="sub-menu-1">
						<ul>
							<li><a  href="#"  style="text-decoration: none;"><i class="fas fa-mobile-alt"></i> Phone Number </a></li>
							<li><a href="#" style="text-decoration: none;"><i class="fas fa-envelope-square"></i> Email Address  </a></li>
							<li><a href="#" style="text-decoration: none;"><i class="fas fa-phone-square-alt"></i> Telephone Number </a></li>
							<li><a href="#" style="text-decoration: none;"><i class="fab fa-facebook"></i> Facebook Page </a></li>
						</ul> 
					</div>
					</li>
			</ul>

		</div>
		</div>
			</div>
				<div  class="search-box">
				<input class="search-txt" type="" name=""	placeholder="Type to search product" >
				<a class="search-btn" href="#">
				<i class="fas fa-search"></i> </a>
				</div>
		




	<div class="hero" >	
		<div class="btn-box">
			<h2> MENU </h2>
			<ul>
				<li> <button id="btn1" onclick="openBestSeller()"><i class="fas fa-utensils"></i>Best Sellers</button> </li>
				<li> <button id="btn2" onclick="openSnacks()"><i class="fas fa-burger-soda"></i>Snacks</button> </li> 
				<li> <button id="btn3" onclick="openPizza()"><i class="fas fa-pizza-slice"></i>Pizza</button> </li>
				<li> <button id="btn4" onclick="openDrinks()"><i class="fas fa-coffee-togo"></i>Drinks</button> </li>
				<li> <button id="btn5" onclick="openSB()"><i class="fas fa-sparkles"></i>Special Bundles</button> </li>
			</ul>	
			</div>
			<div id="content1" class="content" >
				<div class="content-left" >	
					<h1 > BEST SELLERS </h1>
					<div class="row"> 
							
						<div class="col-md-3"> 
								<div class="product-top" >
									<img src="DoloresFloat.jpg"> 
									<div class="product-bottom text-center"> 
									<h3> Dolores Float (16 oz) </h3>
									<h4> Php 50.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									 <img src="DoloresSupreme.png">
									<div class="product-bottom text-center"> 
									<h3> Dolores Supreme (22 oz) </h3>
									<h4> Php 75.00 </h4>
								

									<a href="#" style="text-decoration: none;">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="GreatManhattan.png"> 
									<div class="product-bottom text-center"> 
									<h3> Great Manhattan </h3>
									<h4> Php 170.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="Hawaiian.png"> 
									<div class="product-bottom text-center"> 
									<h3> Hawaiian </h3>
									<h4> Php 50.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="Ensaymada.png"> 
									<div class="product-bottom text-center"> 
									<h3> Ensaymada </h3>
									<h4> Php 110.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="FriesTea.png"> 
									<div class="product-bottom text-center"> 
									<h3> Fries Tea </h3>
									<h4> Php 35.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
					</div>


						 
					
				</div>
				
		
			</div>


				<div id="content2" class="content">
				<div class="content-left">	
					<h1> SNACKS </h1>
					<div class="row">
							
						<div class="col-md-3"> 
								<div class="product-top">
									<img src="FriesTea.png"> 
									<div class="product-bottom text-center"> 
									<h3> Fries Tea</h3>
									<h4> Php 35.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="HotdogTea.png"> 
									<div class="product-bottom text-center"> 
									<h3> Hotdog Tea </h3>
									<h4> Php 40.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="OverloadCombo.png"> 
									<div class="product-bottom text-center"> 
									<h3> OverloadCombo </h3>
									<h4> Php 45.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="Shanghai.png"> 
									<div class="product-bottom text-center"> 
									<h3> Shanghai (12 pcs) </h3>
									<h4> Php 80.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="TacoShanglad.png"> 
									<div class="product-bottom text-center"> 
									<h3> Taco Shanglad </h3>
									<h4> Php 140.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="Nachos.png"> 
									<div class="product-bottom text-center"> 
									<h3> Nachos </h3>
									<h4> Php 50.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="TacoSalad.png"> 
									<div class="product-bottom text-center"> 
									<h3> Taco Salad </h3>
									<h4> Php 140.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="FriesTeaCS.png"> 
									<div class="product-bottom text-center"> 
									<h3> Fries Tea + Cheeseticks </h3>
									<h4> Php 40.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="TacoTortilla.png"> 
									<div class="product-bottom text-center"> 
									<h3> Taco Tortilla </h3>
									<h4> Php 65.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>

					</div>


						 
					
				</div>
				
		
			</div>
		
		<div id="content3" class="content">
				<div class="content-left">	
					<h1> PIZZA </h1>
					<div class="row">
							
						<div class="col-md-3"> 
								<div class="product-top">
									<img src="BaconCheese.png"> 
									<div class="product-bottom text-center"> 
									<h3> Bacon and Cheese</h3>
									<h4> Php 145.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="HamCheese.png"> 
									<div class="product-bottom text-center"> 
									<h3> Ham and Cheese </h3>
									<h4> Php 135.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="Pepperoni.png"> 
									<div class="product-bottom text-center"> 
									<h3> Pepperoni </h3>
									<h4> Php 130.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="GreatManhattan.png"> 
									<div class="product-bottom text-center"> 
									<h3> Great Manhattan </h3>
									<h4> Php 170.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="Hawaiian.png"> 
									<div class="product-bottom text-center"> 
									<h3> Hawaiian </h3>
									<h4> Php 125.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="Ensaymada.png"> 
									<div class="product-bottom text-center"> 
									<h3> Ensaymada </h3>
									<h4> Php 110.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
					</div>


						 
					
				</div>
				
		
			</div>
			<div id="content4" class="content">
				<div class="content-left">	
					<h1> Drinks </h1>
					<div class="row">
							
						<div class="col-md-3"> 
								<div class="product-top">
									<img src="DoloresFloat.jpg"> 
									<div class="product-bottom text-center"> 
									<h3> Dolores Float (16 oz)</h3>
									<h4> Php 50.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="MiloGodzilla.jpg"> 
									<div class="product-bottom text-center"> 
									<h3> Milo Godzilla (16 oz) </h3>
									<h4> Php 45.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="MangKape.jpg"> 
									<div class="product-bottom text-center"> 
									<h3> Mang Kape (22 oz) </h3>
									<h4> Php 70.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="AvocadoSupreme.png"> 
									<div class="product-bottom text-center"> 
									<h3> Avocado Supreme (22 oz)</h3>
									<h4> Php 70.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="DoloresSupreme.png"> 
									<div class="product-bottom text-center"> 
									<h3> Dolores Supreme (22 oz)</h3>
									<h4> Php 75.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="MangoSupreme.png"> 
									<div class="product-bottom text-center"> 
									<h3> Mango Supreme (22 oz)</h3>
									<h4> Php 90.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
					</div>


						 
					
				</div>
				
		
			</div>
			<div id="content5" class="content">
				<div class="content-left">	
					<h1> Special Bundles </h1>
					<div class="row">
							
						<div class="col-md-3"> 
								<div class="product-top">
									<img src="TropaPack.png"> 
									<div class="product-bottom text-center"> 
									<h3> Tropa Pack </h3>
									<h4> Php 360.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="FamilyTreat.png"> 
									<div class="product-bottom text-center"> 
									<h3> Family Treat </h3>
									<h4> Php 580.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="SoloSulit.png"> 
									<div class="product-bottom text-center"> 
									<h3> Solo Sulit </h3>
									<h4> Php 140.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
							<div class="col-md-3"> 
								<div class="product-top">
									<img src="GreatManhattan.png"> 
									<div class="product-bottom text-center"> 
									<h3> Great Manhattan </h3>
									<h4> Php 170.00 </h4>


									<a href="#">ORDER NOW</a>


									</div>
									

								 </div>
							</div>
					</div>


						 
					
				</div>
				
		
			</div>


	</div>

<script>
	var content1 = document.getElementById("content1")
	var content2 = document.getElementById("content2")
	var content3 = document.getElementById("content3")
	var content4 = document.getElementById("content4")
	var content5 = document.getElementById("content5")
	var btn1 = document.getElementById("btn1")
	var btn2 = document.getElementById("btn2")
	var btn3 = document.getElementById("btn3")
	var btn4 = document.getElementById("btn4")
	var btn5 = document.getElementById("btn5")

	function openBestSeller(){
		content1.style.transform = "translateX(0)";
		content2.style.transform = "translateX(110%)";
		content3.style.transform = "translateX(110%)";
		content4.style.transform = "translateX(110%)";
		content5.style.transform = "translateX(110%)";
		btn1.style.backgroundColor = "#8f8f06";
		btn2.style.backgroundColor = "#96ba47";
		btn3.style.backgroundColor = "#96ba47";
		btn4.style.backgroundColor = "#96ba47";
		btn5.style.backgroundColor = "#96ba47";

	}	
	function openSnacks(){
		content1.style.transform = "translateX(110%)";
		content2.style.transform = "translateX(0)";
		content3.style.transform = "translateX(110%)";
		content4.style.transform = "translateX(110%)";
		content5.style.transform = "translateX(110%)";
		btn2.style.backgroundColor = "#8f8f06";
		btn1.style.backgroundColor = "#96ba47";
		btn3.style.backgroundColor = "#96ba47";
		btn4.style.backgroundColor = "#96ba47";
		btn5.style.backgroundColor = "#96ba47";
	}
	function openPizza(){
		content1.style.transform = "translateX(110%)";
		content2.style.transform = "translateX(110%)";
		content3.style.transform = "translateX(0)";
		content4.style.transform = "translateX(110%)";
		content5.style.transform = "translateX(110%)";
		btn3.style.backgroundColor = "#8f8f06";
		btn2.style.backgroundColor = "#96ba47";
		btn1.style.backgroundColor = "#96ba47";
		btn4.style.backgroundColor = "#96ba47";
		btn5.style.backgroundColor = "#96ba47";
	}
	function openDrinks(){
		content1.style.transform = "translateX(110%)";
		content2.style.transform = "translateX(110%)";
		content3.style.transform = "translateX(110%)";
		content4.style.transform = "translateX(0)";
		content5.style.transform = "translateX(110%)";
		btn4.style.backgroundColor = "#8f8f06";
		btn3.style.backgroundColor = "#96ba47";
		btn2.style.backgroundColor = "#96ba47";
		btn1.style.backgroundColor = "#96ba47";
		btn5.style.backgroundColor = "#96ba47";
	}
	function openSB(){
		content1.style.transform = "translateX(110%)";
		content2.style.transform = "translateX(110%)";
		content3.style.transform = "translateX(110%)";
		content4.style.transform = "translateX(110%)";
		content5.style.transform = "translateX(0)";
		btn5.style.backgroundColor = "#8f8f06";
		btn3.style.backgroundColor = "#96ba47";
		btn4.style.backgroundColor = "#96ba47";
		btn2.style.backgroundColor = "#96ba47";
		btn1.style.backgroundColor = "#96ba47";
	}
</script>


</body>
</html>
