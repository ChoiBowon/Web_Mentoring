<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
require_once("connect.php");

if (!$conn)
{
   echo "MySQL 접속 에러 : ";
   echo mysqli_connect_error();
   exit();
}

  $result = mysqli_query($conn, "SELECT * FROM matching");

  $idmentor = $_GET['menteeapply'];//멘티가 신청 버튼을 누른 멘토
  $idmentee = $_SESSION['userId'];//멘티-로그인정보
  $null='False'; //accept 하면 true 로

  $sql = "INSERT INTO matching (`mentor_id`,`mentee_id`, `isMentor`) VALUES ('".$idmentor."', '".$idmentee."','".$null."');";

  $conn -> query($sql);

//echo $idmentor,$idmentee,$null;

header("Location:Mentoring.php");

?>
