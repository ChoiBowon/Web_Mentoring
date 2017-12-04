<?php
header("Content-Type:text/html;charset=utf-8");

require_once("connect.php");
session_start();

if (!$conn)
{
   echo "MySQL 접속 에러 : ";
   echo mysqli_connect_error();
   exit();
}

  $result = mysqli_query($conn, "SELECT * FROM apply");
//  $postnum=null;
  $name = $_POST['name'];
  $content = $_POST['content'];
  $job = $_POST['job'];
  $author =$_SESSION['userId'];//멘토의 로그인 정보

  $sql = "INSERT INTO apply (`name`,`author`, `created`, `content`,`job`) VALUES ('".$name."', '".$author."', now(),'".$content."','".$job."');";

//  $sql = "insert into apply values";
//  $sql = $sql."(null,'$name', '$author','$content')";
  $conn -> query($sql);

  //echo $name,$author,$content;

header("Location:DashBoard.php");


?>
