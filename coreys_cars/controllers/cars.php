<?php

require('../models/car.php');

Class CarController {
	public function indexPage() {
		$cars = Car::find();
		require('../views/cars/index.php');
	}

	public function newPage() {
		require('../views/cars/new.php');
	}

	public function createAction() {
		Car::create($_POST['car'], $_POST['owner']);
		header('Location: ./');
	}

	public function editPage() {
		require('../views/cars/edit.php');
	}

	public function updateAction() {
		Car::update($_POST['id'], $_POST['car'], $_POST['owner']);
		header('Location: ./');
	}
}

$new_car_controller = new CarController();

if($_GET['action'] == 'index') {
	$new_car_controller->indexPage();
} else if($_GET['action'] == 'new') {
	$new_car_controller->newPage();
} else if($_GET['action'] == 'create') {
	$new_car_controller->createAction();
} else if($_GET['action'] == 'edit') {
	$new_car_controller->editPage();
} else if($_GET['action'] == 'update') {
	$new_car_controller->updateAction();
}

?>