<?php
  $homePath = '../';
  $pagePath = './';

  if (isset($_POST['register'])) {
    echo $_POST['firstname'];
  }
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
    <form action="register.php" method="POST">
      <fieldset>
        <legend>Personal Info</legend>
        <div>
          <label>First Name: <input type="text" name="firstname"></label>
        </div>
        <div>
          <label>Last Name: <input type="text" name="lastname"></label>
        </div>
        <div>
          <label>Email: <input type="email" name="email"></label>
        </div>
        <div>
          <span>Gender:</span>
          <label><input type="radio" name="gender" value="Female">Female</label>
          <label><input type="radio" name="gender" value="Male">Male</label>
          <label><input type="radio" name="gender" value="Non-binary">Non-binary</label>
          <label><input type="radio" name="gender" value="Prefer not to say">Prefer not to say</label>
      </fieldset>
      <fieldset>
        <legend>Account Info</legend>
        <div>
          <label>Username: <input type="text" name="username"></label>
        </div>
        <div>
          <label>Password: <input type="password" name="pword"></label>
        </div>
        <div>
          <label>Confirm Password: <input type="password" name="confirmpword"></label>
        </div>
      </fieldset>
      <input type="submit" name="register" value="Register">
    </form>
  </main>
  <?php include('../templates/footer.php') ?>
</body>
</html>