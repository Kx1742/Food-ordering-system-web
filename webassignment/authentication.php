<style>
	@import url('https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;700&display=swap');

	.container .register #loginAgain{
		font-size: 2.5em;		
		color: white;
		background-color:#675D50;	
	}

	.container .register #loginAgain:hover{
		font-size: 2.7em;
		color: #675D50;
		background-color:white;
		border: 2px solid #675D50;	
	}
</style>
<?php
	session_start();
	$_SESSION['user']=null;

	//connect to database
	include('conf.php');
	
	$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	if($conn->connect_error){
		die("Connecttion failed:".$conn->connect_error);
	}

	//validate username and password
	$username=$_POST['username'];
	$password=$_POST['password'];
			
	$sql="SELECT * FROM UserAccount WHERE username = '$username' AND password = '$password'";
	$result=$conn->query($sql);
			
	if($result->num_rows>0){
		//session_start();
		$_SESSION['userId']=true;
		header("Location: home/index.php");
	}else{
	
		echo '<div class="container" style="
			min-height: 100vh;
			background: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
			display: flex;
			align-items: center;
			justify-content: center;
			flex-flow: column;
			padding-bottom: 30px;"
		
		> <div class="register" style="background: #fff;
		display: flex;
		flex-direction:column;
		border-radius: 2em;
		box-shadow: 0 10px 15px rgba(0,0,0,.1);
		padding: 20px;
		width: 600px;
		max-width:90%;
		height:15em;
 		 justify-content: center;
  		align-items: center;
		">
		<div>
		<h2 style="margin-bottom: 20px; text-align: center;font-size:2em;font-family: Sigmar, cursive;">Invalid username or password.<br>Please try again.</h2></div>';
		echo '
		
		<button id = "loginAgain"style="display: block;
			   font-family: Alkatra, normal;
               margin: 0 auto;
               font-size: 2.5em;
               text-align: center;
               width: 10em;
               border-radius: .5em;
               padding: .5em;
               padding-top: .2em;
               padding-bottom: .1em;
               margin-top: .5em;
               margin-bottom: .5em;" 
			   
        onClick="redirect()" 
        type="submit">Login</button>
	
		</div> </div>';
		
	}

	//close database connection
	$conn->close();
?>

<script>
function redirect() {
    location.replace("index.html") //change location here
   
}
</script>