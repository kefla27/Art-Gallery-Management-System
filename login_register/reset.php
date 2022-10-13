<?php
if ( isset( $_POST[ 'sub' ] ) ) 
{
	$id = $_POST[ 'id' ];
	$pas = $_POST[ 'pass' ];
	$cnfpas = $_POST[ 'cnfpass' ];
	if($pas==$cnfpass)
	{
		$sql= "Update artist_info set a_pwd='".$pas."where a_email='".$id."'";	//This  is query for fg.
	$result = mysqli_query($con, $sql);
	echo "<script> window.alert('Password updated sucessfully');
	window.location.assign('artist_login.php')
</script>";
	}
	else
	{
		echo "<script> window.alert('Your input is invalid!! ');
	window.location.assign('artistfg.php')
</script>";
	}
}
else
{
	
}
?>

<!--End this is form for artist Login-->
