<?php require_once('config.php') ; ?>
<?php require_once('functions.php') ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tarzan Ent. Ltd | Our locations </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <style>
  body {
    padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
  }
  </style>
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/mustapha.css" rel="stylesheet" type="text/css" >

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>  

<body>
  <?php display_navbar() // top black navigation bar?>

  <div class="container">
    <?php display_header() //logo and navigation ?>
            <hr/>
    <!-- the third row of the design -->
    <div id ="row3" class ="row givespaceabove"> 
      <div id ="left-sidebar" class ="span4">
        <?php 
          if (!empty($page_image)) {
          ?>

          <img src ="<?php echo $page_image ?>">

          <?php  
          }
         ?>
         &nbsp;
      </div> 
      <div id ="operations" class ="span8">
        <h2 class ="tarzan-h2">Our Locations</h2>
        <p class ="lead">Tarzan's main operational headquarter is at the intersection of Harbour Road and Aflao road near the Tema roundabout. Administration is in Accra at Mamleshie Avenue in Kanatamanto.</p>
        <div id ="row3-b" class ="row">
          <div id ="information" class = "span8">
            <hr/>
            <h2>Administration, Accra</h2>
            <address>
              Accra, Kantamanto Area, D 96/4, Mamleshie Road. P.O. Box 396
            </address>
            <p><img src ="tarzan-images/map-kantamanto.png"></p>
            <hr/>
            <h2>Main Operations, Tema</h2>
            <address>
              Tema Roundabout, Intersection of Harbour Road and Aflao Road
            </address>
            <p><img src ="tarzan-images/map-tema.png"></p>

            <h2>Akasanoma Warehouses, Tema</h2>
            <address>
              Harbour Road, Near Rana Motors, Tema
            </address>
            <p><img src ="tarzan-images/map-akasanoma.png"></p>

            <h2>Blue Gallery, Tema</h2>
            <address>
              Aflao Road, near Tema Roundabout, Opposite Shell station
            </address>
            <p><img src ="tarzan-images/map-bluegallery.png"></p>

          </div>
         
        </div> <!-- /row3-b -->
      </div> <!-- /operations -->
    </div> <!-- /row3 -->

  </div> <!-- /container -->


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
    
<?php display_footer(); ?>

  </body>
  </html>
