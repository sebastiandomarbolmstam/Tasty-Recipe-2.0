<?php
if(isset($_POST['signup-sub'])){

  require 'dbh.php';

  $username = $_POST['usn'];
  $password = $_POST['pwd'];
  $pass_repeat = $_POST['pwd-repeat'];

  if(empty($username) || empty($password) || empty($pass_repeat)){
    header("location:../SeminarTwo/signup.php?error=blankfield");
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username) ) {
    header("location:../SeminarTwo/signup.php?error=invalidform");
    exit();
  }

  elseif (!$password == $pass_repeat) {
    header("location:../SeminarTwo/signup.php?error=passwordmissmatch");
    exit();
  }

  else {
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("location:../SeminarTwo/signup.php?error=sql");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0){
        header("location:../SeminarTwo/signup.php?error=sql");
        exit();
      }

      else {
        $sql = "INSERT INTO users (uidUsers, pwdUsers) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("location:../SeminarTwo/signup.php?error=sql");
          exit();
        }
        else {
          $hash = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "ss", $username, $hash);
          mysqli_stmt_execute($stmt);
          header("location:../SeminarTwo/index.php?signedup=true");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysql_close($conn);
}
else{
  header("location:../SeminarTwo/signup.php?error=sql");
  exit();
}
