<?php
include "dbh.php";
$cid = $_POST['cid'];
if(isset($_POST['MeatballCommentDelete'])){
  $sql = "DELETE FROM comments WHERE cid='$cid'";
}elseif(isset($_POST['PancakeCommentDelete'])){
  $sql = "DELETE FROM pancakeComments WHERE cid='$cid'";
}
$result = mysqli_query($conn, $sql);
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;


 ?>
