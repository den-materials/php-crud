<?php

	Class Car {
		static public function find() {
			$servername = 'localhost';
			$username = 'root';
			$password = 'root';
			$dbname = 'phpcrud';
			
			$mysql_connection = new mysqli($servername, $username, $password, $dbname);

			if($mysql_connection->connect_error) {
				$mysql_connection->close();
				die('Connection failed: ' .$mysql_connection->connect_error);
			} else {
				$sql = "SELECT * FROM cars;";
				$results = $mysql_connection->query($sql);
				return $results;
			}
		}

		static public function create($car, $owner) {
			$servername = 'localhost';
			$username = 'root';
			$password = 'root';
			$dbname = 'phpcrud';
			
			$mysql_connection = new mysqli($servername, $username, $password, $dbname);

			if($mysql_connection->connect_error) {
				$mysql_connection->close();
				die('Connection failed: ' .$mysql_connection->connect_error);
			} else {
				$sql = "INSERT INTO cars (car, owner) VALUES ('".$car."','".$owner."');";
				$mysql_connection->query($sql);
			}
		}

		static public function update($id, $car, $owner) {
			$servername = 'localhost';
			$username = 'root';
			$password = 'root';
			$dbname = 'phpcrud';
			
			$mysql_connection = new mysqli($servername, $username, $password, $dbname);

			if($mysql_connection->connect_error) {
				$mysql_connection->close();
				die('Connection failed: ' .$mysql_connection->connect_error);
			} else {
				$sql = "UPDATE cars SET car='".$car."', owner='".$owner."' WHERE id=".$id.";";
				$mysql_connection->query($sql);
			}
		}
	}

?>