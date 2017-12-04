<?php
require_once("connect.php");


// 회원가입 시작
 $memberId = $_POST['Id'];
 $memberPw = $_POST['Password'];
 $memberPw2 = $_POST['Password2'];
 $memberName = $_POST['Name'];
 $memberRole = $_POST['Role'];
 $memberPhoneNum = $_POST['PhoneNum'];
 $memberEmail = $_POST['Email'];
 $memberDept = $_POST['Department'];
 $memberYear= $_POST['Year'];
 $memberMajor = $_POST['Major'];

 //PHP에서 유효성 재확인

 //아이디 중복검사.
 $sql = "SELECT * FROM member WHERE id = '{$memberId}'";
 $res = $conn->query($sql);
 if($res->num_rows >= 1){
     echo '이미 존재하는 아이디가 있습니다.';
     exit;
 }

 //비밀번호 일치하는지 확인
 if($memberPw !== $memberPw2){
     echo '비밀번호가 일치하지 않습니다.';
     exit;
 }else{
     //비밀번호를 암호화 처리.
    //  $memberPw = md5($memberPw);
 }

 //이름이 빈 값이 아닌지
 if($memberName == ''){
     echo '이름의 값이 없습니다.';
 }
 //역할(멘토/멘티)이 빈값이 아닌지
 if($memberRole == ''){
     echo '멘토/멘티의 값이 없습니다.';
 }
 //전화번호가 빈값이 아닌지
 if($memberPhoneNum == ''){
     echo '전화번호의 값이 없습니다.';
 }

 //소속이 빈 값이 아닌지
 if($memberDept == ''){
     echo '소속의 값이 없습니다.';
 }
 //학년이 빈값이 아닌지
 if($memberYear == ''){
     echo '직급/학년의 값이 없습니다.';
 }
 //전공이 빈값이 아닌지
 if($memberMajor == ''){
     echo '학과/전공의 값이 없습니다.';
 }

 //이제부터 넣기 시작
 //$sql = "INSERT INTO member VALUES('{$memberId}','{$memberPw}','{$memberName}','{$memberRole}','{$memberPhoneNum}','{$memberEmail}','{$memberDept}','{$memberYear}','{$memberMajor}')";
 $sql="INSERT INTO member (id,password,name, email,phonenumber, department, major, year, role) VALUES('".$_POST['Id']."','".$_POST['Password']."','".$_POST['Name']."','".$_POST['Email']."','".$_POST['PhoneNum']."','".$_POST['Department']."','"
 .$_POST['Major']."','".$_POST['Year']."','".$_POST['Role']."')";

   $result=mysqli_query($conn, $sql);
 //if($dbConnect->query($sql)){
  //   echo '회원가입 성공';
// }
//회원가입 끝

// 게시글 작성 시작!!!!!!!!!!!
if($_POST['select'] == '게시글') { // select태그를 확인하여 어떤 DB에 넣을것인지 변수 설정
  $category = '게시글';
} else if($_POST['select'] == '후기'){
  $category = '후기';
} else {
  $category = '답글';
}

  $title = htmlspecialchars($_POST['title']); // 글저장에 태그표시 가능하게
  $content = nl2br(htmlspecialchars($_POST['content'])); // 태그표시가능 + 엔터저장가능


$sql="INSERT INTO post (title,author,created,content,hits, category) VALUES('".$title."','".$contnet."',now(),'".$content."','".$content."','".$category."')";

$result_dash=mysqli_query($conn, $sql);


   header("Location:Main.php");
 ?>
