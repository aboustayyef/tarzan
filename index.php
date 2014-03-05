<?php require_once('config.php') ; ?>
<?php require_once('functions.php') ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tarzan Enterprise Ltd | Haulage, Logistics &amp; Trade</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Tarzan Enterprise Ltd. is a private logistics and trade company whose main operational branch is located in Tema, Ghana">

  <!-- Le styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <style>
  body {
    padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
  }
  </style>
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/mustapha.css" rel="stylesheet" type="text/css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel();
  });
  </script>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>  

<body>
  <?php display_navbar() // top black navigation bar?>

  <div class="container">
    <?php display_header() //logo and navigation ?>
    <?php display_carousel() //rotating images ?>


    <!-- the third row of the design -->
    <div id ="row3" class ="row"> 

      <div id ="latest-news" class ="span4">
        <a href="news.php"><h2 class ="tarzan-h2">Latest News</h2></a>
        <?php 
        //get the latest post
        $connection = DB::getInstance();
        $the_posts = $connection->query('SELECT * FROM  `news`')->results();
        $last_result = end($the_posts);

        $news_id = count($the_posts)-1; //get to last post
        $news_link = $news_id+1;
        $news_title = $last_result->news_title;
        $news_content = $last_result->news_content;
        ?>
        <h4><a href ="<?php echo "news.php?id=$news_link" ?>"><?php echo $news_title; ?></a></h4>
        <?php echo substr($news_content, 0, 220);?>
        <a href ="<?php echo "news.php?id=$news_link" ?>"> Read more >></a>
      </div> 




      <div id ="operations" class ="span8">
        <h2 class ="tarzan-h2">Operations</h2>
        <div id ="row3-b" class ="row">
          <div id ="operations-haulage" class = "span2">
            <div class ="tarzan-thumbnail"><a href ="<?php echo BASE_URL . "/infopage.php?pagewanted=haulage" ?>"><img src ="tarzan-images/iconactros.jpg" ></a></div>
            <div class ="section_title"><a href ="<?php echo BASE_URL . "/infopage.php?pagewanted=haulage" ?>">Haulage &amp; Fleet</a></div>
            <p>Tarzan has a long history and experience in haulage transport. Our red trucks are recognizable all over Ghana.</p>
          </div>
          <div id ="operations-warehousing" class ="span2">
            <div class ="tarzan-thumbnail"><a href ="<?php echo BASE_URL . "/infopage.php?pagewanted=warehousing" ?>"><img src ="tarzan-images/iconwarehouse.jpg"></a></div>
            <div class ="section_title"><a href ="<?php echo BASE_URL . "/infopage.php?pagewanted=warehousing" ?>">Warehousing</a></div>
            <p>With a capacity of up to 56,000 tons, including all-weather driveways and ready infrastructure</p>
          </div>
          <div id ="operations-stores" class ="span2">
            <div class ="tarzan-thumbnail"><a href ="<?php echo BASE_URL . "/infopage.php?pagewanted=container+depot" ?>"><img src ="tarzan-images/icondepot.jpg" ></a></div>
            <div class ="section_title"><a href ="<?php echo BASE_URL . "/infopage.php?pagewanted=container+depot" ?>">Container Depot</a></div>
            <p>12,000 m2 of reinforced concrete together with all the necessary equipment, at a stone-throw of the Tema port</p>
          </div>
          <div id ="operations-container-depot" class ="span2">
            <div class ="tarzan-thumbnail"><a href ="<?php echo BASE_URL . "/infopage.php?pagewanted=stores" ?>"><img src ="tarzan-images/iconstores.jpg" ></a></div>
            <div class ="section_title"><a href ="<?php echo BASE_URL . "/infopage.php?pagewanted=stores" ?>">Commercial Stores</a></div>
            <p>will meet the most demanding business needs at the heart of Accra’s commercial district</p>
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
   
  <?php display_footer() ; ?>  

  </body>
  </html>
