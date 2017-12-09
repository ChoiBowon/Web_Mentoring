<?php
require_once("connect.php");
$result = mysqli_query($conn,'SELECT*FROM apply');
$re = mysqli_query($conn, 'SELECT*FROM post');

session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
      <title>Women in Tech</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
  </head>
  <body>
  	<!-- Header Section Start -->
    <header id="hero-area">
     <div class="overlay"></div>
      <nav class="navbar navbar-toggleable-sm fixed-top navbar-light bg-faded">
        <div class="container">
          <a class="navbar-brand" href="Main2_Logout.php"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon-menu"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mentors">Mentors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#board">Board</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mymentoring">MyMentoring</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-itm">
              <?php

              echo "<a class='nav-link'>".$_SESSION['userId'].'님 반갑습니다!'."</a>";

               ?>
             </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
              <div class="item active">
                <div class="contents text-center">
                  <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Memtoring</h1>
                  <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">나의 멘토, 멘티와 새로운 경험을 함께 해보세요.<br> </p>
                  <a rel="nofollow" href="#support" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">My mentoring 정보</a>
                  <!-- <a rel="nofollow" href="#mentor" class="btn btn-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">멘토링 신청하기</a> -->
                  <div class="banner_bottom_btn wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <a href="#about" class="js-target-scroll"><i class="icon-mouse"></i></a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

    </header>
    <!-- Header Section End -->

      <!-- 멘토 목록 -->
    <section id=mentors class="team-area section">
        <div class="container">
          <div class="section-header">
            <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Choose your prefer Mentor!</h3>
            <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Mentors</h2>
          </div>
          <div class="row">
                <?php
                while( $row = mysqli_fetch_assoc($result)){
                //      if(empty($_GET['category']) == true) {
                echo "  <div class='col-md-4 col-sm-6 col-xs-12'>";
                echo "  <div class='single-team wow fadeInLeft' data-wow-duration='1000ms' data-wow-delay='400ms'>";
                echo "<div class='team-content'>";
                echo "<h4 class='tem-member'>".$row['name']."</h4>";
                echo "<h6>".$row['job']."</h6>";
                echo "<p>".$row['content']."</p>";
                echo "<ul class='team-social'>
                    <li><form action='apply.php' method='get'>
                    <input type='submit' value='Apply'rel='nofollow' class='btn btn-common wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='400ms'>
                    <input type='hidden' name='menteeapply' value='".$row['name']."'></form>
                    </li>
                    </ul>";
                    echo "</div>";

                    echo "</div>";
                    echo "</div>";
                }
                 ?>
                 <br>
         		</form>
          </div>
        </div>
       </div>
    </section>
    <!-- 멘토 목록 End  -->


    <!-- Board Section Start 게시판 -->
    <section id ="board" class="services section">
      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Board</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Board</h2>
        </div>
        <?php
        echo "<table class='table table-striped custab'>
        <thead>
            <tr>
            <th width=80 style='color:#fff'>  Post</th>
            <th style='color:#fff'>Category</th>
            <th style='color:#fff'>Title</th>
            <th style='color:#fff'>Author</th>
            <th style='color:#fff'>Date</th>
            <th style='color:#fff'>Hits</th>
            </tr>
        </thead>";

  // post db 에서 게시글 쿼리 해옴
    $result_post = mysqli_query($conn,'SELECT*FROM post WHERE category = "멘토링"');
        while( $row = mysqli_fetch_assoc($result_post)){
          echo"<tbody>";
          echo "<tr>";
          echo "<td width=80 align=center style='color:#fff' >".$row['post_no']."</td>";
          echo "<td width=150 style='color:#fff'>".$row['category']."</td>";
          echo "<td width=550 style='color:#fff'>";
          echo "<a href='Mentoring.php?idd=".$row['post_no']."'>".$row['title']."</a>";
          echo "</td>";
          echo "<td width=100 style='color:#fff'>".$row['author']."</td>";
          echo "<td style='color:#fff'>".$row['created']."</td>";
          echo "<td style='color:#fff'>".$row['hits']."</td>";
          echo "</tr>";
          echo "</tbody>";
        }
        echo"</table>";
        echo"<br>";
        ?>

        <!-- 게시판 글 클릭시 -->
        <?php
        if(empty($_GET['idd'])===false){   // 어떤 글이라도 클릭했을 시 idd 를 받아옴
          $bno = $_GET['idd'];
          $result_post = mysqli_query($conn,'SELECT * FROM post where post_no = '.$bno.'');
          $result_comment = mysqli_query($conn,'SELECT * FROM comment where post_no = '.$bno.'');
          $board = mysqli_fetch_array($result_post);
        }

        if(empty($_GET['idd']) === true || $_GET['idd'] == 100) {   //아무런 글 보기를 선택하지 않았거나, 글을 확인하는 도중 글작성을 누른 경우
          echo "<form action='dashprocess.php' method='post'>
            <div class='form-group'>
              <select name='select' class='form-control'>
                <option>게시글</option>
                <option>후기</option>
                <option>답글</option>
              </select>
              <br>
              <label for='title' style='color:#fff; font-size:20px' >Title</label>
              <input name='title' class='form-control'  type='text' id='title'><br>
              <label for='content' style='color:#fff; font-size:20px' >Content</label>
              <textarea name='content' class='form-control' id='content' rows='8' cols='80'></textarea><br>
              <input class='btn btn-common wow fadeInUp'  type='submit' value='Submit'>
            </div>
          </form>";
        }else if($_GET['idd'] == $board['post_no'] ){  // 글을 클릭한 경우

          echo "<table class='table table-striped custab' >";
          echo "<tr><td  colspan=4 align=center  bgcolor=#999999 >
        <font color=white size=4px >Board</font></td></tr>";
          echo "<tr>
          <td width=50 bgcolor=white>Category</td>
          <td width=240 style='color:#fff'>".$board['category']."</td>";
          echo "<td width=50 bgcolor=white>Author</td>
          <td width=240 style='color:#fff'>".$board['author']."</td></tr>";
          echo "<tr>
          <td width=50 bgcolor=white>Dates</td>
          <td width=240 style='color:#fff'>".$board['created']."</td>";
          echo "<td width=50 bgcolor=white>Hits</td>
          <td width=240 style='color:#fff'>".$board['hits']."</td></tr>";
          // 제목이랑 내용
          echo "<tr>
          <td width=50 bgcolor=#999999  align=center><font color=white size=4px>Title</font></td>
          <td colspan=3 width=240 style='color:#fff' >".$board['title']."</td></tr>";
          echo"<tr>
          <td width=50 height=250 bgcolor=#999999 align=center><font color=white size=4px>Content</font></td>
          <td colspan=3 style='color:#fff'>".$board['content']."</td>
          </tr>";

          //댓글 보여주기
          echo"<tr>";
          while( $row = mysqli_fetch_assoc($result_comment)){
            echo "<tr>
            <td width=50 bgcolor=white>Comment</td>
            <td width=240 style='color:#fff'>".$row['content']."</td>";
            echo "<td style='color:#fff' align=right>".$row['author']."</td>
            <td width=120 style='color:#fff' align=right>".$row['created']."</td></tr>";
          }
          echo "</tr>";

          //목록보기, 글쓰기, 삭제 버튼
          echo "<tr><table width =100%><tr>
          <td colsapn=4 align=right><a href=#board><font color=white>[ 목록보기 ]</font></a>";
          // 삭제 버튼 클릭시 DeletePost.php 에서 처리한다
          echo "<a href='DeletePost.php?idd=".$board['post_no']."'><font color=white>[ 삭제 ]</font></a>";
          echo "<a href='Mentroing.php?idd=100'><font color=white>[ 글쓰기 ]</font></a></td></tr>";
          echo "</td>
          </tr>";
          echo "</table>";

          //댓글 입력
          echo "<form action='comment.php?idd=".$board['post_no']."' method='post'>
            <div class='form-group'>
              <br>
              <label for='content' style='color:#fff; font-size:20px' >Comment</label>
              <textarea name='comment' class='form-control' id='comment' rows='4' cols='80'></textarea><br>
              <input class='btn btn-common wow fadeInUp'  type='submit' value='Submit'>
            </div>
          </form>";


          //조회수 업데이트
          $result_post = mysqli_query($conn,'UPDATE post SET hits=hits+1 WHERE post_no = '.$bno.'');

        }else {

          //첫 화면에서 넘어갈 시 조회수 업데이트
          $result = mysqli_query($conn,'UPDATE post SET hits=hits+1 WHERE post_no = '.$bno.'');

        }
        ?>

      </div>
    </section>


    <!-- Support Section 멘토 지원하기-->
    <section id="mymentoring" class="team-area section">
      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Your Mantor or Mentee</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">My Mentroing 정보</h2>
        </div>
            <div class="service-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="support">

                <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="single-team wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">
                    <div class="team-content">
                      <?php

                      $username = $_SESSION['name'];
                      $userId = $_SESSION['userId'];

                      //  $result_apply= mysqli_query($conn, 'SELECT * FROM matching WHERE mentor_id="'.$username.'" and isMentor="False"');
                       $result_apply= mysqli_query($conn, 'SELECT * FROM matching WHERE mentor_id="이정민" and isMentor="False"');

                      $row = mysqli_fetch_assoc( $result_apply );

                      if( $row != NULL){
                      // success! check results

                      echo "<table>";
                      while( $row ){

                      echo "<tr>";
                      echo"<td width=900><h4 class='tem-member'>".$row['mentee_id']."</h4></td>";
                      echo"<td>";
                      echo'<form action="accept.php" method="post">';
                      echo "<input type='submit' value='accept'rel='nofollow' class='btn btn-common wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='400ms'>";
                      echo'<input type="hidden" name="idmentee" value="'.$row['mentee_id'].'">';
              		echo"</form>";
                      echo"</td>";
                      echo"</tr>";
                      $row = mysqli_fetch_assoc( $result_apply );

                    }
                    echo "</table>";
                  }else{
                    $result= mysqli_query($conn, 'SELECT * FROM matching WHERE mentee_id="'.$userId.'" and isMentor="True"');

                    $row = mysqli_fetch_assoc( $result );

                    if($row != NULL){
                      echo "<table>";

                      while( $row ){

                      echo "<tr>";
                      echo"<td width=200 style='color:#000' align=center>내 멘토는</h4></td><td width=600><h4 class='tem-member'>".$row['mentor_id']."</td>";

                      echo"</tr>";
                      $row = mysqli_fetch_assoc( $result );

                    }
                    echo "</table>";
                    }
                      }

                      ?>

                    </div>
                  </div>

              </div>
              </div>
            </div>
    </section>
    <!-- 멘토 지원하기 Section Ends -->


    <!-- Contact Icon Start -->
    <div id=contact class="section contact-icon">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="box-icon wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
              <div class="icon icon-primary">
                <i class="icon-map"></i>
              </div>
              <p>
                Avenue C, Block.04, DW, USA
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="box-icon wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms">
              <div class="icon icon-secondary">
                <i class="icon-envelope"></i>
              </div>
              <p>
                info@yourdamainname.com
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="box-icon wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="700ms">
              <div class="icon icon-tertiary">
                <i class="icon-phone"></i>
              </div>
              <p>
                (+699)1234-7575-45
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Icon End -->

    <!-- Footer Section Start -->
    <footer>


      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info pull-left wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h3 class="logo-title">Women in IT</h3>
                <p>Web Programming Project - 2017 winter semester</p>
                <p>Product by Kim Yejin, Choi Bowon, Ha Suhyeon</p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="cssload-thecube">
        <div class="cssload-cube cssload-c1"></div>
        <div class="cssload-cube cssload-c2"></div>
        <div class="cssload-cube cssload-c4"></div>
        <div class="cssload-cube cssload-c3"></div>
      </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/smooth-on-scroll.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/main.js"></script>
  </body>

</html>
