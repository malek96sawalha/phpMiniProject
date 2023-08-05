<?php
// Start the session
session_start();
// if (isset($_GET['id']) && $_GET['id'] >= 0) {
//   $data = $_SESSION["data"][$_GET['id']];
// echo $_GET['id'];

// var_dump($_SESSION["data"]);
// }
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="view.css">

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

 
  <h1>Our Products</h1>
  <?php
  echo !empty($data['name']) ? htmlspecialchars($data['name']) : '';
  echo !empty($data['priceOfProduct']) ? htmlspecialchars($data['priceOfProduct']) : '';
  echo !empty($data['Description']) ? htmlspecialchars($data['Description']) : '';
  echo !empty($data['date']) ? htmlspecialchars($data['date']) : '';
  ?>
</body>

<div id="container">
 <div id="card-body">
<?php
for ($i = 0; $i < count($_SESSION["data"]); $i++) {
  ?>
  <div id="card">
    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
   

    <?php


            if (!empty($_SESSION["data"][$i]['image'])) {
              ?>

              <img id="card_image" src="<?php echo "/phpMiniProject/" . $_SESSION["data"][$i]['image'] ?>" alt='Uploaded Image' >

              <?php
            } else {
              echo "Image not found.";
            }
            ?>
      <h5 class="card-title">
        <?php echo !empty($_SESSION["data"][$i]['name']) ? htmlspecialchars($_SESSION["data"][$i]['name']) ?? '' : '' ?>

      </h5>
      
      <p class="card-text">
        <?php echo !empty($_SESSION["data"][$i]['priceOfProduct']) ? htmlspecialchars($_SESSION["data"][$i]['priceOfProduct']) ?? '' : '' ?> JOD
      </p>
      <p class="card-text">
        <?php echo !empty($_SESSION["data"][$i]['Description']) ? htmlspecialchars($_SESSION["data"][$i]['Description']) ?? '' : '' ?>
      </p>
      <p class="card-text">
        <?php echo !empty($_SESSION["data"][$i]['date']) ? htmlspecialchars($_SESSION["data"][$i]['date']) ?? '' : '' ?>
      </p>
    </div>
    <?php
}

?>
</div>



<footer class=" site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify" style="color:burlywood">
            Borcelle, a delightful haven for all things sweet,
            is a charming cake shop that exudes a warm and inviting atmosphere.
            Nestled in the heart of the city, Borcelle is a haven for confectionery enthusiasts and dessert aficionados alike.
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



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>



</html>

