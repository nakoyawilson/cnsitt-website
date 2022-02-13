<?php
  $homePath = '../';
  $pagePath = './';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php include('../templates/header.php') ?>
  <main>
    <h1>Register</h1>
    <form>
      <label>First Name: <input type="text" name="firstname"></label>
      <label>Last Name: <input type="text" name="lastname"></label>
      <label>Email: <input type="email" name="email"></label>
      <label>Username: <input type="text" name="username"></label>
      <label>Password: <input type="password" name="pword"></label>
      <label>Confirm Password: <input type="password" name="confirmpword"></label>
      <input type="submit" name="register" value="Register">
    </form>
  </main>
  <?php include('../templates/footer.php') ?>
</body>
</html>