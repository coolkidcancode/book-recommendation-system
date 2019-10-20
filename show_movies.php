<?php

include("header.php");
include("db.php");
?>

<div class="panel panel-default">
	<!-- BẮT ĐẦU thanh điều hướng: Add Movies button and Back button -->
	<div class="panel-heading">
		<h2>
			<a class="btn btn-success" href="add_user.php">Add Users</a>
			<a class="btn btn-info pull-right" href="index.php">Back</a>
		</h2>
	</div>
	<!-- KẾT THÚC thanh điều hướng: Add Movies button and Back button -->
	<div class="panel-body">
		<table class="table table-striped">
			<th>Movie Name</th>
			<th>Movie Rating</th>

			<?php $result=mysqli_query($con,"SELECT * FROM user_movies WHERE user_id='$_GET[id]'");
			while($row=mysqli_fetch_array($result))
			{
			?>
			<tr>
				<td> 
					<?php echo $row['movie_name']; ?> 
				</td>
				<td> 
					<?php echo $row['movie_rating']; ?> 
				</td>
			</tr>
			<?php 
			}
			?>
		</table>
	</div>
</div>