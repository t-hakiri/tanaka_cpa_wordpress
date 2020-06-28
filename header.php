<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
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


<body>
<header class="header">
  <div class="header-inner">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Navbar brand -->
        <a href="#" class="nav-link">HOME</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav ml-auto">

            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">代表について</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">ご挨拶</a>
                <a class="dropdown-item" href="#">プロフィール</a>
              </div>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">事業内容</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">事業内容</a>
                <a class="dropdown-item" href="#">よくある質問</a>
                <a class="dropdown-item" href="#">費用について</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fas fa-handshake"> ベンチャー企業支援について</i></a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fas fa-paper-plane"> お問い合わせ</i></a>
            </li>

          </ul>
          <!-- Links -->
        </div>
      <!-- Collapsible content -->
      </div>

    </nav>
    <!--/.Navbar-->

  </div><!--end header-inner-->
</header>
