<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet" />
  

</head>
<body>

	<?php include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/natures.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/natures1.png" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/natures2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"> About Us</h2>
	</div>
   <div class="container-fluid">
	   <div class="row">
		    <div class="col-lg-6 col-md-6 col-12">
			      <img src="images/kolhapurimg.jpg" class="img-fluid aboutimg">
		      </div>
		  <div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4"> I am the Kolhapur :)</h2>
			<p class="py-3">Kolhapur is a city on the banks of the Panchaganga River, in the west Indian state of Maharashtra. It’s known for its temples, like the ancient Mahalakshmi Temple, a Hindu pilgrimage site. The Bhavani Mandap is an imposing old palace with a small museum displaying stuffed wild animals. Close by, Rankala Lake is surrounded by gardens. The hilltop Jyotiba Temple complex is on the city's outskirts.</p>
			<a href="about.php" class="btn btn-success"> Check More </a>
		</div>
	</div>
</div>
</section>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"> Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
					   <img class="card-img-top" src="images/mahalaxmitemple.jpg" alt="Card image">
					   <div class="card-body">
					    <h4 class="card-title"> Shri Ambabai Temple. :)</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">See Profile</a>
					  </div>
					</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
					   <img class="card-img-top" src="images/rankalalake.jpg" alt="Card image">
					   <div class="card-body">
					    <h4 class="card-title">Rankala Lake. :) </h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">See Profile</a>
					  </div>
					</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
					   <img class="card-img-top" src="images/panhalafort.jpg" alt="Card image">
					   <div class="card-body">
					    <h4 class="card-title">Panhala Fort. :)</p>
					    <a href="#" class="btn btn-primary">See Profile</a>
					  </div>
					</div>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"> Our Gallery</h2>
	</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/mahalaxmitemple.jpg" class="img-fluid pb-4" style="width: 100%">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/jyotibatemple.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/rankalalake.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/panhalafort.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/kanermath.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/Tambadapandhara.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/kolhapurimisal.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/kolhapurichappal.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="images/newpalace.jpg" class="img-fluid pb-4">
				</div>
			</div>
			 
		</div>
</section>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact Us</h2>
	</div>

		<div class="w-50 m-auto">
			<form action="userinfo.php" method="post">
				<div class="form-group">
					<label>USer Name</label>
					<input type="text" name="user" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Email Id</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Mobile No</label>
					<input type="text" name="mobile" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Comments</label>
					<textarea class="form-control" name="comments"></textarea>
				</div>
				  <button type="submit" class="btn btn-success">Submit</button>
			</form>
			
		</div>

</section>


<footer>
	<p class="p-3 bg-dark text-white text-center">@Aapal Kolhapur!!!</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>