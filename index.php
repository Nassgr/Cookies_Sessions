<?php require 'inc/head.php';


if(empty($_SESSION['cookieChocolate'])) {
    $_SESSION['cookieChocolate'] = 0;
}
if(empty($_SESSION['Chocolate_chips'])) {
    $_SESSION['Chocolate_chips'] = 0;
}
if(empty($_SESSION['Pecan_nuts'])) {
    $_SESSION['Pecan_nuts'] = 0;
}
if(empty($_SESSION['M&M\'s© cookies'])) {
    $_SESSION['M&M\'s© cookies'] = 0;
}

if(isset($_GET['add_to_cart'])) {
    if($_GET['add_to_cart'] === '58'){
        $_SESSION['cookieChocolate'] =  $_SESSION['cookieChocolate'] + 1;
    }elseif($_GET['add_to_cart'] === '36'){
        $_SESSION['Chocolate_chips'] = $_SESSION['Chocolate_chips'] + 1;
    }elseif($_GET['add_to_cart'] === '46'){
        $_SESSION['Pecan_nuts'] = $_SESSION['Pecan_nuts'] + 1;
    }elseif($_GET['add_to_cart'] === '32'){
        $_SESSION['M&M\'s© cookies'] = $_SESSION['M&M\'s© cookies'] + 1;
    }
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart (<?php if(isset($_SESSION['Pecan_nuts'])) echo $_SESSION['Pecan_nuts'];?>)
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart (<?php if(isset($_SESSION['Chocolate_chips'])) echo $_SESSION['Chocolate_chips'];?>)
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart (<?php if(isset($_SESSION['cookieChocolate'])) echo $_SESSION['cookieChocolate'];?>)
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart (<?php if(isset($_SESSION['M&M\'s© cookies'])) echo $_SESSION['M&M\'s© cookies'];?>)
          </a>
        </figcaption>
      </figure>
    </div>
        <form method ="GET" role="form" action="logout.php">
            <div class="form-group">
                <input type="submit"  name="logout" class="btn btn-lg btn-danger btn-block" value="Logout" required>
            </div>
        </form>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
