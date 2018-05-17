
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>View All types Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>type ID</th>
		<th>type Title</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_brand = "select * from sub_categories";
	
	$run_brand = mysqli_query($con, $get_brand); 
	
	$i = 0;
	
	while ($row_brand=mysqli_fetch_array($run_brand)){
		
		$subcat_id = $row_brand['subcat_id'];
		$subcat_title = $row_brand['subcat_title'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $subcat_title;?></td>
		<td><a href="index.php?edit_brand=<?php echo $subcat_id; ?>">Edit</a></td>
		<td><a href="delete_brand.php?delete_brand=<?php echo $subcat_id;?>">Delete</a></td>
	
	</tr>
	<?php } ?>




</table>