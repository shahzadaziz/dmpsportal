<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<title>DMPS</title>
        <?php print $styles ?>
        <script type="text/javascript" src="js/focus.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/sudo.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</head>
  
<body>


    <!--wrapper-->
    <div id="wrapper">

      <div id="center"><div id="squeeze"><div class="right-corner"><div class="left-corner">
          <?php print $breadcrumb; ?>
          <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>
          <div class="clear-block">
            <?php print $content ?>
          </div>
          <?php print $feed_icons ?>
          <div id="footer"><?php print $footer_message . $footer ?></div>
      </div></div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->


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

  </div> <!-- /container -->
 
<!-- /layout -->

  <?php print $closure ?>
  </body>
</html>
