<?php

function pancakeComment(){
  if(isset($_SESSION['userID'])){
    echo "<div class='comment-container'><ul>
    <li><h2 class='subline'>Please make sure to comment on the recipie!</h2></li>
    <form action='commentSystem.php' method='POST'>
     <input type='hidden' name='uid' value='".$_SESSION['userUID']."'>
     <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
     <li class='commentText'><textarea name='message' placeholder='Message..'></textarea></li>
     <li class='commentButton'><button type='submit' name='pancakePost'>Post</button></li>

    </form></ul></div>";
  }else{
    echo "<div class='comment-container'>
    <h2 class='subline'>Sign up and login to leave a comment!</h2>
    </div>";
  }
}

function meatballComment(){
  if(isset($_SESSION['userID'])){
    echo "<div class='comment-container'><ul>
    <li><h2 class='subline'>Please make sure to comment on the recipie!</h2></li>
    <form action='commentSystem.php' method='POST'>
     <input type='hidden' name='uid' value='".$_SESSION['userUID']."'>
     <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
     <li class='commentText'><textarea name='message' placeholder='Message..'></textarea></li>
     <li class='commentButton'><button type='submit' name='meatballPost'>Post</button></li>
    </form></ul></div>";
  }else{
    echo "<div class='comment-container'>
      <h2 class='subline'>Sign up and login to leave a comment!</h2>
    </div>";
  }
}
?>
