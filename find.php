<?php 


require 'connection.php';


//var_dump($_SESSION);

$flats = $user->getAllFlat();
$new = $user-> allarea();
var_dump($new);

//$division = strtolower($flat_division);
//$div=$division."_table";
//$new = $user->getArea($div);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find Flat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
 <link type="text/css" rel="stylesheet" href="css/search.css">
 <link type="text/css" rel="stylesheet" href="css/navbar.css">
 <link type="text/css" rel="stylesheet" href="styles/footer.css">
 
</head>

<body>
<?php
	include 'navbar.php'; ?>
?>

<div class="container">
	<div class="row">
		<div class="flat_section">
			
				<div class="col-md-12">
				<form class="form-inline" role="form">
					  <div class="form-group">

					  	<label for="formGroupExampleInput2">Rent within</label>
					    <select name="flat_division[]" class="form-control">  
	                        <option>Dhaka</option>
	                        <option>Chittagong</option>
	                        <option>Rajshahi</option>
	                        <option>Barisal</option>
	                        <option>Sylhet</option>
	                        <option>Khulna</option>
	                        <option>Jessore</option>
	                        <option>Rangpur</option>
	                        
                        
                      </select>

					  <label for="formGroupExampleInput2">Area</label>
					    <select name="flat_area[]" class="form-control" id="slct1" required> 
						<?php foreach ($new as $result) {
							# code...
						?>
	                        <option value="<?php echo $result['flat_area'];?>"><?php echo $result['flat_area'];?></option>
	                        <?php } ?>
                        
                        </select>
					  </div>
					 
					  <div class="form-group">
					    <label for="formGroupExampleInput2">Flat type</label>
					    <select name="flat_type[]" class="form-control">  
	                        <option>For family</option>
	                        <option>Sharing</option>
	                        
                        
                      </select>
					  </div>

					  <label for="formGroupExampleInput2">Rent within</label>
					    <select name="flat_rent[]" class="form-control">  
	                        <option>5000</option>
	                        <option>10000</option>
	                        <option>15000</option>
	                        <option>20000</option>
	                        <option>25000</option>
	                        <option>30000</option>
	                        <option>35000</option>
	                        <option>40000</option>
	                        
                        
                      </select>
					  
					  <button type="submit" class="btn btn-default">Submit</button>
				</form>
					<!--<button type="button" class="btn btn-primary search" onclick="window.location.href='search_offline.php'">Search By Filter</button>-->
					<div class="row">
					<?php foreach ($flats as $result)
					{ ?>
						<div class="my_flat">
							<div class="col-md-6">
								<img class="img-rounded" alt="Cinque Terre" width="304" height="236" src="user_images/<?php if($result['flat_picture']==null)
								{
									echo 'No-image-available.jpg';
								}
								else
								{
									echo $result['flat_picture'];
								}
								?>">
							</div>
							<div class="col-md-6">
								<h3> Flat available in <?php echo $result['flat_area'].",".$result['flat_division']; ?> </h3>
								<p> For: <?php echo $result['flat_type'];?> </p>
								<p> Monthly rent: <?php echo $result['flat_rent'];?> tk</p>
								<p> Advance: <?php echo $result['flat_rent_advance'];?> tk </p>
								<h4> Posted On: <?php echo $result['flat_date']; ?> </h4>

								<button type="button" class="btn btn-info" onclick="window.location.href='flat_offline.php?id=<?php echo $result['flat_id'];?>'">More details</button>
								
								

							</div>

						</div>

						<?php } ?>

						
					</div>
				</div>

				<div class="col-md-4">

				</div>
			
		</div>
	</div>
</div>

</body>
</html>