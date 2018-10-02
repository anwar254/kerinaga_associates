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
				          <div class="navbar-start">
				            <div class="navbar-brand">
				              <a class="navbar-item" href="index.php">
				                <img src="images/kering_branding.png" alt="keriang branding" width="112" style="min-height: 4.75rem">
				              </a>

				              <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" id="mobile-menu">
				                <span aria-hidden="true"></span>
				                <span aria-hidden="true"></span>
				                <span aria-hidden="true"></span>
				              </a>
				            </div>
				          </div>
				          <div class="navbar-end">
				            <div class="navbar-menu" id="menu">
				              <ul>
				                <li class="nav-link"><a href="index.php">Home</a></li>
				                <li class="nav-link"><a href="about.php">About Us</a></li>
				                <li class="nav-link"><a href="services.php">Our Services</a></li>
				                <li class="nav-link"><a href="portfolio.php">Project Portfolio</a></li>
				                <li class="nav-link"><a href="downloads.php">Downloads</a></li>
				                <li class="nav-link"><a href="faqs.php">fAQs</a></li>
				                <li class="nav-link"><a href="contactus.php">contact Us</a></li>
				              </ul>
				            </div>
				          </div>
  							</div>
  						</nav>
  					</div>
  			  </div>
  			</nav>
  		</header>
