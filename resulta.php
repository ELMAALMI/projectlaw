<!DOCTYPE html>
<html>
<head>
	<title>RÉSULTAT</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/stylefooter.css">
	<link rel="icon" type="image/ico" href="style/titleicon.png" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="BILLAL EL MAALMI" />
</head>
<body>
<div class="navbare">
	<div class="topsite">
		<img src="style/logosite.png" class="logo">
	      <ul class="nav">
              <img src="style/Partners.png">
			  <li><a href="">NOS PARTENAIRES</a></li>
			  <img src="style/contact-us.png">
			  <li><a href="">CONTACTEZ NOUS</a></li>
		 </ul>
	</div>
	<h1 id="title">RÉSULTAT DE RECHERCHE</h1>
	<a href="/"><button>RECHERCHER</button></a>

</div>






<div class="RESULTA">
	<p>
<?php
$num=$_GET['find'];
$con=mysqli_connect("localhost","id9430967_admine","billal","id9430967_droit");
if ( mysqli_connect_error()) {
	echo "Failed to connect to base de donnee". mysqli_connect_error();
}
if (isset($_GET['find'])) {


$result=mysqli_query($con,"SELECT * FROM commerce WHERE num=$num");
while ($row=mysqli_fetch_array($result)) {
	echo "".$row['article'];

}
mysqli_close($con);
}
else
echo ".";
mysqli_close($con);
 ?>
	</p>
</div>









</section>
		<footer class="footer-distributed">

			<div class="footer-left">

				<img src="style/logosite.png">

			
			</div>

			<div class="footer-center">

				<div class="About">
					<i class="fa fa-map-marker"></i>
					<p><font size="4"> About</font></p>
					<ul>
                <li><a href="About.html" target="_blank">Le site</a></li>
                <li><a>Service</a></li>
                <li><a href="Contact-us.html" target="_blank">Contact us</a></li>
                </ul>
				</div>
			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Social Medias</span>
	
				</p>

				<div class="footer-icons">

					<a href="#"><img src="style/inta.png"></a>
					<a href="#"><img src="style/fb.png"></a>
					<a href="#"><img src="style/link.png"></a>
					<a href="#"><img src="style/github.png"></a>

				</div>

			</div>
			<hr>

			<p class="Copyright">© Copyright 2019 - All rights reserved by:<a href=""> <i>BILLAL EL MAALMI</i></a></p>

		</footer>
</body>
</html>