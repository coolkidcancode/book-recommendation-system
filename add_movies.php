<?php
	session_start();
	if(isset($_GET['id']))
	{
		$_SESSION['id']=$_GET['id'];
	}
include("header.php");
include("db.php");

	$flag=0;

	// Hàm isset() kiểm tra biến đã được khai báo chưa
	if(isset($_POST['submit']))
	{
		$result = mysqli_query($con,"INSERT INTO user_movies(user_id,movie_name,movie_rating) VALUES ('$_SESSION[id]','$_POST[movie_name]','$_POST[movie_rating]')");
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
			<a class="btn btn-success" href="add_user.php">Add Users</a>
			<a class="btn btn-info pull-right" href="index.php">Back</a>
		</h2>
	</div>
	<!-- KẾT THÚC thanh điều hướng: Add Movies button and Back button -->

	<!-- BẮT ĐẦU thông báo thêm phim thành công -->
	<?php if($flag) { ?>
		<div class="alert alert-success">User successfully inserted into database</div>
	<?php } ?>
	<!-- KẾT THÚC thông báo thêm phim thành công -->

	<!-- BẮT ĐẦU form nhập phim mới -->
	<div class="panel-body">
		<form action="add_movies.php" method="post">
			<div class="form-group">
				<label for="username">Movie Name</label>
				<input type="text" name="movie_name" id="movie_name" class="form-control" required> 
				<!-- required: bắt buộc nhập thông tin -->
			</div>
			<!-- BẮT ĐẦU movie rating -->
			<div class="form-group">
				<label for="username">Movie Rating</label>
				<input type="number" name="movie_rating" id="movie_rating" class="form-control" required> 
				<!-- required: bắt buộc nhập thông tin -->
			</div>	
				<!-- KẾT THÚC movie rating -->

			<!-- BẮT ĐẦU button Submit -->
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary" required>
			</div>
			<!-- KẾT THÚC button Submit -->
		</form>
	</div>
	<!-- KẾT THÚC form nhập user mới -->	
</div>
