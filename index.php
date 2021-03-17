<?php

include "StorageConnectorInterface.php";
include "DatabaseConnector.php";
include "FileConnector.php";
include "User.php";

$conn = new DatabaseConnector();
$user = new User($conn);