<?php 
include("includes/db.php"); 

if(isset($_GET['edit_brand'])){

	$brand_id = $_GET['edit_brand']; 
	
	$get_brand = "select * from sub_categories where subcat_id='$brand_id'";

	$run_brand = mysqli_query($con, $get_brand); 
	
	$row_brand= mysqli_fetch_array($run_brand); 
	
	$brand_id = $row_brand['subcat_id'];
	
	$brand_title = $row_brand['subcat_title'];
}


?>
<form action="" method="post" style="padding:80px;">

<b>Update Brand</b>
<input type="text" name="new_brand" value="<?php echo $brand_title;?>"/> 
<input type="submit" name="update_brand" value="Update Brand" /> 

</form>

<?php  

	if(isset($_POST['update_brand'])){
	
	$update_id = $brand_id; 
	
	$new_brand = $_POST['new_brand'];
	
	$update_brand = "update sub_categories set subcat_title='$new_brand' where subcat_id='$update_id'";

	$run_update = mysqli_query($con, $update_brand); 
	
	if($run_update){
	
	echo "<script>alert('Type has been updated!')</script>";
	echo "<script>window.open('index.php?view_brands','_self')</script>";
	}
	}

?>