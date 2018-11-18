<?php
  $previous = $_SESSION['previous_location'];
 ?>

 <div class="navbar_section">
   <ul class="list_elments">
     <?php
      if($previous == 'index'){
        echo '<li class="nav"><a class="active nav-link" href="index.php">Home</a></li>
        <li class="nav"><a class="nav-link" href="meatballs.php">Swedish Meatballs</a></li>
        <li class="nav"><a class="nav-link" href="pancakes.php">American Pancakes</a></li>
        <li class="nav"><a class="nav-link" href="calendar.php">Calendar</a></li>';
        if(!isset($_SESSION['userID'])){
        echo '<li class="nav"><a class="login nav-link" href="login.php">Login</a></li>
        <li class="nav"><a class="signup nav-link" href="signup.php">Signup</a></li>';
        }
        if(isset($_SESSION['userID'])){
        echo '<li class="nav"><p class="logged-user">Logged in user: '.$_SESSION['userUID'].'
        <li class="nav"><a class="login nav-link" href="logout.php">Logout</a></li>';
        }
      }elseif ($previous == 'meatballs') {
        echo '<li class="nav"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav"><a class="active nav-link" href="meatballs.php">Swedish Meatballs</a></li>
        <li class="nav"><a class="nav-link" href="pancakes.php">American Pancakes</a></li>
        <li class="nav"><a class="nav-link" href="calendar.php">Calendar</a></li>';
        if(!isset($_SESSION['userID'])){
        echo '<li class="nav"><a class="login nav-link" href="login.php">Login</a></li>
        <li class="nav"><a class="signup nav-link" href="signup.php">Signup</a></li>';
        }
        if(isset($_SESSION['userID'])){
        echo '<li class="nav"><p class="logged-user">Logged in user: '.$_SESSION['userUID'].'
        <li class="nav"><a class="login nav-link" href="logout.php">Logout</a></li>';
        }
      }elseif ($previous == 'pancakes') {
        echo '<li class="nav"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav"><a class="nav-link" href="meatballs.php">Swedish Meatballs</a></li>
        <li class="nav"><a class="active nav-link" href="pancakes.php">American Pancakes</a></li>
        <li class="nav"><a class="nav-link" href="calendar.php">Calendar</a></li>';
        if(!isset($_SESSION['userID'])){
        echo '<li class="nav"><a class="login nav-link" href="login.php">Login</a></li>
        <li class="nav"><a class="signup nav-link" href="signup.php">Signup</a></li>';
        }
        if(isset($_SESSION['userID'])){
        echo '<li class="nav"><p class="logged-user">Logged in user: '.$_SESSION['userUID'].'
        <li class="nav"><a class="login nav-link" href="logout.php">Logout</a></li>';
        }
      }elseif ($previous == 'calendar') {
        echo '<li class="nav"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav"><a class="nav-link" href="meatballs.php">Swedish Meatballs</a></li>
        <li class="nav"><a class="nav-link" href="pancakes.php">American Pancakes</a></li>
        <li class="nav"><a class="active nav-link" href="calendar.php">Calendar</a></li>';
        if(!isset($_SESSION['userID'])){
        echo '<li class="nav"><a class="login nav-link" href="login.php">Login</a></li>
        <li class="nav"><a class="signup nav-link" href="signup.php">Signup</a></li>';
        }
        if(isset($_SESSION['userID'])){
        echo '<li class="nav"><p class="logged-user">Logged in user: '.$_SESSION['userUID'].'
        <li class="nav"><a class="login nav-link" href="logout.php">Logout</a></li>';
        }
      }elseif ($previous == 'login') {
        echo '<li class="nav"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav"><a class="nav-link" href="meatballs.php">Swedish Meatballs</a></li>
        <li class="nav"><a class="nav-link" href="pancakes.php">American Pancakes</a></li>
        <li class="nav"><a class="nav-link" href="calendar.php">Calendar</a></li>
        <li class="nav"><a class="active login nav-link" href="login.php">Login</a></li>
        <li class="nav"><a class="signup nav-link" href="signup.php">Signup</a></li>';
        if(isset($_SESSION['userID'])){
        echo '<li class="nav"><p class="logged-user">Logged in user: '.$_SESSION['userUID'].'
        <li class="nav"><a class="login nav-link" href="logout.php">Logout</a></li>';
        }
      }elseif ($previous == 'logout') {
        echo '<li class="nav"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav"><a class="nav-link" href="meatballs.php">Swedish Meatballs</a></li>
        <li class="nav"><a class="nav-link" href="pancakes.php">American Pancakes</a></li>
        <li class="nav"><a class="nav-link" href="calendar.php">Calendar</a></li>
        <li class="nav"><a class="active login nav-link" href="logout.php">Logout</a></li>
        <li class="nav"><p class="logged-user">Logged in user: '.$_SESSION['userUID'].'';
      }elseif ($previous == 'signup') {
        echo '<li class="nav"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav"><a class="nav-link" href="meatballs.php">Swedish Meatballs</a></li>
        <li class="nav"><a class="nav-link" href="pancakes.php">American Pancakes</a></li>
        <li class="nav"><a class="nav-link" href="calendar.php">Calendar</a></li>
        <li class="nav"><a class="login nav-link" href="login.php">Login</a></li>
        <li class="nav"><a class="active signup nav-link" href="signup.php">Signup</a></li>';
        if(isset($_SESSION['userID'])){
        echo '<li class="nav"><p class="logged-user">Logged in user: '.$_SESSION['userUID'].'
        <li class="nav"><a class="login nav-link" href="logout.php">Logout</a></li>';
        }
      }
    ?>
  </ul>
 </div>
