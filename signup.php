<?php

require "header.php";

?>
<main>
  <div>
    <section>
        <h1>Sign Up</h1>
        <form action="includes/signup.inc.php" method="post"><br>
           <input type="text" name="uid" placeholder="Username"><br>
           <input type="text" name="mail" placeholder="E-mail"><br>
           <input type="password" name="pwd" placeholder="Password"><br>
           <input type="password" name="pwd-repeat" placeholder="Reapeat Password"><br>
           <button type="submit" name="signup-submit">Signup</button>
        </form>  
    </section>
  </div>
</main>

<?php

require "footer.php";

?>