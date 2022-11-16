<!DOCTYPE html>
<html lang="zxx">

<head>
  <?php include "partials/_head.php" ?>

</head>

<body>
  <?php
  $q = $_GET['q'];
  $url = $q . ".json";
  $str = file_get_contents($url);
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
              <?php $article = $json['articles'][33] ?>
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
          <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                    <h1 class="font-weight-600 mb-4">
                      <?php echo $q ?>
                    </h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <?php for ($index = 7; $index < 13; $index++) {
                      $article = $json['articles'][$index]; ?>
                      <div class="row">
                        <div class="col-sm-4 grid-margin">
                          <div class="rotate-img">
                            <a href="<?php echo $article['url'] ?>" target="_blank"> <img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid" /></a>
                          </div>
                        </div>
                        <div class="col-sm-8 grid-margin">
                          <h2 class="font-weight-600 mb-2">
                          <a href="<?php echo $article['url'] ?>" target="_blank"><?php echo $article['title'] ?></a>
                          </h2>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Publié le : </span><?php echo $article['publishedAt'] ?>
                          </p>
                          <p class="fs-15">
                            <?php echo $article['description'] ?>
                          </p>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                  <div class="col-lg-4">
                    <div class="row">
                      <h2 class="mb-4 text-primary font-weight-600">
                        Dernières Nouvelles
                      </h2>
                      <div class="row">
                        <?php for ($index = 0; $index < 3; $index++) {
                          $article = $json['articles'][$index]; ?>
                          <div class="col-sm-12">
                            <div class="border-bottom pb-4 pt-4">
                              <div class="row">
                                <div class="col-sm-8">
                                  <h5 class="font-weight-600 mb-1">
                                  <a href="<?php echo $article['url'] ?>" target="_blank"><?php echo $article['title'] ?></a>
                                  </h5>
                                  <p class="fs-13 text-muted mb-0">
                                    <span class="mr-2">Publié le : </span><?php echo $article['publishedAt'] ?>
                                  </p>
                                </div>
                                <div class="col-sm-4">
                                  <div class="rotate-img">
                                    <a href="<?php echo $article['url'] ?>" target="_blank"> <img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid" /></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                      <div class="trending">
                        <h2 class="mb-4 text-primary font-weight-600">
                          Tendances
                        </h2>
                        <div class="mb-4">
                          <?php for ($index = 4; $index < 7; $index++) {
                            $article = $json['articles'][$index]; ?>
                            <div class="rotate-img">
                              <a href="<?php echo $article['url'] ?>" target="_blank"> <img src="<?php echo $article['urlToImage'] ?>" alt="banner" class="img-fluid" /></a>
                            </div>
                            <h3 class="mt-3 font-weight-600">
                            <a href="<?php echo $article['url'] ?>" target="_blank"><?php echo $article['title'] ?></a>
                            </h3>
                            <p class="fs-13 text-muted mb-0">
                              <span class="mr-2">Publié le : </span><?php echo $article['publishedAt'] ?>
                            </p>
                            <br>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="lapagination">
            <a href="page.php?q=<?php echo $q; ?>">Page 1</a>
            <a href="page.php?q=<?php echo $q; ?>&page=2">Page 2</a>
            <a href="page.php?q=<?php echo $q; ?>&page=3">Page 3</a>
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