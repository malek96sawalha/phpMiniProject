<?php
// Start the session
session_start();

if (isset($_POST) && !empty($_POST)) {
  if (!isset($_SESSION["data"])) {
    $_SESSION["data"] = array();

  }
  if (isset($_FILES['product_image'])) {
    $image_name = $_FILES['product_image']['name'];
    $image_type = $_FILES['product_image']['type'];
    $image_temp = $_FILES['product_image']['tmp_name'];
    $image_size = $_FILES['product_image']['size'];

    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($image_name);

    move_uploaded_file($image_temp, $targetFile);
    $_POST['image'] = $targetFile;
  }
  // Adding the entire $_POST array to the session data
  $_SESSION["data"][] = $_POST;
  $image = $_FILES['product_image'];
}
// echo '<pre>';
// var_dump($_SESSION["data"]);

// echo '</pre>';
// echo $_SERVER;
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="project1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <a class="navbar-brand" href="http://localhost/phpMiniProject/HomePage.php"><img src="Capture.PNG" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="http://localhost/phpMiniProject/HomePage.php">Home <span
            class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="http://localhost/phpMiniProject/ViewPage.php">Products</a>
        <a class="nav-item nav-link" href="#">Contact</a>
        <a class="nav-item nav-link" href="#">About</a>
      </div>
    </div>
  </nav>





  <div id="form">
    <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">



      <label for="Product">Name of Product :</label><br>
      <input type="text" id="Product" name="name"><br>

      <label for="Product">price of Product :</label><br>
      <input type="number" id="price" name="priceOfProduct"><br>


      <label for="Product"> Description of Product :</label><br>
      <input type="text" id="Description" name="Description"><br>

      <label for="Product"> Date of Product :</label><br>
      <input type="date" id="date" name="date"><br><br>

      <input type="file" name="product_image"><br><br>

      <input type="submit"><br>
    </form>
  </div>
  <table>
    <thead>
      <th>Product picture</th>
      <th>Name of Product</th>
      <th>price of Product</th>
      <th>Description of Product</th>
      <th>Date of Product</th>

    </thead>
    <tbody>

      <?php


      ?>
      <?php



      ?>

      <?php
      for ($i = 0; $i < count($_SESSION["data"]); $i++) {
        ?>
        <tr>

          <td>

            <?php


            if (!empty($_SESSION["data"][$i]['image'])) {
              ?>

              <img src="<?php echo "/phpMiniProject/" . $_SESSION["data"][$i]['image'] ?>" alt='Uploaded Image' width='100'>

              <?php
            } else {
              echo "Image not found.";
            }
            ?>
          </td>
          <td>
            <?php echo !empty($_SESSION["data"][$i]['name']) ? htmlspecialchars($_SESSION["data"][$i]['name']) ?? '' : '' ?>
          </td>
          <td>
            <?php echo !empty($_SESSION["data"][$i]['priceOfProduct']) ? htmlspecialchars($_SESSION["data"][$i]['priceOfProduct']) ?? '' : '' ?> JOD
          </td>
          <td>
            <?php echo !empty($_SESSION["data"][$i]['Description']) ? htmlspecialchars($_SESSION["data"][$i]['Description']) ?? '' : '' ?>
          </td>
          <td>
            <?php echo !empty($_SESSION["data"][$i]['date']) ? htmlspecialchars($_SESSION["data"][$i]['date']) ?? '' : '' ?>
          </td>
          <td>

          </td>
        </tr>

        <?php
      }

      ?>

      </td>
    </tbody>
  </table>
  <a id="view" href="/phpMiniProject/ViewPage.php">View Products</a>
  <br>
  <br>
  <footer class=" site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify" style="color:burlywood">
            Borcelle, a delightful haven for all things sweet,
            is a charming cake shop that exudes a warm and inviting atmosphere.
            Nestled in the heart of the city, Borcelle is a haven for confectionery enthusiasts and dessert aficionados
            alike.
            With an impressive array of delectable treats, ranging from intricately designed cakes to delicate pastries,
            Borcelle crafts each creation with an artistic touch and a commitment to quality.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="#">Classic Cakes</a></li>
            <li><a href="#">Specialty Cakes</a></li>
            <li><a href="#">Cupcakes</a></li>
            <li><a href="#">Gourmet Patisserie</a></li>
            <li><a href="#">Kids' Favorites</a></li>
            <li><a href="#">Custom Creations</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Contribute</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
            <a href="#">Borcelle</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="twitter" href="https://twitter.com/sawalhamalik96"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li><a class="linkedin" href="https://www.linkedin.com/in/malek-sawalha-064a56279/"><i
                  class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a class="facebook" href="https://web.facebook.com/profile.php?id=100003204412380&_rdc=5&_rdr"><i
                  class="fa-brands fa-facebook-f"></i></a></li>
            <li><a class="instagram" href="https://www.instagram.com/mk_sawalha/"><i
                  class="fa-brands fa-square-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <?php


  ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>



