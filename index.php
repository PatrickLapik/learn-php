<?php include 'partials/header.php' ?>

<!doctype html>

<html lang="en">

<body>



  <main class="container">

    <?php include 'partials/hero.php' ?>

    <?php include 'partials/featured.php' ?>

    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          From the Firehose
        </h3>


        <?php include 'partials/posts.php' ?>

        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
        </nav>

      </div>


      <?php include 'partials/nav.php' ?>

  </main>

  <?php include 'partials/footer.php' ?>



</body>

</html>
