<!DOCTYPE html>
<html lang="zxx">

<head>
  <?php include "partials/_head.php" ?>
  <title>Contactez-Nous</title>
</head>

<body>
  <?php

  // Get the content of the JSON file using file_get_contents(): 
  $str = file_get_contents('actualite.json');

  // Now decode the JSON using json_decode():
  $json = json_decode($str, true); // decode the JSON into an associative array
  ?>
  <div class="container-scroller">
    <?php include "partials/_navbar.php" ?>

    <!-- partial -->
    <div class="flash-news-banner">
      <div class="container">
        <div class="d-lg-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center">
            <span class="badge badge-dark mr-3">Nouveau</span>
            <?php $article = $json['articles'][19] ?>
            <p class="mb-0">
            <a href="<?php echo $article['url'] ?>" target="_blank"><?php echo $article['title'] ?></a>
            </p>
          </div>
          <div class="d-flex">
            <span class="mr-3 text-danger">
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
        <div class="row">
          <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
              <div class="card-body">
                <div class="aboutus-wrapper">
                  <h1 class="mt-5 text-center mb-5">
                    Contactez Denis Lacombe
                  </h1>
                  <div class="row">
                    <div class="col-lg-12 mb-5 mb-sm-2">
                      <form>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <textarea class="form-control textarea" placeholder="Message *" id="message"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Nom *" />
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Courriel *" />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <a href="#" class="btn btn-lg btn-dark font-weight-bold mt-3">ENVOYEZ</a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container-scroller ends -->
  <?php include "partials/_footer.php" ?>
  <!-- partial -->
  <?php include "partials/_jsinclude.php" ?>

</body>

</html>