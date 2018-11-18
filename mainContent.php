<?php
  $previous = $_SESSION['previous_location'];
 ?>

 <?php
   if($previous == 'index'){
    echo '<div class="flex-container">
     <div class="flex-text">
      <h2>Welcome to Tasty Recipes - your site for finding new
        favourite recipes and planning your day to day food experience</h2>
      <h3>Make sure to try out our new calendar for a great overview of your planned meals</h3>
      <h4>Notice: The site is under construction. More recipes and functionality will soon be added</h4>
     </div>
     </div>';
   }

   elseif ($previous == 'meatballs') {
     include 'commentSystem.php';
     include "comment.php";
     echo "<div class='description-container'>

       <div class='description text'>
         <p>This is the number one swedish classic! A dish loved by
         all and spread across the world by IKEA. Serve with boiled or mashed potatoes.</p>
       </div>

       <div class='description pic'>
         <img class='picture' src='pics/meatballs.jpg' alt='Meatballs picture'>
       </div>

       <div class='description ingredients'>
         <h1 class='headline'>Ingredients</h1>
         <h2 class='subline'>Meatballs</h2>
         <ul class='recipe-list'>
             <li class='ing-li'>1 1/2 L milk</li>
             <li class='ing-li'>5 tbsp breadcrumbs</li>
             <li class='ing-li'>500 g minced meat</li>
             <li class='ing-li'>1/2 onion</li>
             <li class='ing-li'>1 egg</li>
             <li class='ing-li'>1 ts salt</li>
             <li class='ing-li'>1 pinch ground black pepper</li>
             <li class='ing-li'>1/2 ts sugar</li>
             <li class='ing-li'>butter</li>
             <li class='ing-li'>1 kg solid potatoes</li>
             <li class='ing-li'>1 jar lingonberry jam</li>
             <li class='ing-li'>1 jar pickled cucumber</li>
           </ul>
           <h2 class='subline'>Sauce</h2>
           <ul class='recipe-list'>
               <li class='ing-li'>2 dl double cream</li>
               <li class='ing-li'>1 tbsp cornstarch</li>
               <li class='ing-li'>2 1/2 dl water</li>
               <li class='ing-li'>1 meat broth cube</li>
           </ul>
       </div>

       <div class='description instructions'>
         <h1 class='headline'>Instructions</h1>
         <ul class='recipe-list'>
             <li class='ins-li'>Mix milk and breadcrumbs in a bowl and leave it to swell for 10 minutes.</li>
             <li class='ins-li'>Add minced meat, chopped onion, egg, salt, black pepper and sugar to the mixture and use
                 your hands to mix thoroughly.</li>
             <li class='ins-li'>Wet your hands with cold water and roll the meatballs of desired size using your hands.</li>
             <li class='ins-li'>Boil the potatoes in salted water.</li>
             <li class='ins-li'>Heat butter in a pan and fry the meatballs for 5 minutes on medium heat.</li>
             <li class='ins-li'>Mix double cream and cornstarch and add to the pan along with water and broth and let simmer on
             low heat for 5 minutes.</li>
             <li class='ins-li'>Season with salt and pepper to your liking.</li>
             <li class='ins-li'>Serve the meatballs with potatoes, lingonberry jam and pickled cucumber.</li>
         </ul>
      </div>";
       meatballComment();
       getComments($conn);
   }

   elseif ($previous == 'pancakes') {
     include 'commentSystem.php';
     include "comment.php";
     echo '<div class="description-container">

       <div class="description text">
         <p>You have found the true american hero! This simple but irresistible
         dish is bound to leave you wanting more, and more, and more. Best thing
         is that it can be enjoyed as breakfast, lunch, dinner and dessert!</p>
       </div>

       <div class="description pic">
         <img class="picture" src="pics/pancakes.jpg" alt="Pancake picture">
       </div>

       <div class="description ingredients">
         <h1 class="headline">Ingredients</h1>
         <h2 class="subline">American pancakes</h2>
         <ul class="recipe-list">
           <li class="ing-li">2 1/2 dl flour</li>
           <li class="ing-li">2 ts baking powder</li>
           <li class="ing-li">2 tbsp sugar</li>
           <li class="ing-li">1 pinch salt</li>
           <li class="ing-li">2 1/2 milk</li>
           <li class="ing-li">2 tbsp melted butter</li>
           <li class="ing-li">1 egg</li>
           <li class="ing-li">extra butter for frying</li>
         </ul>
         <h2 class="subline">Serve with</h2>
         <ul class="recipe-list">
           <li class="ing-li">icing sugar</li>
           <li class="ing-li">maple syrup</li>
           <li class="ing-li">mixed fresh berries</li>
         </ul>
       </div>

       <div class="description instructions">
         <h1 class="headline">Instructions</h1>
         <ul class="recipe-list">
           <li class="ins-li">Mix all the dry ingredients in a bowl.</li>
           <li class="ins-li">Add the milk and melted butter while siring, add the egg and keep stir until the batter is smooth. </li>
           <li class="ins-li">Put ca 1 tbsp of batter in a pan and fry for 1 1/2 minutes on each side, and repeat until all batter is used.</li>
           <li class="ins-li">Sprinkle the icing sugar on the pancakes and serve with maple syrup and berries or other condiments you prefer.</li>
         </ul>
       </div>';
     pancakeComment();
     getPancakeComments($conn);
   }

   elseif ($previous == 'calendar') {
     echo '<div class="calendar-grid">
       <div class="calendar-header">
         <div>Monday</div>
         <div>Tuesday</div>
         <div>Wednesday</div>
         <div>Thursday</div>
         <div>Friday</div>
         <div>Saturday</div>
         <div>Sunday</div>
       </div>
       <div class="calendar-week">
         <div class="calendar-day day">1</div>
         <div class="calendar-day day">2</div>
         <div class="calendar-day day">3</div>
         <div class="calendar-day booked-day">
           <div class="number">4</div>
           <div class="image">
             <a class="calendar-link" href="pancakes.html">
               <img class="pancake-picture" src="pics/pancakes.jpg" alt="pancake picture">
             </a>
           </div>
         <div class="food-text">Pancakes</div>
         </div>
         <div class="calendar-day day">5</div>
         <div class="calendar-day day">6</div>
         <div class="calendar-day day">7</div>
       </div>
       <div class="calendar-week">
         <div class="calendar-day day">8</div>
         <div class="calendar-day day">9</div>
         <div class="calendar-day day">10</div>
         <div class="calendar-day day">11</div>
         <div class="calendar-day day">12</div>
         <div class="calendar-day day">13</div>
         <div class="calendar-day day">14</div>
       </div>
       <div class="calendar-week">
         <div class="calendar-day day">15</div>
         <div class="calendar-day day">16</div>
         <div class="calendar-day day">17</div>
         <div class="calendar-day day">18</div>
         <div class="calendar-day day">19</div>
         <div class="calendar-day day">20</div>
         <div class="calendar-day day">21</div>
       </div>
       <div class="calendar-week">
         <div class="calendar-day booked-day">
           <div class="number">22</div>
           <div class="image">
             <a class="calendar-link" href="meatballs.html">
               <img class="picture" src="pics/meatballs.jpg" alt="Meatballs picture">
             </a>
           </div>
         <div class="food-text">Meatballs</div>
         </div>
         <div class="calendar-day day">23</div>
         <div class="calendar-day day">24</div>
         <div class="calendar-day day">25</div>
         <div class="calendar-day day">26</div>
         <div class="calendar-day day">27</div>
         <div class="calendar-day day">28</div>
       </div>
       <div class="calendar-week last-week">
         <div class="calendar-day day">29</div>
         <div class="calendar-day day">30</div>
         <div class="calendar-day day">31</div>
         <div class="calendar-day day">1</div>
         <div class="calendar-day day">2</div>
         <div class="calendar-day day">3</div>
         <div class="calendar-day day">4</div>
       </div>
     </div>';
   }

   elseif($previous == 'login'){
      echo '<div class="container">
      <div class="form-content">
        <form action="loginSystem.php" method="post">
          <p>Enter your username and password</p>
           <input type="text" name="usn" placeholder="Enter username">
           <input type="password" name="pwd" placeholder="Enter password">
           <button type="submit" name="login-sub">Login</button>
         </form>
     </div>
     </div>';
   }

   elseif($previous == 'logout'){
      echo '<div class="container">
      <div class="form-content">
        <form action="logoutSystem.php" method="post">
          <p>Thanks for your vist, welcome back!</p>
           <button type="submit" name="logout-sub">Logout</button>
         </form>
     </div>
     </div>';
   }

   elseif($previous == 'signup'){
      echo '<div class="container">
      <div class="form-content">
          <form action="signupSystem.php" method="post">
          <p>Enter your desired username and password</p>
          <input type="text" name="usn" placeholder="Enter username">
          <input type="password" name="pwd" placeholder="Enter password">
          <input type="password" name="pwd-repeat" placeholder="Repeat password">
          <button type="submit" name="signup-sub">Signup</button>
         </form>
     </div>
     </div>';
   }
 ?>
