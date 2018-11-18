<?php
  include "dbh.php";
  if(isset($_POST['meatballPost'])){
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comments (uid, date, message)
    VALUES ('$uid', '$date', '$message')";
    $result = mysqli_query($conn, $sql);
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
  }
  elseif(isset($_POST['pancakePost'])){
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO pancakeComments (uid, date, message)
    VALUES ('$uid', '$date', '$message')";
    $result = mysqli_query($conn, $sql);
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
  }

function getComments($conn){
  $sqlget = "SELECT * FROM comments";
  $resultget = mysqli_query($conn, $sqlget);
  while($row = mysqli_fetch_assoc($resultget)){
    echo "<div class='comment-box'><ul><li class='username'>";
    echo $row['uid']."</li><li class='date'>";
    echo $row['date']."</li><li class='message'>";
    echo $row['message']."</li><li>";
    if($_SESSION['userUID'] == $row['uid']){
      echo "<form class='deleteform' method='POST' action='delete.php'>
        <input type='hidden' name='cid' value='".$row['cid']."'>
        <button type='submit' name='MeatballCommentDelete'>Delete</button>
        </form></li></ul></div>";
      }else{
        echo '</div>';
      }
  }
  echo '</div>';
}

function getPancakeComments($conn){
  $sqlget = "SELECT * FROM pancakeComments";
    $resultget = mysqli_query($conn, $sqlget);
    while($row = mysqli_fetch_assoc($resultget)){
      echo "<div class='comment-box'><ul><li class='username'>";
      echo $row['uid']."</li><li class='date'>";
      echo $row['date']."</li><li class='message'>";
      echo $row['message']."</li><li>";
      if($_SESSION['userUID'] == $row['uid']){
        echo "<form class='deleteform' method='POST' action='delete.php'>
          <input type='hidden' name='cid' value='".$row['cid']."'>
          <button type='submit' name='PancakeCommentDelete'>Delete</button>
          </form></li></ul></div>";
      }else{
        echo '</div>';
      }
    }
    echo '</div>';
  }
 ?>
