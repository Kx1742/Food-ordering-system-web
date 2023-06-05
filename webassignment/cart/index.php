<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cart</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    
    <link rel="stylesheet" href="../mystyle/restaurantStyle.css">

  </head>
  <body>
  ~<?php include('../includes/checkSession.php'); ?>

    <?php include('../includes/header.php'); ?>

    <div class="cart-container" style = "overflow-x:auto;">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div style="display:<?php if (isset($_SESSION['showAlert'])) {
            echo $_SESSION['showAlert'];
            } else {
            echo 'none';
            } unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?php if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
              } unset($_SESSION['showAlert']); ?></strong>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-striped text-center ">
              <thead>
                <tr>
                  <td colspan="7">
                    <h4 class="table-title">Products in your cart!</h4>
                  </td>
                </tr>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total Price</th>
                  <th style = "width:18%">
                    <a href="../menu3/action.php?clear=all" class="badge-danger badge p-1" id="clear-cart" 
                    onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a>
                  </th>
                </tr>
              </thead>
              <tbody>
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
                    $stmt = $conn->prepare('SELECT * FROM cart');
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $grand_total = 0;
                    while ($row = $result->fetch_assoc()):
                  ?>
                <tr>
                  <td><?= $row['id'] ?></td>
                  <input type="hidden" class="fid" value="<?= $row['id'] ?>">
                  <td style = "width: 15%"><img src="<?= $row['food_image_location'] ?>" width="100"></td>
                  <td><?= $row['food_name'] ?></td>
                  <td style = "width: 10%">
                    <h5> RM </h5>&nbsp;&nbsp;<?= number_format($row['food_price'],2);?>
                  </td>
                  <input type="hidden" class="fprice" value="<?= $row['food_price'] ?>">
                  <td style = "width:10%">
                    <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:65px;">
                  </td>
                  <td style = "width: 10%"><h5> RM </h5>&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                  <td>
                    <a href="../menu3/action.php?remove=<?= $row['id'] ?>"class="badge-danger badge p-1" id="delete-food"
                    onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Delete Food</a>
                  </td>
                </tr>
                <?php $grand_total += $row['total_price']; ?>
                <?php endwhile; ?>
                <tr>
                  <td colspan="3" style = "width: 45%">
                    <a href="../menu3/index.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                  </td>
                  <td colspan="2"><b>Grand Total</b></td>
                  <td><b><h5> RM </h5>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                  <td>
                    <a href="../checkoutpg/index.php" style = "background-color:#3C6255" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script type="text/javascript">
      $(document).ready(function() {
      
        // Change the item quantity
        $(".itemQty").on('change', function() {
          var $el = $(this).closest('tr');
      
          var fid = $el.find(".fid").val();
          var fprice = $el.find(".fprice").val();
          var qty = $el.find(".itemQty").val();
          location.reload(true);
          $.ajax({
            url: '../menu3/action.php',
            method: 'post',
            cache: false,
            data: {
              qty: qty,
              fid: fid,
              fprice: fprice
            },
            success: function(response) {
              console.log(response);
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
    <script src="../javaScript/filterscript2.js"></script>
    <script src="../javaScript/restaurantScript.js"></script>
    <?php include('../includes/footer.php'); ?>
  </body>
</html>