<!DOCTYPE html>
<html>
<head>
	     <title>BEZSho</title>
	     <link rel="stylesheet" href="Style/phonesStyle.css">
	     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	     <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet"> 
       <link rel = "icon" href="img/shopping.png" type = "image/x-icon"> 


</head>
<body>
<br>
<div class="outer-menu">
  <input class="checkbox-toggle" type="checkbox" />
  <div class="hamburger">
    <div></div>
  </div>
  <div class="menu">
    <div>
      <div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="phones.php">Phones</a></li>
          <li><a href="computers.php">Computers</a></li>
          <li><a href="Feedback.php">Feedback</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
	<?PHP

	$con = mysqli_connect('localhost','root','','ProjectPhp');

	$query = " SELECT `Name`, `Image`, `Price`, `Discount`,`Logo`,`Descrip` FROM `Phones` order by Id ASC ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);
	

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
			$img=$product['Image'];
			?>
<div class="container">
	<div class="col-sm-6 col-md-3">
  <div class="card" onclick="myFunction()">
    <div class="card-head" style="background-image:url('<?php echo $img;  ?>');">
      <img src="<?php echo $product['Logo'];  ?>" alt="logo" class="card-logo">
    </div>
    <div class="card-body">
      <div class="product-desc">
        <span class="product-title" style="color:white ;  font-family: 'Squada One' ;" >
                <?php echo $product['Name'];  ?>
                <span class="badge">
                  - <?php echo $product['Discount'];  ?> %
                </span>
        </span>
        <span class="product-caption"><?php echo $product['Descrip'];  ?></span>
        <span class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star grey"></i>
              </span>
      </div>
      <div class="product-properties">
        <span class="product-size">
                <h4>Storage Memory in Go</h4>
                <ul class="ul-size">
                  <li><a href="#">16</a></li>
                  <li><a href="#">32</a></li>
                  <li><a href="#">64</a></li>
                  <li><a href="#" class="active">128</a></li>
                  <li><a href="#" class="active">256</a></li>
                </ul>
              </span>
        <span class="product-color">
                <h4>Colour</h4>
                <ul class="ul-color">
                  <li><a href="#" class="orange"></a></li>
                  <li><a href="#" class="green"></a></li>
                  <li><a href="#" class="yellow"></a></li>
                </ul>
              </span>
        <span class="product-price">
                DH<b><?php echo $product['Price'];  ?></b>
              </span>
      </div>
    </div>
  </div>
</div>
</div>

	<?php		
		}
	}
	?>
<script type="text/javascript">
  function myFunction() {
  alert("This product is not for sale, as this website is for testing only");
}
</script>
</body>
</html>