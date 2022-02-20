<?php
  $homePath = '../';
  $pagePath = './';

  session_start();

	if(!isset($_SESSION['user']))
	{
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Attractions</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php include('../templates/header.php') ?>
  <main>
    <h1>Add Attractions</h1>
  </main>
  <?php include('../templates/footer.php') ?>
</body>
</html>