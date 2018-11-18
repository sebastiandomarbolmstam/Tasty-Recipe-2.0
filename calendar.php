<?php
  session_start();
  $_SESSION['previous_location'] = 'calendar';
?>

<body>
  <?php include "header.php"; ?>
  <?php include "pageTop.php"; ?>
  <?php include "navigationBar.php" ?>
  <?php include "mainContent.php" ?>
</body>
