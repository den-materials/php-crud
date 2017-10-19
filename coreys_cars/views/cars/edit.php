<!DOCTYPE html>
<html>
<head>
	<title>Edit Car</title>
</head>
<body>

	<h1>Edit a car</h1>
	<form action="update" method="POST">
		<input name="id" type="text" value="<?php echo $_POST['id']; ?>" style="display:none" />
		<label for="car">Car name:</label>
		<input name="car" type="text" placeholder="<?php echo $_POST['car']; ?>">
		<label for="owner">Owner:</label>
		<input name="owner" type="text" placeholder="<?php echo $_POST['owner']; ?>">
		<input type="submit" value="Submit"/>
	</form>

</body>
</html>