<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">

	<title>  Web Portfolio | Rissel Intod </title>

	<!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Devicon -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">


    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Italianno|Acme" rel="stylesheet">

    <!-- fav icon -->
    <link rel="icon" type="images/gif/png" href="assets/images/r.png">

	<!-- Animate css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

    <div id="welcome" class="container-fluid flex-center position-ref">
        <div id="name">
            <div class="container">
                <b><h1 class="animated fadeInDown" id="welcometext"><b id="R"> R </b> I S S E L &nbsp <b id="I"> I </b> N T O D  </h1></b>
                <p class="animated fadeInUp" id="fullstack"> FULL-STACK WEB DEVELOPER </p>
            </div>

            <div class="down btn mt-5 fadeOutUp">        
                <a href="#home">
                    <p id="learn" class="text-light animated zoomIn">Learn More<br><i class="fas fa-chevron-down"></i></p>
                </a>
            </div>
        </div>
    </div> <!-- end welcome page -->

	<nav id="navB" class="navbar navbar-expand-lg navbar-dark sticky-top">
		<a class="navbar-brand" href="#">
			<img id="logo" src="assets/images/r.png" width="45" height="45"> <b id="port"> Portfolio </b>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navbar-nav" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
		
				<li class="nav-item">
					<a class="nav-link" href="#home"> Home </a>
				</li>
				<li class="nav-item">
					<a class="nav-link fadeOutUp" href="#projects"> Projects </a>
				</li>
				<li class="nav-item">
					<a id="logout-but fadeOutUp" class="nav-link" href="#about"> About </a>
				</li>
				<li class="nav-item">
					<a id="logout-but" class="nav-link" href="#contact"> Contact </a>
				</li>
			</ul>
		</div> <!-- end navbar nav -->
	</nav> <!-- end nav -->

	<section class="container-fluid" id="home">
		<div class="row text-center offset-lg-2">
			<div class="col-12 col-md-3 col-lg-3 p-5">
				<img class="mb-3" width="100" height="100" src="assets/images/dev.png">
				<p> WEB DEVELOPMENT </p>
			</div>
			<div class="col-12 col-md-3 col-lg-3 p-5">
				<img class="mb-3" width="100" height="100" src="assets/images/design.png">
				<p> WEB DESIGN </p>
			</div>
			<div class="col-12 col-md-3 col-lg-3 p-5">
				<img class="mb-3" width="100" height="100" src="assets/images/mobile.png">
				<p> RESPONSIVE DESIGN </p>
			</div>
		</div>
	</section> <!-- end home -->

	<section id="about" class="container-fluid bg-light p-4">
		<div class="row text-center p-4">
			<div class="col-12 col-md-4 col-lg-3 mt-2">
				<img id="img" class="img-fluid" src="assets/images/gradpic.jpg">
				<a id="download" class="btn btn-block text-light mt-5" href="assets/images/risselintod_resume.docx" type="download" download><i class="fas fa-download"></i>&nbsp Download Resume </a>
			</div> <!-- left side -->
			<div class="col-12 col-md-4 col-lg-3">
				<h1 class="text-center p-4">About Me</h1>
				<p class="text-justify">I'm a Full-Stack Web Developer currently living in Manila, Philippines. I graduated from Southern Mindanao Colleges with a course Bachelor of Science in Computer Engineering.
				It was my passion to do programming and I was intrigued by how a website or web application was made. Working in Front-End is what I'm interested in the most but I'm not afraid to work with Backend.</p>
			</div> <!-- right side -->
			<div class="col-12 col-md-4 col-lg-6">
				<div class="row text-center">
					<div class="col-3 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/html.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/css.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/bootstrap.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/javascript.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/jquery.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/nodejs.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/express.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/mysql.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/mongodb.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/php.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/laravel.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/git.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/github.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/gitlab.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/apache.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/heroku.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/angularjs.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/visualstudio.svg">
					</div>
					<div class="col-4 col-lg-3 p-2 devicon">
						<img height="80" src="assets/images/reactjs.svg">
					</div>
				</div>
			</div>

		</div> <!-- end of row -->
	</section> <!-- end section 2 -->

	<section id="projects" class="container py-3">
		<dir>
			<h1 class="text-center p-5"> My Work </h1>
			<div class="row mb-5">
				<div class="col-12 col-md-4 col-lg-4">
					<div class="text-center">
						<img id="caps" height="170" width="280" src="assets/images/madelicious.png">
						<div id="cap" class="card-body">
							<a target="_blank" href="https://risselintod.github.io/frettop/" class="text-light"><button class="btn btn-outline-dark btn-block bg-dark text-light"> Madelicios </button></a>
						</div>
					</div> <!-- end card -->
				</div> <!-- end col -->

				<div class="col-12 col-md-4 col-lg-4">
					<div class="text-center">
						<img height="170" width="280" src="assets/images/book2GO.png">
						<div class="card-body">
							<a target="_blank" href="https://serene-stream-12989.herokuapp.com/" class="text-light"><button class="btn btn-outline-dark btn-block bg-dark text-light"> Book2GO </button></a>

						</div>
					</div> <!-- end card -->
				</div> <!-- end col -->

				<div class="col-12 col-md-4 col-lg-4">
					<div class="text-center">
						<img height="170" width="280" src="assets/images/ur.png">
						<div class="card-body">
							<a target="_blank" href="https://serene-gorge-10128.herokuapp.com/" class="text-light"><button class="btn btn-outline-dark btn-block bg-dark text-light"> Fretcleaner </button></a>
						</div>
					</div> <!-- end card -->
				</div> <!-- end col -->

			</div> <!-- end row -->
			<div class="row like bg-secondary mt-4 p-4">
				<div class="col-12 col-md-5 col-lg-5 text-center">
					<small>
						<h2> Like What You See? </h2>
					<p> Check out my resume to learn more. </p>
					</small>
				</div>
				<div class="col-12 col-md-3 col-lg-3 offset-sm-3 mt-3 text-center">
					<a class="text-light" target="_blank" href="assets/images/risselintod_resume.pdf"><button class="btn btn-block view text-light"> View Resume </button></a>
				</div>
			</div>
		</dir>
	</section> <!-- end section 1 -->

	<section class="container" id="contact">
		<small>
			<h1 class="text-center mt-5"> Contact Information </h1>
			<hr>
			<div class="row mt-5">
				<div id="icon" class="p-3 mt-2 mb-5 col-12 col-md-3 col-lg-3 text-center">
					<i class="mb-3 fas fa-home"></i>
					<h6> LOCATION </h6>
					<p> O188A Guiho Cembo Makati City </p>
				</div>
				<div id="icon" class="p-3 mt-2 mb-5 col-12 col-md-3 col-lg-3 text-center">
					<i class="mb-3 fas fa-phone-square"></i>
					<h6> PHONE </h6>
					<p> (+63)9121741562 </p>
				</div>
				<div id="icon" class="p-3 mt-2 mb-5 col-12 col-md-3 col-lg-3 text-center">
					<i class="mb-3 fas fa-envelope"></i>
					<h6> EMAIL </h6>
					<p> rv.intod@gmail.com </p>
				</div>
				<div id="icon" class="p-3 mt-2 mb-5 col-12 col-md-3 col-lg-3 text-center">
					<i class="mb-3 fas fa-share-square"></i>
					<h6> SOCIAL MEDIA </h6>
					<h6>
						<a id="icon" target="_blank" href="https://www.facebook.com/rissel16intod"> <i class="fab fa-facebook-square mx-1"></i> </a>
						<a id="icon" target="_blank" href="https://twitter.com/rissel_intod"> <i class="fab fa-twitter-square mx-1"></i> </a>
						<a id="icon" target="_blank" href="https://plus.google.com/u/1/collection/gtBAeF"> <i class="fab fa-google-plus-square mx-1"></i> </a>
						<a id="icon" target="_blank" href="https://www.instagram.com/rissel_intod/"> <i class="fab fa-instagram mx-1"></i> </a>  
					</h6>
				</div>
			</div>
		</small>
			<div class="row">
				<div class="col-12">
					
				</div>
			</div>
			
			<!-- <div id="get" class="row border p-5 mb-5"> -->
				<!-- <form action="./controller/mailer.php" method="POST"> -->
					<!-- <div class="col-12 col-md-12 col-lg-12 mb-4"> -->
						<!-- <h2 class="text-center"> Get in Touch </h2> -->
					<!-- </div> -->
					<!-- <div class="col-12 col-md-6 col-lg-6 p-2"> -->
						<!-- <input type="text" name="name" id="name" class="form-control" placeholder="Enter your fullname * "> -->
					<!-- </div> -->
					<!-- <div class="col-12 col-md-6 col-lg-6 p-2"> -->
						<!-- <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address * "> -->
					<!-- </div> -->
					<!-- <div class="col-12 col-md-12 col-lg-12"> -->
						<!-- <textarea type="text" name="message" id="message" class="form-control mt-3" rows="10" placeholder="Your Message *"></textarea> -->
					<!-- </div> -->
					<!-- <div class="col-12 col-md-3 col-lg-3 offset-lg-9"> -->
						<!-- <button type="submit" id="send" class="btn btn-block mt-3 text-light"> Send Message </button> -->
					<!-- </div> -->
				<!-- </form> -->
			<!-- </div> -->
	</section>

	<footer class="footer bg-secondary text-dark">
		<small>
			<p class="text-center p-3 mb-0"> <b>Rissel &nbspIntod</b> &copy; 2018. &nbsp All rights reserved </p>
		</small>
	</footer> <!-- end footer -->









	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>