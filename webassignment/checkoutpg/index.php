<?php
	define("DB_HOST","localhost"); //refer to comp u use to post db management system
  //point out db server
  define("DB_USER","root");
  define("DB_PASSWORD","");
  define("DB_DATABASE","foodrestaurant"); 
  $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);//call variable without dollar sign

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(food_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel='stylesheet' href='../mystyle/restaurantStyle.css'>
</head>

<body>
<?php include('../includes/header.php'); ?>

  <div class="checkout-container">
    <div class="row justify-content-center">
      <div class="order" id="order">
        <h4 class="text-center">Complete your order!</h4>
        <div class="order-details">
          <h6 class="lead"><b>Product(s) : </b></h6>
          <h5><?= $allItems; ?><h5>
          <h6 class="lead"><b>Delivery Charge : </b>Free</h6>
          <h5><b>Total Amount Payable : RM</b><?= number_format($grand_total,2) ?></h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="foods" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input style= "height:3em" type="text" name="name" class="form-control" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <input style= "height:3em" style= "height:3em" type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-group">
            <input style= "height:3em" type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h6 class="text-center lead">Select Payment Method</h6>
          <div class="form-group">
            <select  style= "height:4em"name="pmode" class="form-control">
           
          
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Make Payment" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
$(document).ready(function() {

// Sending Form data to the server
$("#placeOrder").submit(function(e) {
 
  e.preventDefault();
  $.ajax({
    url: 'action1.php',
    method: 'post',
    data: $('form').serialize() + "&action=order",
    success: function(response) {
      $("#order").html(response);
    }
  });
  });
  });
  </script>
  <?php include('../includes/footer.php'); ?>

</body>

</html>