<?php
		require __DIR__ . '/.../vendor/autoload.php';

		$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/...');
		$dotenv->load();
	
		$db_host = $_ENV['DB_HOST'];
		$db_User = $_ENV['DB_USER'];
		$db_port = $_ENV['DB_PORT'];
		$db_database = $_ENV['DB_DATABASE'];
		$db_password = $_ENV['DB_PASSWORD'];
	
		$conn = mysqli_connect($db_host,$db_User,$db_port,$db_database,$db_password);

	if($conn)
	{
		$setLang=mysqli_query($conn, "SET NAMES 'utf8'");
	}
	else{
		die("ket noi that bai".mysqli_connect_errno());
	}
  
?>
