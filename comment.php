<?php
require_once("connect.php");
session_start();

$bno = $_GET['idd'];
// $result_comment = mysqli_query($conn,'SELECT * FROM comment where post_no = '.$bno.'');
$comment = $_POST['comment']; // 태그표시가능 + 엔터저장가능


$sql = "INSERT INTO comment (`author`, `created`, `content`, `post_no`) VALUES ('".$_SESSION['userId']."', now(),'".$comment."','".$bno."');";
 //$sql="INSERT INTO post (title,author,created,content,hits, category) VALUES('".$_POST['title']."','".$_POST['title']."',now(),'".$_POST['content']."','".$_POST['content']."','".$category."')";

 mysqli_query($conn, $sql);


   header("Location:Dashboard.php");
 ?>
