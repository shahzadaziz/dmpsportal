<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <script type="text/javascript" src="js/focus.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/sudo.js"></script>
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

    <div id="header-region" class="clear-block"><?php print $header; ?></div>
    <!--wrapper-->
    <div id="wrapper">

   <!--top bar-->
    <div class="top-bar">
	<div class="topbar-holder">
          <ul class="top-links">
              <li><a href="#" class="active">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Feedback</a></li>
              <li><a href="#">Privicy Policy</a></li>
          </ul>
          <ul class="social-media">
                  <li><a href="#" class="facebook">Facebook</a></li>
              <li><a href="#" class="twitter">Twitter</a></li>
          </ul>
        </div>
    </div>
    <!--/top bar-->


      <!--header-->
      <div id="header">
            <h1 class="logo"><a href="#">DMPS</a></h1>
        <div class="header-banner"><a href="#"><img src="images/header-banner.jpg" alt="" /></a></div>
        <!--menu-->
        <div id="menu">
            <ul>
                <li><a class="home active" href="#"><span>HOME</span></a></li>
                <li><a href="#" class="gifts"><span>SEND GIFTS<br /> TO PAKISTAN</span></a></li>
                <li><a class="dramas" href="#"><span>DRAMAS</span></a></li>
                <li><a class="news" href="#"><span>NEWS &amp; TALK SHOWS</span></a></li>
                <li><a class="sports" href="#"><span>SPORTS</span></a></li>
                <li><a class="religion" href="#"><span>RELIGION</span></a></li>
                <li><a class="misc" href="#"><span>MISC</span></a></li>
            </ul>
        </div>
        <!--/menu-->
      </div>
      <!--/header-->


      <div id="main">
        
        <?php if ($show_messages) { print $messages; } ?>
        <?php print $help ?>
        <?php print $content; ?>
        <?php print $feed_icons; ?>
      </div>

      <!--footer-->
      <div id="footer">
            <div class="f1">
            <div class="f2">
                    <div class="footer-holder">
                    <div class="footer-links">
                            <h4>Navigation</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>
                        <ul class="pink">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Dramas</a></li>
                            <li><a href="#">News &amp; Talks Shows</a></li>
                            <li><a href="#">Sports</a></li>
                        </ul>
                        <ul class="yellow">
                            <li><a href="#">Religion</a></li>
                            <li><a href="#">Naat</a></li>
                            <li><a href="#">Funny Videos</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-right">
                            <h4>SUBSCRIBE TO OUR NEWSLETTER</h4>
                        <div class="search-holder">
                            <form action="#">
                                    <input type="text" />
                                <input type="submit" class="btn-search" />
                            </form>
                        </div>
                        <ul class="social-links">
                            <li><a href="#"><img src="images/social-icon1.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/social-icon2.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/social-icon3.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/social-icon4.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/social-icon5.png" alt="" /></a></li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-footer">
                    <div class="holder">
                            <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                        <span class="copyrights">Copyright 2012 All RIghts Reserved</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!--/footer-->
  <?php print $closure ?>

</html>

