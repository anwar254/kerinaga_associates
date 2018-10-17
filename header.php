<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bulma.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/mediaquery.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/app.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="images/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>
      <?php
        if($title){
          echo 'Kering - '.$title;
        }else{
          echo "Kering";
        }
      ?>
    </title>
  </head>
  <body>
    <div class="main-wrapper">
      <div id="top"></div>
    	<header id="header">
  			<div class="menu-bar">
  			  <div class="columns">
  					<div class="column">
  						<nav class="navbar nav-links">
  							<div class="container">
				          <div class="navbar-brand">
                    <a href="#" class="navbar-item">
                      <img src="images/logo.png" alt="kering associates logo">
                    </a>
                    <span class="navbar-burger burger" data-target="navMenu"> 
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                    </span>
                  </div>
                  <div class="navbar-menu" id="navbarMenu">
                    <div class="navbar-end">
                      <a href="index.php" class="navbar-item">Home</a>
                      <a href="about.php" class="navbar-item">About Us</a>
                      <a href="services.php" class="navbar-item">Our Services</a>
                      <a href="portfolio.php" class="navbar-item">Project Portfolio</a>
                      <a href="downloads.php" class="navbar-item">Doenloads</a>
                      <a href="faqs.php" class="navbar-item">FAQs</a>
                      <a href="contactus.php" class="navbar-item">Contact Us</a>
                    </div>
                  </div>
  							</div>
  						</nav>
  					</div>
  			  </div>
  			</nav>
  		</header>
 