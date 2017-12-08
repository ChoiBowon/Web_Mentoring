<?php

require_once("connect.php");

//if($role='mentee') mentee인경우
$id=$_SESSION['userId'];
$sql = 'SELECT * FROM matching WHERE mentee_id="'.$id.'"';
$result = mysqli_query($conn, $sql);

if( $result ){
// success! check results
while( $row = mysqli_fetch_assoc( $result ) ){
if($row['isMentor']=='1')
{echo $row['mentor_id'];}
}
}
else{
// failure! check for errors and do something else
}

$result = mysqli_query($conn, $sql);

//if(role='mentor') mentor인 경우
/*$id='albert';//$id=userId
$sql = 'SELECT mentee_id,isMentor FROM matching WHERE mentee_id="'.$id.'"';
$result = mysqli_query($conn, $sql);
if( $result ){
// success! check results
while( $row = mysqli_fetch_assoc( $result ) ){
if($row['isMentor']=='1')
{echo $row['mentee_id'];}
}
}
else{
// failure! check for errors and do something else
}

$result = mysqli_query($conn, $sql);

*/

?>
