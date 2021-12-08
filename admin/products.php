<?php 
include('../settings/core.php');
require '../controller/productController.php'; 


$brands = select_all_brands_controller();
$categories = select_all_categories_controller();
$products = select_all_products_controller();

if (isset($_GET['product_id'])) {
  $remove = remove_from_products_controller($_GET['product_id']);
  header("location: ./products.php");
}


if (isset($_GET['brand_id'])) {
  $remove_brand = remove_from_brands_controller($_GET['brand_id']);
  header("location: ./products.php");
}


if (isset($_GET['cat_id'])) {
  $remove_cat = remove_from_cat_controller($_GET['cat_id']);
  header("location: ./products.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.php">
          <img src="../img/logo3.gif" alt="" width="20%">
          <h3 class="h3 text-light">Hyundai</h3>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="products.php">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>

          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="../action/customerAction.php?adminlogout=<?php echo $_SESSION['user_id']; ?>">
                <i class="fas fa-right-from-bracket text-light"></i>
                Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col d-inline">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                if (count($products) > 0) {
                  foreach ($products as $product) {
                    echo '
                      <tr>
                        <th scope="row"><input type="checkbox" value="'.$product['product_id'].'" /></th>
                        <td class="tm-product-name">'.$product['product_title'].'</td>
                        <td>GHC'.$product['product_price'].'</td>
                        <td>'.$product['brand_name'].'</td>
                        <td>'.$product['cat_name'].'</td>
                        <td>
                          <a href="./edit-product.php?product='.$product['product_id'].'" class="tm-product-delete-link">
                            <i class="far fa-edit tm-product-delete-icon"></i>
                          </a>
                          &nbsp;
                          <a href="./products.php?product_id='.$product['product_id'].'" class="tm-product-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                          </a>
                        </td>
                      </tr>';
                  }
                }else {
                  
                    echo '
                      <tr>
                        <td>
                          <h4>No products added!!!</h4>
                        </td>
                      </tr>';
              
                }
                    
                    ?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="add-product.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
          </div>
        </div>
      </div>
      <div class="row tm-content-row">
        <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
          <h2 class="tm-block-title">Product Categories</h2>
          <div class="tm-product-table-container">
            <table class="table tm-table-small tm-product-table">
              <tbody>
                <?php 
                  foreach($categories as $cat){
                    echo '<tr>
                  <td class="tm-product-name">'.$cat['cat_name'].'</td>
                  <td class="text-center">
                    <a href="./products.php?cat_id='.$cat['cat_id'].'" class="tm-product-delete-link">
                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </a>
                  </td>
                </tr>';
                  }
                ?>
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <!-- <button class="btn btn-primary btn-block text-uppercase mb-3"> -->
            <a class="btn btn-primary btn-block text-uppercase mb-3 text-light" href="./add-brand.php">Add new category</a>
            
          <!-- </button> -->
        </div>
            &nbsp;
        <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
          <h2 class="tm-block-title">Product Brand</h2>
          <div class="tm-product-table-container">
            <table class="table tm-table-small tm-product-table">
              <tbody>
              <?php 
                  foreach ($brands as $brand) {
                      echo '
                <tr>
                  <td class="tm-product-name">'.$brand['brand_name'].'</td>
                  <td class="text-center">
                    <a href="./products.php?brand_id='.$brand['brand_id'].'" class="tm-product-delete-link">
                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </a>
                  </td>
                </tr>';
                  }
                ?>
  
              </tbody>
            </table>
          </div>
          <!-- table container -->
          <!-- <button class="btn btn-primary btn-block text-uppercase mb-3"> -->
            <a class="btn btn-primary btn-block text-uppercase mb-3 text-light" href="./add-brand.php">Add new brand</a>
            
          <!-- </button> -->
        </div>
        
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
      </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <!-- <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.php?product=$product['product_id']";
        });
      });
    </script> -->
  </body>
</html>