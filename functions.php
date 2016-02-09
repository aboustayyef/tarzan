<?php

function display_footer()
{
  ;?>
  
    <footer>
      <div class="container">
       <p>&reg; Trademarks and Logos are registered to Tarzan Enterprise LTD  ::  Website designed, built and maintained by Mustapha Hamoui 2012</p>
      </div>

      <!-- Google Analytics code -->

      <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-1938524-4']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

      </script>

      <!-- End of Google Analytics Code -->

      <!-- Start of StatCounter Code -->
<script type="text/javascript">
sc_project=1516527; 
sc_invisible=1; 
sc_partition=13; 
sc_security="eb03dee7"; 
</script>

<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div class="statcounter"><a href="http://www.statcounter.com/free_invisible_web_tracker.html" target="_blank"><img class="statcounter" src="http://c14.statcounter.com/1516527/0/eb03dee7/1/" alt="free web tracker" ></a></div></noscript>
<!-- End of StatCounter Code -->
    
    </footer>

  <?php
}
function display_carousel() {
?>
<!-- Carousselle and Slogan -->
    <!-- Generated using the display_carousel() function-->
    <div id ="row2" class ="row">
      <div id ="slideshow-wrapper" class ="span12">
        <div id ="slideshow-slogan" class ="row">
          <div id="myCarousel" class="span9 carousel slide tarzan" style ="margin-bottom:0px">
            <div class="carousel-inner">
              <div class="item active">
                <img src="tarzan-images/tarzan-image1.jpg" alt="">
                <div class="carousel-caption">
                  <h4>45-Tonner forklift at work in the yard</h4>
                </div>
              </div>
              <div class="item">
                <img src="tarzan-images/tarzan-image2.jpg" alt="">
                <div class="carousel-caption">
                  <h4>Loading Cocoa Onboard</h4>
                  <p>Tarzan plays an important part in Ghana's cocoa industry</p>
                </div>
              </div>
              <div class="item">
                <img src="tarzan-images/tarzan-image4.jpg" alt="">
                <div class="carousel-caption">
                  <h4>New commercial centre in the heart of Accra</h4>
                </div>
              </div><!-- item -->     
            </div><!-- Carousel Inner-->  
          </div><!-- myCarousel -->
          
          <div id ="slogan" class="span3">
            <h1 class ="tarzan-hero">Providing Backbone Logistics for Ghana's Cocoa Industry since 1979</h1>
          </div> <!-- /slogan -->

        </div> <!-- /slideshow-slogan -->  
      </div> <!-- /slideshow-wrapper -->
    </div><!-- /row2 -->

<?php
}

function display_navbar() {
?>
	<!-- generated using the display_navbar() function -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
		  <div class="container">
		    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </a>
		    <!-- <a class="brand" href="#">Tarzan Enterprise Ltd</a> -->
		    <div class="nav-collapse">
		      <ul class="nav">
		        <li class="active"><a href="<?php echo BASE_URL ; ?>/">Tarzan Enterprise Ltd</a></li>
            <li class="divider-vertical"></li>
            <li><a href="http://bluegallery.com.gh">Blue Gallery Home &amp; Office</a></li>
		        <li class="divider-vertical"></li>
		        <!-- <li><a href="#about">Blue Gallery</a></li> -->
		      </ul>
		    </div><!--/.nav-collapse -->
		  </div>
		</div>
	</div>
<?php	
}

function display_header(){

?>
	<!-- generated using display_header() -->
   <div class ="row"><!-- Logo and menu -->
      <div class ="span3"><a href="<?php echo BASE_URL ; ?>/"><img src ="tarzan-images/tarzan_logo_420x182.png" width ="210" style ="margin-top:0.6em ; margin-bottom:1em"></a></div> <!-- Logo -->
      <div class ="span2">
        <h3 class ="tarzan-h3">Services</h3>
        <ul class ="unstyled">
          <li><a href="<?php echo BASE_URL . "/infopage.php?pagewanted=haulage" ?>">Haulage & Fleet</a></li>
          <li><a href="<?php echo BASE_URL . "/infopage.php?pagewanted=warehousing" ?>">Warehousing</a></li>
          <li><a href="<?php echo BASE_URL . "/infopage.php?pagewanted=container+depot" ?>">Container Depot</a></li>
          <li><a href="<?php echo BASE_URL . "/infopage.php?pagewanted=stores" ?>">Commercial Stores</a></li>
        </ul>  
      </div> <!-- /Services -->
      <div class ="span2">
        <h3 class ="tarzan-h3">About</h3>
        <ul class ="unstyled">
          <li><a href="<?php echo BASE_URL . "/location.php" ?>">Location</a></li>
          <li><a href="<?php echo BASE_URL . "/company.php" ?>">Company & History</a></li>
          <li><a href="<?php echo BASE_URL . "/management.php" ?>">Management</a></li>
        </ul>
      </div> <!-- /About --> 
      <div class ="span2">
        <h3 class ="tarzan-h3">Learn More</h3>
        <ul class ="unstyled">
          <li><a href="<?php echo BASE_URL . "/news.php" ?>">Our News</a></li>
          <li><a href="<?php echo BASE_URL . "/contact.php" ?>">Contact Us</a></li>
        </ul>
      </div> <!-- /Learn more --> 
      <div class ="span3"> <!--search-->
        <form class="span3 form-search">
          <input type="text" class="input-medium search-query">
          <button type="submit" class="btn">Search</button>
        </form>   
      </div>
    </div> <!-- /row -->


<?php

}


?>