<?php
  $homePath = '../';
  $pagePath = './';

  if(isset($_POST['login']))
  {
    $username=$_POST['username'];
    $pword=$_POST['pword'];

    include('./con_server_db.php');

    $query="SELECT * FROM member WHERE username='$username' AND pword=md5('$pword')";

    $result=mysqli_query($con, $query) or die("Error:".mysqli_error());

    $rowCount=mysqli_num_rows($result);

    if ($rowCount==1)
    {
      session_start();
      $_SESSION['user']=$username;
      header('location: add_attractions.php');
    }
    else{
      echo "Username and/or password do not exist";
    }
    mysqli_close($con);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php include('../templates/header.php') ?>
  <main>
    <h1>Log In</h1>
    <form action="./login.php" method="post">
      <div>
        <label>Username: <input type="text" name="username"></label>
      </div>
      <div>
        <label>Password: <input type="password" name="pword"></label>
      </div>
      <input type="submit" name="login" value="Log In">
    </form>
  </main>
  <?php include('../templates/footer.php') ?>
</body>
</html>