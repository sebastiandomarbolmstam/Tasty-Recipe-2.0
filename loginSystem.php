<?php

if(isset($_POST['login-sub'])){

  require 'dbh.php';

  $username = $_POST['usn'];
  $password = $_POST['pwd'];

  if(empty($username) || empty($password)){
    header("Location: ../SeminarTwo/login.php?error=blankfield");
    exit();
  }

  else {
    $sql = "SELECT * FROM users WHERE uidUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../SeminarTwo/login.php?error=sql");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $pwdCheck = password_verify($password, $row['pwdUsers']);
        if($pwdCheck == false){
          header("Location: ../SeminarTwo/login.php?error=invalidpassword");
          exit();
        }
        elseif ($pwdCheck == true) {
          session_start();
          $_SESSION['userID'] = $row['idUsers'];
          $_SESSION['userUID'] = $row['uidUsers'];
          header("location:../SeminarTwo/index.php?loggedin=true");
          exit();
        }
        else {
          header("Location: ../SeminarTwo/login.php?error=sql");
          exit();
        }
      }
      else {
        header("Location: ../SeminarTwo/login.php?error=sql");
        exit();
      }
    }
  }
}

else {
  header("Location: ../SeminarTwo/login.php?error=sql");
  exit();
}
