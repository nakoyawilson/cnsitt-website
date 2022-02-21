<header>
  <nav>
    <ul>
      <li><a href="<?php echo $homePath.'index.php' ?>">Home</a></li>
      <li><a href="<?php echo $pagePath.'about.php' ?>">About Us</a></li>
      <li><a href="<?php echo $pagePath.'attractions.php' ?>">Attractions</a></li>
      <?php
        if(isset($_SESSION['user']))
        {
          echo '<li><a href="'.$pagePath.'add_attractions.php">Add Attraction</a></li>';
          echo '<li><a href="'.$pagePath.'update_profile.php">Update Profile</a></li>';
          echo '<li><a href="'.$pagePath.'logout.php">Log out</a></li>';
        }
        else{
          echo '<li><a href="'.$pagePath.'login.php">Log in</a></li>';
          echo '<li><a href="'.$pagePath.'register.php">Register</a></li>';
        }
      ?>
    </ul>
  </nav>
  <form action="">
    <label for="search">Search attractions</label>
    <input type="search" id="search" name="search-attractions" />
    <button>Search</button>
  </form>
</header>