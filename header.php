
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>
</title>
</head>
<body>
<header>
  <nav class="header-nav-bar">
    <a href='#'>
     <img src="" alt="logo">
    </a>
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="#">SERVICES</a></li>
      <li><a href="#">CONTACT</a></li>
      <li><a href="#">ABOUT ME</a></li>
    </ul>
<!--     shaleen govil was here :) -->
    <div>
    <?php
    if(isset($_SESSION['Id'])){
      echo '<form action="includes/logout.inc.php" method= "post">
          <button type="submit" name="logout-submit">LOG OUT</button>
        </form>';}
    else{    
      echo '<form action="includes/login.inc.php" method= "post">
          <input type="text" name="mailId" placeholder="Username/Email">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">LOG IN</button>
        </form>
        <a href="signup.php">SignUp</a> ';
    }
     ?>   
        
        
    </div>  
  </nav>      
</header> 
