
<?php
session_start();
?>

<header>
  <input type="checkbox" id="nav_toggle" class="nav_toggle">
  <nav>
    <ul>
      <li><a href="Homepage.php">Home</a></li> <!---figure out--->
      <li><a href="#">About</a></li>  <!--Leads no where-->
      <li><a href="#">Blog</a></li>  <!--Leads no where-->
      <li><a href="#">Log u</a></li> <!--Leads no where-->
      <input type="text" id="search_bar" class="search_bar" placeholder="Search"/></input>
    </ul>
    
  </nav>

  <label for="nav_toggle" class="nav_toggle_label">
    <span><i class="fa-solid fa-bars fa-lg"></i></span>
  </label>

</header>

<br>

</body>
</html>