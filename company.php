<?php require_once('config.php') ; ?>
<?php require_once('functions.php') ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tarzan Ent. Ltd | Company &amp; History </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Tarzan Enterprise Ltd. is a private limited liability company whose main operational branch is located in Tema, Ghana.">
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
        <p><img src ="tarzan-images/hajj-kamel-hamoui.jpg"></p>
        <p><em>Our Founder, Hajj Kamel Hamoui in traditional kente</em></p>
      </div> 
      <div id ="operations" class ="span8">
        <h2 class ="tarzan-h2">The Company</h2>
        <div id ="row3-b" class ="row">
          <div id ="information" class = "span8">
            <p>Tarzan Enterprise Ltd. is a private limited liability company whose main operational branch is located in Tema, Ghana. It started as a transport business, then has later expanded to provide more integrated services by developing land into warehouses and container depots, where it operates container handling and goods storage. Tarzan is a family owned business.</p>

           <h3>Our History</h3>
           <p>Tarzan Enterprise ltd was founded in 1942. It started as a transport business which, at the time, got reputed for transporting willing Ghanaians to perform the Hajj pilgrimage in Saudi Arabia. It then got the honor of being the carrier of the ballots of the first elections ever in Ghana.
We Now employ more than a hundred employees, Operate Dozens of Trucks and vehicles, and above all, enjoy a gracious and ancient goodwill that the name Tarzan evokes.</p>
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
