<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
date_default_timezone_set('America/Detroit');
?>

<!doctype html>
<html lang="en-US">
  <!-- generated by uswds@2.7.0 -->
  <head>
    <?php
      include("assets/includes/meta.inc");
    ?>
    <title>Something didn't work</title>
    <?php
      include("assets/includes/css.inc");
    ?>
  </head>
  <body>
    
    <?php
      include("assets/includes/banner.inc");
    ?>
    
    <!-- Header -->
    <div class="usa-overlay"></div>
    <header class="usa-header usa-header--basic usa-header--megamenu">
      <div class="usa-nav-container">
        <div class="usa-navbar">
          <div class="usa-logo" id="basic-mega-logo">
            <em class="usa-logo__text"><a href="<?php echo $path;?>" title="Home" aria-label="Home">Local Order of Police and Citizens</a></em>
          </div>
          <button class="usa-menu-btn">Menu</button>
        </div>
        
        <nav aria-label="Primary navigation" class="usa-nav">
          <button class="usa-nav__close"><img src="<?php echo $path;?>assets/uswds/img/close.svg" alt="close"></button>
          <ul class="usa-nav__primary usa-accordion">
            <li class="usa-nav__primary-item"><a class="usa-nav__link" href="<?php echo $path;?>"><span>Home</span></a></li>

            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link" aria-expanded="false" aria-controls="basic-mega-nav-section-one"><span>Local OPC's Mission</span></button>
              <div id="basic-mega-nav-section-one" class="usa-nav__submenu usa-megamenu">
                <div class="grid-row grid-gap-4">
                  <div class="usa-col">
                    <ul class="usa-nav__submenu-list">
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>new-contracts.php" class="" alt="">New contracts for police</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>new-contracts.php#upcoming-renewals" class="" alt="">Upcoming contract renewals</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>new-contracts.php#no-contracts" class="" alt="">Police with no contracts</a></li>
                    </ul>
                  </div>
                  <div class="usa-col">
                    <ul class="usa-nav__submenu-list">
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>register-to-vote.php" class="" alt="">Register to vote</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>register-to-vote.php#register-to-vote" class="" alt="">How to register today</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>register-to-vote.php#improve-voting" class="" alt="">Improve access to voting</a></li>
                    </ul>
                  </div>
                  <div class="usa-col">
                    <ul class="usa-nav__submenu-list">
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>report-all-cops.php" class="" alt="">Report all cops</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>report-all-cops.php#share-everything" class="" alt="">Share the good and the bad</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>report-all-cops.php#why-this-matters" class="" alt="">Why this matters to you</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            
            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link" aria-expanded="false" aria-controls="basic-mega-nav-section-two"><span>Useful Information</span></button>
              <div id="basic-mega-nav-section-two" class="usa-nav__submenu usa-megamenu">
                <div class="grid-row grid-gap-4">
                  <div class="usa-col">
                    <ul class="usa-nav__submenu-list">
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>resources.php" class="" alt="">Resources you can use</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>resources.php#steps-for-success" class="" alt="">LOPC steps for success</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>resources.php#inspiration" class="" alt="">Read and learn more</a></li>
                    </ul>
                  </div>
                  <div class="usa-col">
                    <ul class="usa-nav__submenu-list">
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>support.php" class="" alt="">Choose who you support</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>support.php#charity" class="" alt="">Charities that work</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>support.php#legislation" class="" alt="">Legislation that works</a></li>
                    </ul>
                  </div>
                  <div class="usa-col">
                    <ul class="usa-nav__submenu-list">
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>join.php" class="" alt="">Join your local branch</a></li>
                      <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>contact.php" class="" alt="">Contact us</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    
    <!-- Start -->
    <div class="usa-section">
      <div class="grid-container">
        <div class="grid-row grid-gap">
          
          <!-- Side Nav -->
          <div class="usa-layout-docs__sidenav desktop:grid-col-3">
            <nav aria-label="Secondary navigation">
              <ul class="usa-sidenav">
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>">Home</a></li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>new-contracts.php" class="">New Contracts</a>
                  <ul class="usa-sidenav__sublist">
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>new-contracts.php">Protect your community</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>new-contracts.php#upcoming-renewals">Upcoming contract renewals</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>new-contracts.php#no-contracts">Police with no contracts</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>new-contracts.php#why-this-matters">Why this matters to you</a></li>
                  </ul>
                </li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>" class="register-to-vote.php">Register To Vote</a>
                  <ul class="usa-sidenav__sublist">
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>register-to-vote.php">Be heard by power</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>register-to-vote.php#register-to-vote">How to register today</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>register-to-vote.php#improve-voting">Improve access to voting</a></li>
                  </ul>
                </li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>" class="report-all-cops.php">Report All Cops</a>
                  <ul class="usa-sidenav__sublist">
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>report-all-cops.php">What it takes to be heard</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>report-all-cops.php#share-everything">Share the good and bad</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>report-all-cops.php#why-this-matters">Why this matters to you</a></li>
                  </ul>
                </li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>" class="resources.php">Resources</a>
                  <ul class="usa-sidenav__sublist">
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>resources.php">Stand with Giants</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>resources.php#steps-for-success">LOPC steps for success</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>resources.php#inspiration">Read and learn more</a></li>
                  </ul>
                </li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>" class="support.php">Support</a>
                  <ul class="usa-sidenav__sublist">
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>support.php">Choose who you support</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>support.php#charity">Charities that work</a></li>
                    <li class="usa-sidenav__item"><a href="<?php echo $path;?>support.php#legislation">Legislation that works</a></li>
                  </ul>
                </li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>join.php" class="">Join your Local OPC</a></li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>contact.php" class="">Contact us</a></li>
              </ul>
            </nav>
          </div>
          
          <!-- Content -->
          <main class="usa-layout-docs__main desktop:grid-col-9 usa-prose usa-layout-docs" id="main-content">
            <h1>Error</h1>
            <p class="usa-intro">Sorry, we didn't find that page!</p>
            <p>Click on any of the links on this page to try again.</p>
          </main>
        </div>
      </div>
    </div>
   
    <!-- Fin! -->
    <?php
      include("assets/includes/footer.inc");
      include("assets/includes/scripts.inc");
    ?>
  </body>
</html>