<?php
require_once("connect.php");
session_start();

 $author = $_SESSION['userId'];

$bno_del = $_GET['idd'];
$result_del = mysqli_query($conn,'SELECT * FROM post where post_no = '.$bno_del.'');
$del = mysqli_fetch_array($result_del);

if(empty($_GET['idd']) === true){
  //아무것도 삭제를 누르지 않았을 때
}else if($_GET['idd'] == $del['post_no'] ){

  if($author == $del['author']){   //글 작성자와 로그인한 사용자가 동일하다면 글 삭제 가능
    $sql= mysqli_query($conn, "DELETE FROM post WHERE post_no = ".$_GET['idd']."");
    header("location:Dashboard.php");

  }else{  //로그인 정보와 틀리면 알림 창
    echo ("<script>alert('삭제할 수 있는 권한이 없습니다.');history.go(-1);</script>");
    exit;
  }

}

 ?>
