<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="well text-center">RECOMMENDATION FOR YOU
			
		</h2>
	</div>
</body>
</html>

<?php

include("db.php");
include("recommend.php");

$movies=mysqli_query($con,"SELECT * FROM user_movies");
$matrix=array();

while($movie=mysqli_fetch_array($movies))
{
	$users=mysqli_query($con,"SELECT username FROM users WHERE id=$movie[user_id]");
	$username=mysqli_fetch_array($users);

	$matrix[$username['username']][$movie['movie_name']]=$movie['movie_rating'];
}
// echo "<pre>";
// print_r($matrix);
// echo "</pre>";
$users=mysqli_query($con,"SELECT username FROM users WHERE id=$_GET[id]");
$username=mysqli_fetch_array($users);


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

			<?php 
			$recommendation=array();

			$recommendation=getRecommendation($matrix,$username['username']);
			foreach ($recommendation as $movie => $rating) 
			{

			?>
			<tr>
				<td> 
					<?php echo $movie; ?> 
				</td>
				<td> 
					<?php echo $rating; ?> 
				</td>
			</tr>
			<?php 
			}
			?>
		</table>
	</div>
</div>