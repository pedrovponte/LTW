<?php
  include_once('Database/list_news.php');
  include_once('Templates/draw_news_headers.php');
  include_once('Templates/draw_news.php');
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Super Legit News</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <link href="CSS/layout.css" rel="stylesheet">
    <link href="CSS/responsive.css" rel="stylesheet">
    <link href="CSS/comments.css" rel="stylesheet">
    <link href="CSS/forms.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1><a href="index.html">Super Legit News</a></h1>
      <h2><a href="index.html">Where fake news are born!</a></h2>
      <div id="signup">
        <a href="register.html">Register</a>
        <a href="login.html">Login</a>
      </div>
    </header>
    <nav id="menu">
      <!-- just for the hamburguer menu in responsive layout -->
      <input type="checkbox" id="hamburger"> 
      <label class="hamburger" for="hamburger"></label>

      <ul>
        <li><a href="index.html">Local</a></li>
        <li><a href="index.html">World</a></li>
        <li><a href="index.html">Politics</a></li>
        <li><a href="index.html">Sports</a></li>
        <li><a href="index.html">Science</a></li>
        <li><a href="index.html">Weather</a></li>
      </ul>
    </nav>
    <aside id="related">
      <?php
        $articles = get_news_intro();
        draw_news_headers($articles);
      ?>
    </aside>
    <section id="news">
      <?php
        $news = get_news_complete_information();
        draw_news($news);
      ?>
    </section>
    <footer>
      <p>&copy; Fake News, 2017</p>
    </footer>
  </body>
</html>
