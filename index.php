<!DOCTYPE html>
<html lang="zxx">

<head>
  <?php include "partials/_head.php" ?>
  <title>World Time</title>
</head>

<body>
  <?php
  $str = file_get_contents('actualite.json');
  $json = json_decode($str, true);
  ?>
  <div class="container-scroller">
    <div class="main-panel">
      <?php include "partials/_navbar.php" ?>
      <!-- partial -->
      <div class="flash-news-banner">
        <div class="container">
          <div class="d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <span class="badge badge-dark mr-3">Nouveau</span>
              <?php $article = $json['articles'][24] ?>
              <p class="mb-0">
                <a href="<?php echo $article['url'] ?>" target="_blank"><?php echo $article['title'] ?></a>
              </p>
            </div>
            <div class="d-flex">
              <span class="mr-3 text-danger">
                <?php include "partials/_time.php" ?>
              </span>
              <span class="text-danger"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="content-wrapper">
        <div class="container">
          <div class="row" data-aos="fade-up">
            <?php $article = $json['articles'][48] ?>
            <div class="col-xl-8 stretch-card grid-margin">
              <div class="position-relative">
                <a href="<?php echo $article['url'] ?>" target="_blank"> <img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid" /></a>
                <div class="banner-content">
                  <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    Dernière Heure
                  </div>
                  <h1 class="alert alert-info mb-5"><a href="<?php echo $article['url'] ?>" target="_blank"><?php echo $article['title'] ?></a></h1>
                </div>
              </div>
            </div>
            <div class="col-xl-4 stretch-card grid-margin">
              <div class="card bg-dark text-white">
                <div class="card-body">
                  <h2>Dernières Nouvelles</h2>
                  <?php for ($index = 0; $index < 3; $index++) {
                    $article = $json['articles'][$index]; ?>

                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                      <div class="pr-3">
                        <p><a href="<?php echo $article['url'] ?>" target="_blank"><?php echo $article['title'] ?></a>
                        <p>
                        <div class="fs-12">
                          <span class="mr-2">Publié le : </span><?php echo $article['publishedAt'] ?>
                        </div>
                      </div>
                      <div class="rotate-img">
                        <a href="<?php echo $article['url'] ?>" target="_blank"> <img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid img-sm" /></a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up">
            <div class="col-lg-3 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2>Catégorie</h2>
                  <ul class="vertical-menu">
                    <li><a class="nav-link text-primary" href="page.php?q=actualite">ACTUALITÉ</a></h5>
                    </li>
                    <li><a class="nav-link text-primary" href="page.php?q=france">FRANCE</a></li>
                    <li><a class="nav-link text-primary" href="page.php?q=ukraine">UKRAINE</a></li>
                    <li><a class="nav-link text-primary" href="page.php?q=politique">POLITIQUE</a></li>
                    <li><a class="nav-link text-primary" href="page.php?q=monde">MONDE</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-9 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <?php for ($index = 0; $index < 3; $index++) {
                      $article = $json['articles'][$index]; ?>
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <a href="<?php echo $article['url'] ?>" target="_blank"> <img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid img-xl" /></a>
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold">Flash news</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                          <a href="<?php echo $article['url'] ?>" target="_blank"><?php echo $article['title'] ?></a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Publié le : </span><?php echo $article['publishedAt'] ?>
                        </div>
                        <p class="mb-0">
                          <?php echo $article['description'] ?>
                        </p>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
      <!-- container-scroller ends -->
      <?php include "partials/_footer.php" ?>
      <!-- partial -->
    </div>
  </div>
  <?php include "partials/_jsinclude.php" ?>
</body>

</html>