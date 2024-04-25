<?php
// UserController.php
require_once "UserModel.php";

class UserController {
    private $model;

    public function __construct($conn) {
        $this->model = new UserModel($conn);
    }

    public function index() {
        $users = $this->model->getUsers();
        include "viewCustomers.php"; // Include the view
    }

    // Add more controller actions here if needed
}

// Create an instance of UserController
$userController = new UserController($conn);

// Call the index method to display users
$userController->index();
?>
