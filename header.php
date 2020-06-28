<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0 ">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><!--font-awesomeのスタイルシートの呼び出し-->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- MDBootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
<!-- scrollify -->
<script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1/jquery.scrollify.min.js"></script>


<?php wp_head(); ?><!--システム・プラグイン用-->
</head>
<body <?php body_class(); ?>>
<header>

  <!-- タイトルの表記 -->
  <div class="header-inner">
    <?php
    if(is_home() || is_front_page()) {
      $title_tag_start = '<h1 class="site-title">';
      $title_tag_end = '</h1>';
    } else {
      $title_tag_start = '<p class="site-title">';
      $title_tag_end =  '</p>';
    }
    ?>
    <div class="site-title-wrap">
      <?php echo $title_tag_start; ?>
        <a href="<?php echo home_url(); ?>">
          <?php bloginfo( 'name' ); ?>
        </a>
      <?php echo $title_tag_end; ?>
    </div>
  <!-- //タイトルの表記 -->

  </div><!--end header-inner-->
</header>
