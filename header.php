<?php
$previous = $_SESSION['previous_location'];
date_default_timezone_set('Europe/Stockholm');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>

   <link rel="stylesheet" type="text/css" href="cssFiles/reset.css">
   <?php
     if($previous == 'index'){
         echo '<link rel="stylesheet" type="text/css" href="cssFiles/indexStyle.css">
         <title>Tasty Recipes - Start</title>';
     }
     elseif ($previous == 'meatballs' || $previous == 'pancakes') {
       echo '<link rel="stylesheet" type="text/css" href="cssFiles/recipe.css">';
       if($previous == 'meatballs'){
         echo '<title>Swedish Meatballs Recipe</title>';
       }
       else{
         echo '<title>American Pancakes Recipe</title>';
       }
     }
     elseif($previous == 'calendar'){
       echo '<link rel="stylesheet" type="text/css" href="cssFiles/calendar.css">
       <title>Tasty Recipes - Start</title>';
     }
     elseif($previous == 'login' || $previous == 'logout' || $previous == 'signup'){
       echo '<link rel="stylesheet" type="text/css" href="cssFiles/formStyle.css">';
       if($previous == 'login'){
         echo '<title>Login</title>';
       }
       elseif($previous == 'logout'){
         echo '<title>Logout</title>';
       }
       elseif($previous == 'signup'){
         echo '<title>Signup</title>';
       }
     }
   ?>
   <link rel="stylesheet" type="text/css" href="cssFiles/navigation_bar.css">
   <link rel="stylesheet" type="text/css" href="cssFiles/header.css">
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Fondamento" rel="stylesheet">
   <meta charset="UTF-8">

 </head>
