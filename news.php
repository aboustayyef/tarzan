<?php require_once('config.php') ; ?>
<?php require_once('functions.php') ; ?>

<?php

//get details of the news

$connection = DB::getInstance();

if (isset($_GET['id'])) {
  $news_id = $_GET['id'];
} else {
  $the_posts = $connection->query('SELECT * FROM  `news`')->results();
  $news_id = count($the_posts); //default to last post
}


$q = 'SELECT * FROM  `news` WHERE  `news_id` ="'.$news_id.'"';
$the_posts = $connection->query($q)->results();
$result = $the_posts[0];
$news_title = $result->news_title;
$news_content = $result->news_content;
$news_date = $result->news_date;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tarzan Ent. Ltd News <?php if (isset($_GET['id'])){ echo "| ", $news_title ;} ?> </title>
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
      <div id ="left-sidebar" class ="span3">
       
        <h4>Latest news</h4>
        <?php 
          //code to display list of posts
        $q2 = 'SELECT * FROM  `news`';
        $result2 = $connection->query($q2)->results();
        $result2 = array_reverse($result2);
        echo '<ul>';
        foreach ($result2 as $key => $result) {
          $news_title_now = $result->news_title;
          $news_date = $result->news_date;
          $news_id_now = count($result2)-$key;
          if ($news_id_now == $news_id) {
            echo "<li class =\"active\">$news_title_now [$news_date]</li>" ;
          } else {
            echo "<li><a href =\"news.php?id=$news_id_now\">$news_title_now [$news_date]</a></li>";
          }
         } 
     
        echo '</ul>';
        ?>

         &nbsp;
      </div> 
      <?php 

       ?>
      <div id ="operations" class ="span6 offset1">
        <h5><?php echo $news_date ; ?></h5>

        <h2 class ="tarzan-h2"><?php echo $news_title; ?></h2>
        <div id ="row3-b" class ="row">
          <div class = "span6">
            <?php echo $news_content ?>
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
