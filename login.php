<?php
require_once("connect.php");

    // form에서 입력받은 id와 password
    $userId = $_POST['userID'];
    $pass = $_POST['password'];

 $sql="SELECT id, name FROM member WHERE id='$userId' and password='$pass'";
 $result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc( $result );

 $count=mysqli_num_rows($result);

 if($count==1)  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미
   {
       session_start();
      //  session_write_close();
       //session_register("userId");
       $_SESSION['userId']=$userId;
       $_SESSION['name']=$row['name'];
       $_SESSION['role']=$role;

       header("location: Main2_Logout.php"); //로그인 성공 시 Main2_Logout.php 로 이동
   }
   else
   {
       $error="Your Login Name or Password is invalid";
      //로그인 실패 알림 창
       echo ("<script>alert('로그인 정보가 없습니다.');history.go(-1);</script>");
      exit;
       header("location:Main.php");
   }


?>
