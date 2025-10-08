
<?php

	// connection details for MySQL database

	// $cd_host = "127.0.0.1";
	// $cd_port = 3306;
	// $cd_socket = "";

	// database name, username and password

	// $cd_dbname = "companydirectory";
	// $cd_user = "root";
	// $cd_password = "";

  $cd_host = "sql109.infinityfree.com"; 
  $cd_user = "if0_40111963";
  $cd_password = "9lWW0maCSdwZx";
  $cd_dbname = "if0_40111963_CompanyDirectory";

  $conn = new mysqli($cd_host, $cd_user, $cd_password, $cd_dbname);

  if ($conn->connect_error) {
    die(json_encode([
      "status" => [
      "code" => 300,
      "name" => "failure",
      "description" => "database unavailable: " . $conn->connect_error],
      "data" => []
    ]));
  }
?>