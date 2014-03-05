<?php require_once('config.php') ; ?>
<?php require_once('functions.php') ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tarzan Ent. Ltd | <?php echo $page_title ; ?> </title>
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
          <img src="tarzan-images/brown-envelope.jpg">
      </div> 
      <div id ="contact_form" class ="span8">
        <h2 class ="tarzan-h2">Get in touch with us</h2>
        <div id ="row3-b" class ="row">
          <div id ="information" class = "span8">
            <?php require_once("contactform.php") ?>
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
