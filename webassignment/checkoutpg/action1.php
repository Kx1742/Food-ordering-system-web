<?php
	session_start();
	define("DB_HOST","localhost"); //refer to comp u use to post db management system
	//point out db server
	define("DB_USER","root");
	define("DB_PASSWORD","");
	define("DB_DATABASE","foodrestaurant"); 
	$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);//call variable without dollar sign

	  // Checkout and save customer info in the orders table
	  if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$foods = $_POST['foods'];
		$grand_total = $_POST['grand_total'];
		$address = $_POST['address'];
		$pmode = $_POST['pmode'];
  
		$data = '';
  
		$stmt = $conn->prepare('INSERT INTO orders (name,email,phone,address,pmode,foods,amount_paid)VALUES(?,?,?,?,?,?,?)');
		$stmt->bind_param('sssssss',$name,$email,$phone,$address,$pmode,$foods,$grand_total);
		$stmt->execute();
		$stmt2 = $conn->prepare('DELETE FROM cart');
		$stmt2->execute();
		$data .= '<div class="text-center">
			<h1 class="thank-you" style="font-size: 2.5em;color:#FC2947; font-weight: bolder;">Thank You!</h1>
			<h2 class="text-success">Order Placed Successfully!</h2>
			<h4 style="font-size: 2.2em; padding:2em;height:auto;color:#495371;text-align:left;"class="ordered-item">Items Purchased : ' . $foods . '</h4>
			<h4 style="font-size: 1.8em;text-align:left;margin-left:2em;color:#495371;">Total Amount Paid : ' . number_format($grand_total,2) . '</h4>
			<h4 style="font-size: 1.8em;text-align:left;margin-left:2em;color:#495371;">Payment Mode : ' . $pmode . '</h4>
			<h4 style="font-size: 1.8em;text-align:left;margin-left:2em;">Your Name : ' . $name . '</h4>
			<h4 style="font-size: 1.8em;text-align:left;margin-left:2em;">Your E-mail : ' . $email . '</h4>
			<h4 style="font-size: 1.8em;text-align:left;margin-left:2em;">Your Phone : ' . $phone . '</h4>
		</div>';
		echo $data;

		echo '
		<button style="   width: 100%;
		background-image: linear-gradient(to right, #a68519 0%, #654e1f 100%);
		margin-top: 20px;
		padding: 10px;
		font-size: 20px;
		color:#fff;
		border-radius: 10px;
		cursor: pointer;
		transition: .2s linear;" onClick="redirect()"> Make Payment </button>';
	  }
	
  ?>
<script>
function redirect() {
  location.replace("creditcard.html")
}
</script>



