<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
require_once("connect.php");

 $result = mysqli_query($conn, "SELECT * FROM matching");

 //$_SESSION['userId']=$idmentor;
 $idmentor=$_SESSION['name'];//로그인된 멘토가 멘토링 신청을 accept
 $idmentee = $_POST['idmentee'];

 $bool=TRUE;
 $sql= mysqli_query($conn, "UPDATE matching SET isMentor='True' WHERE mentor_id='".$idmentor."' and mentee_id='".$idmentee."'");

 echo ("<script>alert('매칭되었습니다!');history.go(-1);</script>");

 header("Location:Mentoring.php");

?>
