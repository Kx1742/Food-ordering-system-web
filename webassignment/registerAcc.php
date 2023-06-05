<style>
	@import url('https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;700&display=swap');

	.container .register #loginAftRegis{
		font-size: 2.5em;		
		color: white;
		background-color:#675D50;	
	}

	.container .register #loginAftRegis:hover{
		font-size: 2.7em;
		color: #675D50;
		background-color:white;
		border: 2px solid #675D50;	
	}
</style>
<?php
	//connect to database
	$servername='localhost';
	$username='root';
	$password='';
	$dbname='foodrestaurant';
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	
	if($conn->connect_error){
		die("Connecttion failed:".$conn->connect_error);
	}

	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$sql="INSERT INTO `useraccount`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
	
	if(mysqli_query($conn,$sql)){
		echo 
		'<div class="container" style="
			min-height: 100vh;
			background: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
			display: flex;
			align-items: center;
			justify-content: center;
			flex-flow: column;
			padding-bottom: 30px;"
		> 
		<div class="register" style="background: #fff;
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
		<h2 style="margin-bottom: 20px; text-align: center;font-size:2em;font-family: Sigmar, cursive;">Account created successfully</h2></div>';
		echo '
		
		<button id = "loginAftRegis"style="display: block;
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
		onClick="redirect()" type="submit" >Login</button>
		
		</div> </div>';
	}else{
		echo 'Error creating account'.mysqli_error($conn);
	}
	
	$conn->close();
	
?>
<script>
function redirect() {
    location.replace("index.html") //change location here
   
}

</script>