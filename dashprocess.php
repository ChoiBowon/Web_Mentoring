<?php
require_once("connect.php");
session_start();
// 게시글 작성 시작!!!!!!!!!!!
if($_POST['select'] == '게시글') { // select태그를 확인하여 어떤 DB에 넣을것인지 변수 설정
  $category = '게시글';
} else if($_POST['select'] == '후기'){
  $category = '후기';
} else {
  $category = '멘토링';
}

  $title = htmlspecialchars($_POST['title']); // 글저장에 태그표시 가능하게
  $content = nl2br(htmlspecialchars($_POST['content'])); // 태그표시가능 + 엔터저장가능

$sql = "INSERT INTO post (`title`,`author`, `created`, `content`, `hits`, `category`) VALUES ('".$title."', '".$_SESSION['userId']."', now(),'".$content."',2,'".$category."');";
 //$sql="INSERT INTO post (title,author,created,content,hits, category) VALUES('".$_POST['title']."','".$_POST['title']."',now(),'".$_POST['content']."','".$_POST['content']."','".$category."')";

 mysqli_query($conn, $sql);


   header("Location:Dashboard.php");
 ?>
