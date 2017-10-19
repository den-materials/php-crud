<!DOCTYPE html>
<html>
	<head>
		<title>PHP CRUD</title>
	</head>
	<body>
		<h1>Cars Index Page</h1>
		<section>
			<ul>
				<?php while($row = $cars->fetch_object()): ?>
					<li>
						Here is a <?php echo $row->car ?> for <?php echo $row->owner ?>
						<form action="edit" method="POST">
						<input name="id" type="text" value="<?php echo $row->id; ?>" style="display: none"/>
						<input name="car" type="text" value="<?php echo $row->car; ?>" style="display: none"/>
						<input name="owner" type="text" value="<?php echo $row->owner; ?>" style="display: none"/>
						<input type="submit" " value="Edit">
						</form>
					</li>
				<?php endwhile; ?>
			</ul>
		</section>
		<a href="new">Create a new car</a>
	</body>
</html>