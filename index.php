<?php

include("header.php");
include("db.php");
?>

<div class="panel panel-default">
	<!-- BẮT ĐẦU thanh điều hướng: Add Movies button and Back button -->
	<div class="panel-heading">
		<h2>
			<a class="btn btn-success" href="add_user.php" >Add Users</a>
			<a class="btn btn-info pull-right " href="index.php">Back</a>
		</h2>
	</div>
	<!-- KẾT THÚC thanh điều hướng: Add Movies button and Back button -->
	<div class="panel-body">
		<table class="table table-striped">
			<th>User Name</th>
			<th>Add Movies</th>
			<th>Show Movies</th>
			<th>Show Recommendation</th>

			<?php $result=mysqli_query($con,"SELECT * FROM users");
			while($row=mysqli_fetch_array($result))
			{
			?>
			<tr>
				<td> 
					<?php echo $row['username']; ?> 
				</td>
				<td>
					<form action="add_movies.php">
						<input type="submit" name="add_movies" class="btn btn-primary"  value="Add Movies">
						<input type="hidden" name="id" value="<?php echo $row['id']?>">
					</form>
				</td>
				<td>
					<form action="show_movies.php">
						<input type="submit" name="show_movies" class="btn btn-primary" value="Show Movies">
						<input type="hidden" name="id" value="<?php echo $row['id']?>">
					</form>
				</td>
				<td>
					<form action="user_recommendation.php">
						<input type="submit" name="show_movies" class="btn btn-primary" value="Show Recommendation">
						<input type="hidden" name="id" value="<?php echo $row['id']?>">
					</form>
				</td>
			</tr>
			<?php 
			}
			?>
		</table>
	</div>
</div>
<div class="panel-footer" style="background-color: #394a6d ; font-family: monospace;color: #bbeaa6">
		<h3>Đồ án giữa kỳ</h3>
	<table class="table table-borderless table-dark" >
		<tr>
			<td>Tên đề tài</td>
			<td>MOVIE RECOMMENDATION SYSTEM</td>
		</tr>
		<tr>
			<td rowspan="3">Sinh viên thực hiện</td>
			<td>Họ tên: Lê Thị Hồng Huệ</td>
		</tr>
		<tr>
			<td>MSSV: K164062658</td>
		</tr>
		<tr>
			<td>Email: huelthk16406c@st.uel.edu.vn</td>
		</tr>
		<tr>
			<td rowspan="6">Nguồn tham khảo</td>
		</tr>
		<tr><td><a href="https://www.slideshare.net/xamat/recommender-systems-machine-learning-summer-school-2014-cmu"target="_blank"style="color: #bbeaa6">Recommender Systems (Machine Learning Summer School 2014 @ CMU)</a></td></tr>
		<tr>
			<td><a href="https://www.ibm.com/developerworks/library/os-recommender1/" target="_blank"style="color: #bbeaa6">Introduction to approaches and algorithms</a> </td>
		</tr>
		<tr><td><a href="https://medium.com/@wwwbbb8510/comparison-of-user-based-and-item-based-collaborative-filtering-f58a1c8a3f1d" target="_blank"style="color: #bbeaa6">Comparison of User-Based and Item-Based Collaborative Filtering</a></td></tr>
		<tr><td><a href="https://vnoi.info/wiki/translate/ml/Machine-Learning-Classification-phan-2"target="_blank"style="color: #bbeaa6">Machine Learning - Classification</a></td></tr>
		<tr><td><a href="https://www.youtube.com/watch?v=MNVmBgKaROM&list=PLvdB3XmhZhLxmNWkh3bGGMf9FfiyK4QHZ"target="_blank"style="color: #bbeaa6">RECOMMENDATION ENGINE TUTORIAL IN PHP</a></td></tr>

	</table>
	<div style="color: white" class="footer-copyright text-center py-3">© 2019 Copyright:
    <a style="color:#bbeaa6 " href="https://www.facebook.com/hue.hong.1044" target="_blank">Hong Hue</a>
  </div>
</div>