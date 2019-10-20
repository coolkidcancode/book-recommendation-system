<?php
include("header.php");
include("db.php");

	$flag=0;

	// Hàm isset() kiểm tra biến đã được khai báo chưa
	if(isset($_POST['submit']))
	{
		$result = mysqli_query($con,"INSERT INTO users(username) VALUES ('$_POST[username]')");
		if($result)
		{
			$flag=1;
		}
		//echo "Test nút Submit nàhhh";
	}

?>

<div class="panel panel-default">

	<!-- BẮT ĐẦU thanh điều hướng: Add Movies button and Back button -->
	<div class="panel-heading">
		<h2>
			<a class="btn btn-success" href="add_movies.php">Add Movies</a>
			<a class="btn btn-info pull-right" href="index.php">Back</a>
		</h2>
	</div>
	<!-- KẾT THÚC thanh điều hướng: Add Movies button and Back button -->

	<!-- BẮT ĐẦU thông báo thêm user thành công -->
	<?php if($flag) { ?>
		<div class="alert alert-success">User successfully inserted into database</div>
	<?php } ?>
	<!-- KẾT THÚC thông báo thêm user thành công -->

	<!-- BẮT ĐẦU form nhập user mới -->
	<div class="panel-body">
		<form action="add_user.php" method="post">
			<div class="form-group">
				<label for="username">User Name</label>
				<input type="text" name="username" id="username" class="form-control" required> 
				<!-- required: bắt buộc nhập thông tin -->
			</div>	
			<!-- BẮT ĐẦU button Submit -->
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary" required>
			</div>
			<!-- KẾT THÚC button Submit -->
		</form>
	</div>
	<!-- KẾT THÚC form nhập user mới -->	
</div>