<?php
require_once("connect.php");
   //세션의 시작
    // form에서 입력받은 id와 password
    $userId = $_POST['userID'];
    $pass = $_POST['password'];

 $sql="SELECT id FROM member WHERE id='$userId' and password='$pass'";
 $result = mysqli_query($conn, $sql);

 $count=mysqli_num_rows($result);

 if($count==1)  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미합니다.
   {
       session_start();
       //session_register("userId");
       $_SESSION['userId']=$userId;


       header("location: Main2_Logout.php");
   }
   else
   {
       $error="Your Login Name or Password is invalid";

  //  echo "<script>alert($error);</script>";

       header("location:Main.php");

      //  로그인 안됬다는 알림창 띄워주기
   }


?>
