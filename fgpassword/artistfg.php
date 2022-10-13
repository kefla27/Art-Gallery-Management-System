<section id="One" class="wrapper style3"  style="
    margin-top: -2%;
">
				<div class="inner">
					<header class="align-center">
						<p>Artist Forgot Password</p>
						<h2>Artist Forgot Password</h2>
						
					</header>
				</div>
</section>


		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
<div class="back-img back-img1">
<!--this is form for customer Login-->

<div class="divform">
	<h2><span class="glyphicon glyphicon-log-in"></span> Reset Password</h2>
	<form action="index.php?page=customer_login" method="post" name="f1">
		<div class="form-group">
			<label for="id">Email Id:</label>
			<input type="text" class="form-control" id="id" name="id" placeholder="Enter Id">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password">
		</div>
		<div class="form-group">
			<label for="pwd">Confirm Password:</label>
			<input type="password" class="form-control" id="cnfpwd" name="cnfpass" placeholder="Confirm password">
		</div>
		
		<br>
		<button type="submit" class="button special" name="sub">Login</button><a href="forgotpass.php" style="text-decoration:none">Forgot Password?</a>
	</form>
</div>
</div>
</div>
</div>

<!--End this is form for customer Login-->
<?php
if ( isset( $_POST[ 'sub' ] ) ) {
	$id = $_POST[ 'id' ];
	$pas = $_POST[ 'pass' ];
	$pas2 = $_POST[ 'cnfpass' ];
	$sql= "update from artist_info where a_email='".$id."set a_pwd='".$pas2."'"; //This  is query for login.
	$result = mysqli_query($con, $sql);
}
    
?>