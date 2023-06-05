<?php 
  //establish connection
  define("DB_HOST","localhost"); //refer to comp u use to post db management system
  //point out db server
  define("DB_USER","root");
  define("DB_PASSWORD","");
  define("DB_DATABASE","foodrestaurant"); 
  $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);//call variable without dollar sign
  $query="SELECT * FROM food ORDER BY id ASC"; //select all
  $result = mysqli_query($conn,$query);
  //$result= $conn -> query ()
  //result =conn ->query($query)
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Menu</title>
    <link rel="stylesheet" href="../mystyle/restaurantStyle.css">
    <!--use icon from internet resource-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
  </head>
  <body>
  <?php include('../includes/checkSession.php'); ?>

    <?php include('../includes/header.php'); ?>

   
    <div class="wrapper">
      <div id="search-container">
        <input
        type="search"
        id="search-input"
        placeholder="Search product name here.."
        value=''/>
        <button id="search">Search</button>
      </div>
      <div id="buttons">
        <button class="button-value" onclick="filterProduct('all')">All</button>
        <button class="button-value" onclick="filterProduct('Sushi')">Sushi</button>
        <button class="button-value" onclick="filterProduct('Ramen')">Ramen</button>
        <button class="button-value" onclick="filterProduct('Beverage')">Beverage</button>
        <button class="button-value" onclick="filterProduct('Dessert')">Dessert</button>
      </div>
    </div>
  </section>
  <div id="message"></div>
  <section class="jpmenu" id="jpmenu">
    <h3 class="dishes-sub-heading">Our Menu</h3>
    <h1 class="dishes-heading"> Today's speciality</h1>
    <!--
    <a  class="nav-link" href="../cart/index.php"><i class="fas fa-shopping-cart"></i> 
    <span id="cart-item" class="badge badge-danger"></span></a>
    -->
    <div class="box-container">
      <?php  while ($row=mysqli_fetch_assoc($result)){ ?>    
        <div class="box <?php echo $row['food_category']; ?> hide">
          <div class="image">
            <img src="<?php echo $row['food_image_location']; ?>" alt="">
          </div>
          <div class="content">
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-alt"></i>
            </div>
            <a href="#" class="cat"><?php echo $row['food_category']; ?></a><br>
            <span class="foodprice">RM <?php echo $row['food_price']; ?></span>
            <h3 class="product-name"><?php echo $row['food_name']; ?></h3>
            <p><?php echo $row['food_description']; ?></p>
          </div> 
          <div class="quantity">
            <form action="" class="form-submit">
              <div class="quantityInput">
                <label class = "quantityLabel">Quantity : </lable>
                <input type="number" class="form-control fqty" value="<?= $row['food_qty'] ?>">
              </div>
              <input type="hidden" class="fid" value="<?= $row['id'] ?>">
              <input type="hidden" class="fname" value="<?= $row['food_name'] ?>">
              <input type="hidden" class="fprice" value="<?= $row['food_price'] ?>">
              <input type="hidden" class="fimage" value="<?= $row['food_image_location'] ?>">
              <input type="hidden" class="fcode" value="<?= $row['food_code'] ?>">
              <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
            </form>
            <a href="../productdetails/index.php?id=<?php echo $row['id']; ?>" class="btn"> View More</a>
          </div>
        </div>
      <?php 
      }mysqli_close($conn);
      ?>
    </div>
  </section>
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
      url: 'action.php',
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

  function load_cart_item_number() {
    $.ajax({
      url: 'action.php',
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
    <script src="../javaScript/filterscript2.js"></script>
    <script src="../javaScript/restaurantScript.js"></script>
    <?php include('../includes/footer.php'); ?>

  </body>
</html>