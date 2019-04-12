<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>Transport</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
	 <link type="text/css" rel="stylesheet" href="css/car.css">
	 <link type="text/css" rel="stylesheet" href="css/navbar.css">
	 <link type="text/css" rel="stylesheet" href="styles/footer.css">
	 <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>


		<div id="wrapper" class="container">
							
			<!-- Top Nav hoby !-->
<?php include 'navbar.php'; ?>

			<section class="main-content">				
				<div class="row">
				<div class="rs">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Choose</strong> Transport</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									
									<th>Image</th>
									<th>Truck Type</th>
									<th> Contact Owner </th>
									<th>Shift Rate</th>
									
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									
									<td><a href="#"><img alt="" src="pic/1.jpg"></a></td>
									<td>Box Type Truck</td>
									<td> 01710684220 </td>
									<td>৳4000</td>
									<td>৳4000</td>
								</tr>			  
								<tr>
									
									<td><a href="product_detail.html"><img alt="" src="pic/2.jpg"></a></td>
									<td>Mini Pickup</td>
									<td> 01710667890 </td>
									<td>৳2500 </td>
									<td>৳2500</td>
								</tr>
								<tr>
									
									<td><a href="product_detail.html"><img alt="" src="pic/3.jpg"></a></td>
									<td>Big Truck</td>
									<td> 01710967894 </td>
									<td>৳2000</td>
									<td>৳2000</td>
								</tr>
										  
							</tbody>
						</table>
						<h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
						<hr>
						
						
											
					</div>
					
				</div>
				</div>
			</section>

			<?php include 'footer.php'; ?>	

</body>
</html>