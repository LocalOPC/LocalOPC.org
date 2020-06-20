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
    <title>Contact the national Local OPC organization</title>
    <?php
      include("assets/includes/css.inc");
    ?>
  </head>
  <body>

    <?php
      include("assets/includes/banner.inc");
      include("assets/includes/header-info.inc");
    ?>
    <!-- Start -->
    <div class="usa-section">
      <div class="grid-container">
        <div class="grid-row grid-gap">
          
          <!-- Side Nav -->
          <div class="usa-layout-docs__sidenav desktop:grid-col-3">
            <nav aria-label="Secondary navigation">
              <ul class="usa-sidenav">
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>">Home</a></li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>new-contracts/" class="">New Contracts</a></li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>register-to-vote/" class="">Register To Vote</a></li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>report-all-cops/" class="">Report All Cops</a></li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>resources/" class="">Resources</a></li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>support/" class="">Support</a></li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>join/" class="">Join your Local OPC</a></li>
                <li class="usa-sidenav__item"><a href="<?php echo $path;?>contact/" class="usa-current">Contact us</a></li>
              </ul>
            </nav>
          </div>
          
          <!-- Main -->
          <main class="usa-layout-docs__main desktop:grid-col-9 usa-prose usa-layout-docs" id="main-content">
            <h1>Everyone is welcome</h1>
            <p class="usa-intro">We are only as strong as our network.</p>
            <p>Get in touch with us and let us know what you think. We are not only open to feedback about what we have online now, we are also hoping to learn new ideas that will help us advance these efforts. If you do not see a form below, please <a href="https://forms.gle/okGmvLJrwGmUBGWp7" alt="" target="_blank" rel="noopener noreferrer">use this link</a>.</p>
            <p>
              <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeILwemcEVdJE6_Jo3nZiRlMfDnKarS4BBFCDXu4eU8_cdZ1Q/viewform?embedded=true" width="640" height="1155" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </p>
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
