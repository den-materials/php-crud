<!DOCTYPE html>
<html>
<head>
	<title>Cars!</title>
</head>
<body>
	<h1>Cars Index Page</h1>
	<a href="new">Add a car</a>
  <section>
      <ul>
          <?php while($row = $cars->fetch_object()): ?>
              <li>
                  Here is a <?php echo $row->car ?> for <?php echo $row->owner?>
                  <form action="delete" method="POST">
                  	<input type="hidden" name="id" value="<?php echo $row->id;?>">
                  	<input type="submit" value="Delete">
                  </form>
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
</body>
</html>