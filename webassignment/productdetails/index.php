<!DOCTYPE html>
<html>
  <?php
    // Retrieve the product details based on the ID in the URL
    $id = $_GET['id'];
    
    define("DB_HOST","localhost"); //refer to comp u use to post db management system
    //point out db server
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_DATABASE","foodrestaurant"); 
    $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);//call variable without dollar sign
    //$result= $conn -> query ()
    //result =conn ->query($query)
    $sql = "SELECT * FROM food WHERE id = $id";
    $result = mysqli_query($conn, $sql);
          
    //check content ttl row in db
    // Connect to the database and retrieve the product data
    $row = mysqli_fetch_array($result);
  ?>
  <head>
    <link rel="stylesheet" href="../mystyle/restaurantStyle.css">
    <!--use icon from internet resource-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
  <?php include('../includes/checkSession.php'); ?>

    <?php include('../includes/header.php'); ?>

    <h1 class= "itemDetailsHeading" style = "margin-top: 3em;">Item details</h1>
    <main class="product-details-container" style = "width: 100%;">
      <!-- Left Column  -->
      <div class="left-column">
        <img src="<?php echo $row['food_image_location']; ?>" alt="">
      </div>
      <!-- Right Column -->
      <div class="right-column">
        <!-- Product Description -->
        <div class="product-description">
          <span><?php echo $row['food_category']; ?></span>
          <h1><?php echo $row['food_name']; ?></h1>
          <pre style = "width:95%"><?php echo $row['long_description'];?></pre>
        </div>
        <!-- Product Configuration --><!-- no need-->
        <!--
        <div class="product-configuration">
          <a href="#">About us</a>
        </div>-->
        <!-- Product Pricing -->
        <div class="product-price">
          <span>RM <?php echo $row['food_price']; ?></span>
          <div class="quantity">
            <form action="" class="form-submit">
              <div class="quantityInput">
                <b>Quantity : </b>
                <input type="number" class="form-control fqty" value="<?= $row['food_qty'] ?>">
              </div>
              <input type="hidden" class="fid" value="<?= $row['id'] ?>">
              <input type="hidden" class="fname" value="<?= $row['food_name'] ?>">
              <input type="hidden" class="fprice" value="<?= $row['food_price'] ?>">
              <input type="hidden" class="fimage" value="<?= $row['food_image_location'] ?>">
              <input type="hidden" class="fcode" value="<?= $row['food_code'] ?>">
              <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
              <a href = "../menu3/index.php" onMouseOver="this.style.backgroundColor='#675D50'"
              onMouseOut="this.style.backgroundColor='#102355'"
              style="font-size: 2rem;color: #fff;background: #102355;
              border-radius: 1rem;padding:.40em;"><i class="fas fa-backward"></i>&nbsp;&nbsp;Back to Menu</a>
            </form>
          </div>
        </div>
        <div class = "social-links">
          <p>Share At: </p>
          <a href = "#">
          <i class = "fab fa-facebook-f"></i>
          </a>
          <a href = "#">
          <i class = "fab fa-twitter"></i>
          </a>
          <a href = "#">
          <i class = "fab fa-instagram"></i>
          </a>
          <a href = "#">
          <i class = "fab fa-whatsapp"></i>
          </a>
          <a href = "#">
          <i class = "fab fa-pinterest"></i>
          </a>
        </div>
      </div>
    </main>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

    <script type="text/javascript">
      $(document).ready(function() {
      
        // Send product details in the server
        $(".addItemBtn").click(function(e) {
          e.preventDefault();
          var $form = $(this).closest(".form-submit");
          var fid = $form.find(".fid").val();
          var fname = $form.find(".fname").val();
          var fprice = $form.find(".fprice").val();
          var fimage = $form.find(".fimage").val();
          var fcode = $form.find(".fcode").val();
          var fqty = $form.find(".fqty").val();
      
          $.ajax({
            url: '../menu3/action.php',
            method: 'post',
            data: {
              fid: fid,
              fname: fname,
              fprice: fprice,
              fqty: fqty,
              fimage: fimage,
              fcode: fcode
            },
            success: function(response) {
              $("#message").html(response);
              window.scrollTo(0, 0);
              load_cart_item_number();
            }
          });
        });
      
        // Load total no.of items added in the cart and display in the navbar
        load_cart_item_number();
      
        function load_cart_item_number() {
          $.ajax({
            url: '../menu3/action.php',
            method: 'get',
            data: {
              cartItem: "cart_item"
            },
            success: function(response) {
              $("#cart-item").html(response);
            }
          });
        }
      });
    </script>
    <?php include('../includes/footer.php'); ?>
  </body>
</html>