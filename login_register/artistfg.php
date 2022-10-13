<!--this is form for artist Login-->
<section id="One" class="wrapper style3"  style="
    margin-top: -2%;
">
				<div class="inner">
					<header class="align-center">
						<p>Artist Forgot Password</p>
						<h2>Reset Password</h2>
						
					</header>
				</div>
</section>


		<!-- Two -->
			<section id="two" style="
    margin-top: -5%;
" >
				<div class="inner">
					<div class="box">
						<div class="content">
<section>
<div class="container divform" style="margin-top: 3em;">
	<h2><span class="glyphicon glyphicon-log-in"></span> Reset Password</h2>
	<form action="index.php?page=artistfg" method="post" name="f1">
		<div class="form-group">
			<label for="id">Email Id:</label>
			<input type="text" class="form-control" id="id" name="id" placeholder="Enter Id" required>
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password" required>
		</div>
		<div class="form-group">
			<label for="pwd">Confirm Password:</label>
			<input type="password" class="form-control" id="cnfpwd" name="cnfpass" placeholder="Confirm password" required>
		</div>
		<br>
		<button type="submit" class="button special" name="sub">Reset</button>
	</form>
	
	</div


</section>

<?php
if ( isset( $_POST[ 'sub' ] ) ) 
{
	$id = $_POST[ 'id' ];
	$pas = $_POST[ 'pass' ];
	$cnfpas = $_POST[ 'cnfpass' ];
	
	if($pas==$cnfpas)
	{
		$sql= "Update artist_info set a_pwd='".$pas."'where a_email='".$id."'";	//This  is query for fg.
	$result = mysqli_query($con, $sql);
	echo "<script> window.alert('Password Updated Successfully.');
	window.location.assign('index.php?page=artist_login')
	</script>";
	}
	else
	{echo "<script> window.alert('Password does not match.') </script>";}	
}
else
{
	
	
}
?>


