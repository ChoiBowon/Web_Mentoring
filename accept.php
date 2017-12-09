<?php
header("Content-Type:text/html;charset=utf-8");

include("mentoring.php");

if (!$conn)
{
   echo "MySQL 접속 에러 : ";
   echo mysqli_connect_error();
   exit();
}

 $result = mysqli_query($conn, "SELECT * FROM matching");

 //$_SESSION['userId']=$idmentor;
 $idmentor='albert';//로그인된 멘토가 멘토링 신청을 accept
 $idmentee = $_POST['idmentee'];

 $bool=TRUE;

$sql="UPDATE `matching` SET `isMentor`=true WHERE mentor_id='albert' AND mentee_id='lallasweet'";

 $result = mysqli_query($conn,$sql);
if($result){
echo "성공";
}else{

    echo "실패";
}

//header('Location: http://localhost/mymentoring.php');

?>
