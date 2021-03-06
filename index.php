<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] );
date_default_timezone_set('America/Detroit');

function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'usa-current'; //class name in css 
  } 
}
?>

<!doctype html>
<html lang="en-US">
  <!-- generated by uswds@2.7.0 -->
  <head>
    <?php
      include("assets/includes/meta.inc");
    ?>
    <title>Local Order of Police and Citizens</title>
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
    <header class="usa-header usa-header--extended">
      <div class="usa-navbar">
        <div class="usa-logo" id="extended-logo">
          <em class="usa-logo__text"><a href="<?php echo $path;?>" title="Home" aria-label="Home">Local Order of Police and Citizens</a></em>
        </div>
        <button class="usa-menu-btn">Menu</button>
      </div>
      <nav aria-label="Primary navigation" class="usa-nav">
        <div class="usa-nav__inner">
          <button class="usa-nav__close"><img src="<?php echo $path;?>assets/uswds/img/close.svg" alt="close"></button>
          <ul class="usa-nav__primary usa-accordion">
            <li class="usa-nav__primary-item"><a class="usa-nav__link usa-current" href="<?php echo $path;?>" alt=""><span>Home</span></a></li>
            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link" aria-expanded="false" aria-controls="extended-nav-section-one"><span>New Contracts</span></button>
              <ul id="extended-nav-section-one" class="usa-nav__submenu">
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>new-contracts/" class=""> Protect your community</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>new-contracts/#upcoming-renewals" class=""> Upcoming contract renewals</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>new-contracts/#no-contracts" class=""> Police with no contracts</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>new-contracts/#why-this-matters" class=""> Why this matters to you</a></li>
              </ul>
            </li>
            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link" aria-expanded="false" aria-controls="extended-nav-section-two"><span>Register To Vote</span></button>
              <ul id="extended-nav-section-two" class="usa-nav__submenu">
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>register-to-vote/" class=""> Be heard by power</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>register-to-vote/#register-to-vote" class=""> How to register today</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>register-to-vote/#improve-voting" class=""> Improve access to voting</a></li>
              </ul>
            </li>
            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link" aria-expanded="false" aria-controls="extended-nav-section-three"><span>Report All Cops</span></button>
              <ul id="extended-nav-section-three" class="usa-nav__submenu">
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>report-all-cops/" class=""> What it takes to be heard</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>report-all-cops/#share-everything" class=""> Share the good and bad</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>report-all-cops/#why-this-matters" class=""> Why this matters to you</a></li>
              </ul>
            </li>
            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link" aria-expanded="false" aria-controls="extended-nav-section-four"><span>Resources</span></button>
              <ul id="extended-nav-section-four" class="usa-nav__submenu">
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>resources/"> Stand with giants</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>resources/#steps-for-success" class=""> LOPC steps for success</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>resources/#inspiration" class=""> Read and learn more</a></li>
              </ul>
            </li>
            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link" aria-expanded="false" aria-controls="extended-nav-section-five"><span>Support</span></button>
              <ul id="extended-nav-section-five" class="usa-nav__submenu">
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>support/"> Choose who you support</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>support/#charity" class=""> Charities that work</a></li>
                <li class="usa-nav__submenu-item"><a href="<?php echo $path;?>support/#legislation" class=""> Legislation that works</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="usa-nav__secondary">
          <ul class="usa-nav__secondary-links">
            <li class="usa-nav__secondary-item"><a href="<?php echo $path;?>join/">Join</a></li>
            <li class="usa-nav__secondary-item"><a href="<?php echo $path;?>contact/">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- Beginning -->
    <main id="main-content">
      
      <!-- Hero -->
      <section class="usa-hero" aria-label="Introduction">
        <div class="grid-container">
          <div class="usa-hero__callout">
            <h1 class="usa-hero__heading"><span class="usa-hero__heading--alt">Be heard:</span></h1>
            <p>We want to better understand our nation's police contracts.</p>
            <p>We are organizing ourselves to participate as equals.</p>
            <a class="usa-button" href="<?php echo $path;?>join/" alt="">Help us!</a>
          </div>
        </div>
      </section>

      <!-- Introduction -->
      <section class="grid-container usa-section">
        <div class="grid-row grid-gap">
          <div class="tablet:grid-col-4">
            <h2 class="font-heading-xl margin-top-0 tablet:margin-bottom-0">Things must change</h2>
          </div>
          <div class="tablet:grid-col-8 usa-prose">
            <p>In 2017, "<a href="https://www.reuters.com/investigates/special-report/usa-police-unions/" alt="" target="_blank" rel="noopener noreferrer">Reuters examined police union contracts</a> across the country and found a pattern of protections afforded officers: Many contracts erase disciplinary records or allow police to forfeit sick leave for suspensions. Meantime, residents face hurdles in pursuing complaints."</p>
            <p>These contracts are almost always between the local union for police officers and the city. If the leadership of the city doesn't hear from those who live in the community where that police department operates, then the interests of those citizens won't be represented, and nothing will change.</p>
            <p>The Local Order of Police and Citizens aims to start the conversations that will make sure that doesn't happen.</p>
            <p>Citizens <em>and police</em> should unite in order to make sure every voice is heard and listened to before making decisions related to the law, order, and safety of a community. This kind of participation is the foundation of American democracy and the very reason we are free to organize.</p>
            <p>Support the idea of a Local OPC. Support the idea of a locally-managed community.</p>
          </div>
        </div>
      </section>

      <!-- 4 highlights -->
      <section class="usa-graphic-list usa-section usa-section--dark">
        <div class="grid-container">
          <div class="usa-graphic-list__row grid-row grid-gap">
            <div class="usa-media-block tablet:grid-col">
              <img class="usa-media-block__img home-circle"  src="<?php echo $path;?>assets/images/police-badge.png" alt="Icon of a police badge created by Freepik on Flaticon.com.">
              <div class="usa-media-block__body">
                <h2 class="usa-graphic-list__heading">Negotiate new contracts.</h2>
                <p>Every few years, <a href="<?php echo $path;?>new-contracts/" alt="">police union contracts</a>, come up for negotiation. Get your community involved and make sure you are a part of those discussions.</p>
              </div>
            </div>
            <div class="usa-media-block tablet:grid-col">
              <img class="usa-media-block__img home-circle"  src="<?php echo $path;?>assets/images/vote.png" alt="Icon of a vote flag created by smalllikeart on Flaticon.com.">
              <div class="usa-media-block__body">
                <h2 class="usa-graphic-list__heading">Increase voter turnout.</h2>
                <p>In 2016, only 55.7% of the voting age public turned out for the US elections, leaving our nation ranked 26 out of 32 OECD nations. <a href="<?php echo $path;?>register-to-vote/" alt="">This number must increase</a>.</p>
              </div>
            </div>
          </div>
          <div class="usa-graphic-list__row grid-row grid-gap">
            <div class="usa-media-block tablet:grid-col">
              <img class="usa-media-block__img home-circle"  src="<?php echo $path;?>assets/images/court.png" alt="Icon of the scales of justice created by Freepik on Flaticon.com.">
              <div class="usa-media-block__body">
                <h2 class="usa-graphic-list__heading">Make their work public.</h2>
                <p>Anyone who has interacted with the police - in both good and bad ways - has a story to tell. Take the time to <a href="<?php echo $path;?>report-all-cops/" alt="">report all cops</a> and spread their stories.</p>
              </div>
            </div>
            <div class="usa-media-block tablet:grid-col">
              <img class="usa-media-block__img home-circle"  src="<?php echo $path;?>assets/images/email.png" alt="Icon of an envelope containing a heart created by freepik on Flaticon.com.">
              <div class="usa-media-block__body">
                <h2 class="usa-graphic-list__heading">Support the right groups.</h2>
                <p>Every day presents a new opportunity for your community to give and get help. Make sure <a href="<?php echo $path;?>support/" alt="">you give to those</a> who actually give back in meaningful ways.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Get in touch -->
      <section id="test-section-id" class="usa-section">
        <div class="grid-container">
          <h2 class="font-heading-xl margin-y-0">Get in touch</h2>
          <p class="usa-intro">Do you have ideas on what we can do to improve the way we present this important information? Please get in touch and let us know what we can do.</p>
          <a class="usa-button usa-button--big" href="<?php echo $path;?>contact/" alt="">Contact us</a>
        </div>
      </section>
    </main>
    
    <!-- Fin! -->
    <?php
      include("assets/includes/footer.inc");
      include("assets/includes/scripts.inc");
    ?>
  </body>
</html>