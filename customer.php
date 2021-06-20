<?php

require_once "Models/customerModel.php";
$CustomerModel = new CustomerModel();
$customers = $CustomerModel->getCustomers();
require_once "Views/customerView.php";

?>