<?php
    if (isset($_POST['csend'])) {
        $full_name = $_POST['cname'];
        $email_add = $_POST['cemail'];
        $mail_sub = $_POST['csub'];
        $message = $_POST['cmsg'];

        $msg = $full_name . $email_add . $mail_sub . $message;

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        mail('arafatakhter505@gmail.com', 'Our website contact', $msg, $headers);
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- progress bar -->
    <link rel="stylesheet" href="css/jquery.lineProgressbar.css">

    <!-- My Style Sheet css -->
    <link rel="stylesheet" href="style.css">

    <title>Arafat Profile</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  </head>
  <body class="bg-light">
    <!-- Header section -->
    <header id="home">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
				<div class="container">
    			  <a class="navbar-brand" href="http://arafatakhter.info/" ><img src="img/logo.png" alt="Logo" height="50"></a>
    			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
    			  </button>

    			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul class="navbar-nav ml-auto">
    				  <li class="nav-item">
    					<a class="nav-link text-light active" href="#home"><i class="fas fa-home px-2"></i>Home <span class="sr-only">(current)</span></a>
    				  </li>
    				  <li class="nav-item">
    					<a class="nav-link text-light" href="#about"><i class="fas fa-address-card px-2"></i>About</a>
    				  </li>
    				  <li class="nav-item">
    					<a class="nav-link text-light" href="#skill"><i class="fas fa-lightbulb  px-2"></i>Skill</a>
    				  </li>
    				  <li class="nav-item">
    					<a class="nav-link text-light" href="#portfolio"><i class="fas fa-briefcase px-2"></i>Portfolio</a>
    				  </li>
    				  <li class="nav-item">
    					<a class="nav-link text-light" href="#testimonial"><i class="fas fa-comments px-2"></i>Testimonial</a>
    				  </li>
    				  <li class="nav-item">
    					<a class="nav-link text-light" href="#team"><i class="fas fa-users px-2"></i>Team</a>
    				  </li>
    				  <li class="nav-item">
    					<a class="nav-link text-light" href="#contact"><i class="fas fa-address-book px-2"></i>Contact</a>
    				  </li>
    				</ul>
    			  </div>
                </div>
			</nav>
          </div>
        </div>
        <div class="row text-center py-5 my-5 main-h">
        	<div class="col-md-12 py-5 my-5">
        		<img src="img/profile-1.jpg" alt="Profile Pic" width="200px" height="200px" class="rounded-circle" />
        		<h1 class="text-uppercase font-weight-bold text-light display-3 pt-5">arafat <span class="color-1">akhter</span></h1>
        		<h2 class="text-light pb-5">I'm a <span class="type color-1"></span></h2>
        	</div>
        </div>
      </div>
    </header>

    <!-- About section -->
    <section id="about" class="py-5">
    	<div class="container">
    		<div class="row section-t pb-4">
    			<div class="col-md-12">
    				<h2 class="text-uppercase text-center font-weight-bold">about <span class="color-1">me</span></h2>
    				<hr>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-8">
    				<h2>I'm <span class="color-1">Arafat Akhter</span>, a Web Designer</h2>
    				<p class="text-justify">Hello, My name is Arafat. I am a web designer(psd to html) and wordpress customizer. Design and web development is my passion and profession. If you need an exceptional, clean aesthetically beautiful website then you are at the right place.I work efficiently and meticulously because I know our clients want effective and flawless designs in a timely manner.</p>
                    <br>
                    <br>
    				<a href="https://www.facebook.com/mdarafat.akhter.7" target="_blank" class="text-light mr-2"><i class="fab fa-facebook-f"></i></a>
    				<a href="https://twitter.com/AkhterArafat" target="_blank" class="text-light mr-2"><i class="fab fa-twitter"></i></a>
    				<a href="https://www.instagram.com/arafat_akhter/" target="_blank" class="text-light mr-2"><i class="fab fa-instagram"></i></a>
    				<a href="https://join.skype.com/invite/URU7jY6mAqGN" target="_blank" class="text-light mr-2"><i class="fab fa-skype"></i></a>
    			</div>
    			<div class="col-md-4 pt-4">
    				<p><b class="text-dark">Name:</b> &nbsp;Arafat Akhter</p>
    				<hr>
    				<p><b class="text-dark">Email:</b><a href="mailto:arafatakhter505@gmail.com" class="color-1"> 	&nbsp;arafatakhter505@gmail.com</a></p>
    				<hr>
    				<p><b class="text-dark">Age:</b>	&nbsp;20</p>
    				<hr>
    				<p><b class="text-dark">From:</b>	&nbsp;Bangladesh</p>
    				<a href="https://www.fiverr.com/arafat_akhter" class="btn btn-outline-success rounded-pill px-5 py-2 mt-2">Hire Me</a>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Skill section -->
    <section id="skill" class="py-5 text-light">
    	<div class="container">
    		<div class="row section-t pb-4">
    			<div class="col-md-12">
    				<h2 class="text-uppercase text-center font-weight-bold">My <span class="color-1">Skill</span></h2>
    				<hr>
    			</div>
    		</div>
    		<div class="row py-4">
    			<div class="col-md-6">
    				<h5>Html</h5>
    				<div id="html"></div>
                    <h5>Css</h5>
                    <div id="css"></div>
                    <h5>Bootstrap</h5>
                    <div id="bootstrap"></div>
    			</div>
    			<div class="col-md-6">
    				<h5>JavaScript, jQuery</h5>
    				<div id="jq"></div>
                    <h5>WordPress</h5>
                    <div id="wp"></div>
                    <h5>Graphic Design</h5>
                    <div id="graphic"></div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Portfolio section -->
    <section id="portfolio" class="py-5">
    	<div class="container">
    		<div class="row section-t pb-4">
    			<div class="col-md-12">
    				<h2 class="text-uppercase text-center font-weight-bold">My <span class="color-1">Work</span></h2>
    				<hr>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-12">
    				<ul class="nav nav-pills justify-content-center">
					  <li class="nav-item">
						<a class="nav-link text-light mx-2 mb-2" data-filter="*">All</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-light mx-2 mb-2" data-filter=".wd">Web Design</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-light mx-2 mb-2" data-filter=".wp">WordPress</a>
					  </li>
					</ul>
    			</div>
    		</div>
    		<div class="row miup my-5">
    			<div class="col-md-4 mix wd mb-4">
    				<div class="screen">
                        <a href="http://school.arafatakhter.info/" target="_blank"><img src="img/web1.png" alt="web pic"></a>
                    </div>
    			</div>
    			<div class="col-md-4 mix wd mb-4">
    				<div class="screen">
                        <a href="http://construction.arafatakhter.info/" target="_blank"><img src="img/web2.png" alt="web pic"></a>    
                    </div>
    			</div>
    			<div class="col-md-4 mix wd mb-4">
    				<div class="screen">
                        <a href="http://finance.arafatakhter.info/" target="_blank"><img src="img/web3.png" alt="web pic"></a>   
                    </div>
    			</div>
                <div class="col-md-4 mix wp mb-4">
                    <div class="screen">
                        <a href="http://emarket.arafatakhter.info/" target="_blank"><img src="img/web6.png" alt="web pic"></a>
                    </div>
                </div>
    			<div class="col-md-4 mix wd mb-4">
    				<div class="screen">
                        <a href="http://ecommerce.arafatakhter.info/" target="_blank"><img src="img/web4.png" alt="web pic"></a>
                    </div>
    			</div>
    			<div class="col-md-4 mix wd mb-4">
    				<div class="screen">
                        <a href="http://landingpage.arafatakhter.info/" target="_blank"><img src="img/web5.png" alt="web pic"></a>
                    </div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Testimonial section -->
    <section id="testimonial" class="py-5 text-light">
    	<div class="container">
    		<div class="row section-t pb-4">
    			<div class="col-md-12">
    				<h2 class="text-uppercase text-center font-weight-bold">testimonial</h2>
    				<hr>
    			</div>
    		</div>
    		<div class="row text-center pt-4">
    			<div class="col-md-4">
    				<img src="img/client-1.jpg" alt="Client Pic" width="100px" height="100px" class="rounded-circle" />
        			<h2 class="text-light">Albert</h2>
        			<p class="text-left lead">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cum, soluta consectetur corrupti quae, "</p>
    			</div>
    			<div class="col-md-4">
    				<img src="img/client-2.jpg" alt="Client Pic" width="100px" height="100px" class="rounded-circle" />
        			<h2 class="text-light">Jonas</h2>
        			<p class="text-left lead">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cum, soluta consectetur corrupti quae, "</p>
    			</div>
    			<div class="col-md-4">
    				<img src="img/client-3.jpg" alt="Client Pic" width="100px" height="100px" class="rounded-circle" />
        			<h2 class="text-light">Kyryll</h2>
        			<p class="text-left lead">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi cum, soluta consectetur corrupti quae, "</p>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Team section -->
    <section id="team" class="py-5">
    	<div class="container">
    		<div class="row section-t pb-4">
    			<div class="col-md-12">
    				<h2 class="text-uppercase text-center font-weight-bold">my <span class="color-1">team</span></h2>
    				<hr>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-3 mb-4">
    				<div class="tbg">
                        <img src="img/mukul.jpg" alt="team member" class="w-100 border border-success">
                        <div class="des text-center">
                            <h3 class="mb-0">Monaim Mukul</h3>
                            Web Designer
                            <br>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter mx-2"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
    			</div>
    			<div class="col-md-3 mb-4">
    				<div class="tbg">
                        <img src="img/gias.jpg" alt="team member" class="w-100 border border-success">
                        <div class="des text-center">
                            <h3 class="mb-0">Gias Uddin</h3>
                            Web Designer
                            <br>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter mx-2"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
    			</div>
    			<div class="col-md-3 mb-4">
    				<div class="tbg">
                        <img src="img/ridoy.jpg" alt="team member" class="w-100 border border-success">
                        <div class="des text-center">
                            <h3 class="mb-0">Rashidul Islam</h3>
                            Web Designer
                            <br>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter mx-2"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
    			</div>
    			<div class="col-md-3 mb-4">
    				<div class="tbg">
                        <img src="img/shakib.jpg" alt="team member" class="w-100 border border-success">
                        <div class="des text-center">
                            <h3 class="mb-0">Ahamed Shakib</h3>
                            Web Designer
                            <br>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter mx-2"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Contact section -->
    <section id="contact" class="py-5 text-center">
    	<div class="container">
    		<div class="row section-t pb-4">
    			<div class="col-md-12">
    				<h2 class="text-uppercase text-center text-light font-weight-bold">contact <span class="color-1">me</span></h2>
    				<hr>
    			</div>
    		</div>
    		<div class="row pb-3">
    			<div class="col-md-12">
    				<form action="" method="post">
					  <div class="form-row">
					  	<div class="form-group mb-4 col-md-6">
						  <input type="text" class="form-control bg-transparent text-light" id="inputname" placeholder="Name *" name="cname">
						</div>
						<div class="form-group mb-4 col-md-6">
						  <input type="email" class="form-control bg-transparent text-light" id="inputEmail4" placeholder="Email *" name="cemail">
						</div>
					  </div>
					  <div class="form-group mb-4">
						<input type="text" class="form-control bg-transparent text-light" id="inputsubject" placeholder="Subject" name="csub">
					  </div>
					  <div class="form-group mb-4">
					    <textarea class="form-control bg-transparent text-light" id="exampleFormControlTextarea1" rows="5" placeholder="Type Your Message" name="cmsg"></textarea>
					  </div>
					  <button type="submit" class="btn btn-success px-5 py-2 mt-3" name="csend">Send Message</button>
					</form>
    			</div>
    		</div>
    	</div>
    </section>

   <!-- Footer section -->
   <footer class="text-center py-2">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-12 mt-1 pt-1">
   				<p class="lead">Copyright &copy; Arafat Akhter 2020 . All Rights Reserved</p>
   			</div>
   		</div>
   	</div>
   </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- jQuery plugin -->
    <script src="js/jquery.js"></script>
    <!-- navbar scroll -->
    <script src="js/jquery.scroller.js"></script>
    <!-- typed effect -->
    <script src="js/typed.js"></script>
    <!-- progress bar -->
    <script src="js/jquery.lineProgressbar.js"></script>
    <!-- mixit up -->
    <script src="js/mixitup.min.js"></script>
    <!-- image scroling on hover -->
    <script src="js/jquery-image-scroll.js"></script>
    <!-- custom js -->
    <script src="script.js"></script>
  </body>
</html>