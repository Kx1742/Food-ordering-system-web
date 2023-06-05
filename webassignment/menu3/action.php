<?php
	session_start();
	define("DB_HOST","localhost"); //refer to comp u use to post db management system
//point out db server
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_DATABASE","foodrestaurant"); 
$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);//call variable without dollar sign

	// Get no.of items available in the cart table
	if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
		
		$stmt = $conn->prepare('SELECT * FROM cart');
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;
  
		echo $rows;
	  }

	
  
if (isset($_GET['clear'])) {

	$stmt = $conn->prepare('DELETE FROM cart');
	$stmt->execute();
	$_SESSION['showAlert'] = 'block';
	$_SESSION['message'] = 'All Item removed from the cart!';
	header('location:../cart/index.php');
}

  // Remove single items from cart
  if (isset($_GET['remove'])) {
	$id = $_GET['remove'];
	
	$stmt = $conn->prepare('DELETE FROM cart WHERE id=?');
	$stmt->bind_param('i',$id);
	$stmt->execute();

	$_SESSION['showAlert'] = 'block';
	$_SESSION['message'] = 'Item removed from the cart!';
	header('location:../cart/index.php');
  }
	 
// Add products into the cart table
if (isset($_POST['fid'])) {
	
	$fid = $_POST['fid'];
	$fname = $_POST['fname'];
	$fprice = $_POST['fprice'];
	$fimage = $_POST['fimage'];
	$fcode = $_POST['fcode'];
	$fqty = $_POST['fqty'];
	$total_price = $fprice * $fqty;
	
	$stmt = $conn->prepare('SELECT food_code FROM cart WHERE food_code=?');
	$stmt->bind_param('s',$fcode);
	$stmt->execute();
	$res = $stmt->get_result();
	$r = $res->fetch_assoc();
	$code = $r['food_code'] ?? '';

	
	if (!$code) {
		
		$query = $conn->prepare('INSERT INTO cart (food_name,food_price,food_image_location,qty,total_price,food_code) VALUES (?,?,?,?,?,?)');
		$query->bind_param('ssssss',$fname,$fprice,$fimage,$fqty,$total_price,$fcode);
		$query->execute();
	
	  echo '<div class="alert alert-success alert-dismissible mt-2">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Item added to your cart!</strong>
					  </div>';
	} else {
	  echo '<div class="alert alert-danger alert-dismissible mt-2">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Item already added to your cart!</strong>
					  </div>';
	}

	

  
	
  
	  // Set total price of the product in the cart table
	  if (isset($_POST['qty'])) {
		$qty = $_POST['qty'];
		$fid = $_POST['fid'];
		$fprice = $_POST['fprice'];
  
		$tprice = $qty * $fprice;
  
		$stmt = $conn->prepare('UPDATE cart SET qty=?, total_price=? WHERE id=?');
		$stmt->bind_param('isi',$qty,$tprice,$fid);
		$stmt->execute();
	  }
  
	  // Checkout and save customer info in the orders table
	  if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$products = $_POST['foods'];
		$grand_total = $_POST['grand_total'];
		$address = $_POST['address'];
		$pmode = $_POST['pmode'];
  
		$data = '';
  
		$stmt = $conn->prepare('INSERT INTO orders (name,email,phone,address,pmode,foodss,amount_paid)VALUES(?,?,?,?,?,?,?)');
		$stmt->bind_param('sssssss',$name,$email,$phone,$address,$pmode,$products,$grand_total);
		$stmt->execute();
		$stmt2 = $conn->prepare('DELETE FROM cart');
		$stmt2->execute();
		$data .= '<div class="text-center">
								  <h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								  <h2 class="text-success">Your Order Placed Successfully!</h2>
								  <h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $foods . '</h4>
								  <h4>Your Name : ' . $name . '</h4>
								  <h4>Your E-mail : ' . $email . '</h4>
								  <h4>Your Phone : ' . $phone . '</h4>
								  <h4>Total Amount Paid : ' . number_format($grand_total,2) . '</h4>
								  <h4>Payment Mode : ' . $pmode . '</h4>
							</div>';
		echo $data;
	  }
	}
  ?>