<?php 

include('../settings/core.php');
require '../controller/productController.php'; 

$brands = select_all_brands_controller();
$categories = select_all_categories_controller();

if (isset($_GET['product'])) {
  
  $product= select_one_product_controller($_GET['product']);
  
}
else{
  header("location: ./products.php");
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Product - Dashboard Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.php">
        <img src="../img/logo3.gif" alt="" width="20%">
          <h3 class="h3 text-light">Hyundai</h3>        </a>
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
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="../action/update_product.php" class="tm-edit-product-form" method="post">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product Name
                    </label>
                    <input
                      id="name"
                      name="product_title"
                      type="text"
                      value="<?php echo $product['product_title'];?>"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <textarea
                      class="form-control validate"
                      name="product_desc"
                      rows="3"
                      required
                    ><?php echo $product['product_desc'];?></textarea>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      name="product_cat"
                      id="category"

                    >
                    <option value="<?php echo $product['product_cat'];?>"><?php echo $product['cat_name']; ?></option>

                    <?php
                    foreach($categories as $category){
                      if($category['cat_id'] !== $product['product_cat'])
                        echo'
                        <option value="'.$category['cat_id'].'">'.$category["cat_name"].'</option>
                        ';
                    }
                    
                    ?>
                      <!-- <option value="1">New Arrival</option>
                      <option value="2">Most Popular</option>
                      <option value="3">Trending</option> -->
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Brand</label
                    >
                    <select
                      class="custom-select tm-select-accounts" 
                      name="product_brand" 
                      id="category"
                    >
                    <option value="<?php echo $product['product_brand'];?>"><?php echo $product['brand_name']; ?></option>
                      <?php
                    foreach($brands as $brand){
                      if($brand['brand_id'] !== $product['product_brand'])
                        echo'
                        <option value="'.$brand['brand_id'].'">'.$brand["brand_name"].'</option>
                        ';
                    }
                    
                    ?>

                    </select>
                  </div>
                  
                  <div class="form-group mb-3">
                      <label
                        for="price"
                        >Price
                      </label>
                      <input
                        id="price"
                        name="product_price"
                        type="number"
                        value="<?php echo $product['product_price'];?>"
                        class="form-control validate"
                        data-large-mode="true"
                      />
                    </div>
                  
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product keywords
                    </label>
                    <input
                      id="keywords"
                      name="product_keyword"
                      type="text"
                      value="<?php echo $product['product_keywords'];?>"
                      class="form-control validate"
                      required
                    />
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" value="<?php echo $product['product_image'];?>" name="product_image" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="updateProduct" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
              </form>
            </div>
          </div>
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
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
