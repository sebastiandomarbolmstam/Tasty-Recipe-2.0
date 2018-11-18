<?php
  $previous = $_SESSION['previous_location'];
?>

<div class="flex-header">
<?php
  if($previous == 'index'){
    echo '<h1 id="title">Tasty Recipes</h1>';
  }elseif($previous == 'meatballs'){
    echo '<h1 id="title">Swedish Meatballs</h1>';
  }elseif($previous == 'pancakes'){
    echo '<h1 id="title">American Pancakes</h1>';
  }elseif($previous == 'calendar'){
    echo '<h1 id="title">Calendar</h1>';
  }elseif($previous == 'login'){
    echo '<h1 id="title">Login</h1>';
  }elseif($previous == 'logout'){
    echo '<h1 id="title">Logout</h1>';
  }elseif($previous == 'signup'){
    echo '<h1 id="title">Signup</h1>';
  }
 ?>
 </div>
