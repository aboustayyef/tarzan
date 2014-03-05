<?php require_once('config.php') ; ?>
<?php require_once('functions.php') ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tarzan Ent. Ltd | Board &amp; Management </title>
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
        <img src ="tarzan-images/malek-hamoui.jpg">
        <p><em>Executive Chairman Malek K. Hamoui</em></p>
      </div> 
      <div id ="operations" class ="span8">
        <p class ="lead">In Tarzan Enterprise ltd, we strongly believe in the importance of collective work. Tarzan would not have thrived if it weren't for the individual contributions of every member of its family. We are grateful for the efforts, dedication and goodwill they have contributed to the company.</p>
        <h2 class ="tarzan-h2">Board of Directors</h2>

        <div id ="row3-b" class ="row">
          <div id ="information" class = "span8">
            
            <div class ="one_person">
              <h4>Malek K. Hamoui</h4>
              <p>Executive Chairman</p>
            </div>
            <div class ="one_person">
              <h4>Zafer K. Hamoui</h4>
              <p>Managing Director</p>
            </div>
            <div class ="one_person">
              <h4>Riad M. Hamoui</h4>
              <p>Senior Executive Director</p>
            </div>
            <hr style ="clear:both">
            <div class ="one_person">
              <h4>Mustapha M. Hamoui</h4>
              <p>Executive Director<br/><em>HR/Admin/ICT</em></p>
            </div>
            <div class ="one_person">
              <h4>Ziad M. Hamoui</h4>
              <p>Executive Director<br/><em>Operations, Transport</em></p>
            </div>
            <div class ="one_person">
              <h4>Omar Z. Hamoui</h4>
              <p>Executive Director<br/><em>Operations, Logistics</em></p>
            </div>
            <div class ="one_person">
              <h4>Majdi R. Hamoui</h4>
              <p>Executive Director<br/><em>Trade. Blue Gallery</em></p>
            </div>
            <div class ="one_person">
              <h4>Hatem M. Hamoui</h4>
              <p>Executive Director<br/><em>Trade. Blue Gallery</em></p>
            </div>
            <div class ="one_person">
              <h4>Nabih Z. Hamoui</h4>
              <p>Executive Director<br/><em>Engineering. Fleet</em></p>
            </div>
            <hr style ="clear:both; margin-top:1em;">
        <h2 class ="tarzan-h2">Senior Management</h2>
        <div class ="one_person">
              <h4>Walid M. Hamoui</h4>
              <p>Workshop, Procurement</p>
            </div>
            <div class ="one_person">
              <h4>D. A. Gyimah</h4>
              <p>Secretary, Chief Accountant</p>
            </div>
            <div class ="one_person">
              <h4>Essam Moghrabi</h4>
              <p>Engineering</p>
            </div>
            <div class ="one_person">
              <h4>Nicolas Mensah</h4>
              <p>Port Operations</p>
            </div>
            <div class ="one_person">
              <h4>Laurence Asamoah</h4>
              <p>Public Relations</p>
            </div>
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
