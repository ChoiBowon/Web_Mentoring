<?php
require_once("connect.php");
$result = mysqli_query($conn,'SELECT*FROM post');

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
    <title>Basic - Free/Lite</title>

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
          <a class="navbar-brand" href="Main.php"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon-menu"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#board">Board</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#support">Apply Mentor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Mentoring.php">Mentoring</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class = "nav-item">
              <?php

              echo "<a class='nav-link'>".$_SESSION['userId'].'님 반갑습니다!'."</a>";

               ?></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
              <div class="item active">
                <div class="contents text-center">
                  <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Member Dashboard</h1>
                  <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">여러분의 생각과 경험을 공유해주세요.<br>멘토 지원하기, 멘토링 신청하기를 바로 하고 싶다면 아래 버튼을 눌러주세요.
                  <br>멘토링 페이지로 바로 가고싶다면 상단 오른쪽의 "Mentoring" 을 클릭해주세요.</p>
                  <a rel="nofollow" href="#support" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">멘토 지원하기</a>
                  <a rel="nofollow" href="#mentor" class="btn btn-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">멘토링 신청하기</a>
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

      <!-- Board Section Start 게시판 목록 -->
    <section id="board" class="team-area section">
        <div class="container">
          <div class="section-header">
            <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Board</h3>
            <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Board</h2>
          </div>

        <?php
        $page_size = 5;
        $page_list_size = 5;



        $result_count = mysqli_query($conn, 'SELECT count(*) from post');
        $result_row = mysqli_fetch_row($result_count);
        $total_row = $result_row[0];

        if (!$no || $no < 0) $no=0;

        if ($total_row <= 0) $total_row = 0; // 총게시물의 값이 없거나 할경우 기본값으로 세팅

        $total_page = floor(($total_row - 1) / $page_size); // 총게시물을 페이지 사이즈로 나눈뒤 내림을 한다.

        $current_page = floor($no/$page_size);

        // echo "<table class='table-striped custab' width=580 border=0  cellpadding=2 cellspacing=1 bgcolor=#777777>
        // <thead>
        // <tr height=20 bgcolor=#999999>
        // <td width=30 align=center><font color=white>Post</font>
        // </td>
        // <td width=370  align=center><font color=white>Category</font>
        // </td>
        // <td width=370  align=center><font color=white>Title</font>
        // </td>
        // <td width=50 align=center><font color=white>Author</font>
        // </td>
        // <td width=60 align=center><font color=white>Date</font>
        // </td>
        // <td width=40 align=center><font color=white>Hits</font>
        // </td>
        // </tr>
        // </thead>";
        echo "<table class='table table-striped custab'>
        <thead>
            <tr>
            <th width=80>  Post</th>
            <th>Category</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
            <th>Hits</th>
            </tr>
        </thead>";
 // <th>Content</th>
        while( $row = mysqli_fetch_assoc($result)){
            //  if(empty($_GET['category']) == true) {
        echo
        "<tbody>";
            echo "<tr>";
            echo "<td width=80 align=center >".$row['post_no']."</td>";
            echo "<td width=150>".$row['category']."</td>";
            echo "<td width=600>";
            echo "<a href=#write?id=".$row['post_no'].">".$row['title']."</a>";
            echo "</td>";
            // echo "<td>".$row['content']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['created']."</td>";
            echo "<td>".$row['hits']."</td>";
            echo "</tr>";
        "</tbody>";
        //    }
        }
        echo"</table>";

        ?>



        <!-- // } else if($_GET['id'] == 2) { // DB에서 Study 테이블을 쿼리하여 글 화면에 출력
        //   if(empty($_GET['tag']) == true) {
        //     $result = mysqli_query($conn, "SELECT * FROM study ORDER BY id desc");
        //     while( $row = mysqli_fetch_assoc($result)){
        //       echo '<div class="panel panel-default">';
        //       echo '<div class="panel-heading">';
        //       echo '<h2><p class="text-center">'.$row['title'].'</p></h2>';
        //       echo '<h5><p class="text-left">'.$row['created'].'</p></h5>';
        //       echo '<h4><p class="text-right">'.$row['author'].'</p></h4>';
        //       echo '</div><br>';
        //       echo $row['content'];
        //       echo '<br><br><br><br><br><br><br>';
        //       echo '</div>';
        //     }
        //   } else {
        //     $temp = "SELECT * FROM study WHERE tag = ".$_GET['tag']." ORDER BY id desc";
        //     $result = mysqli_query($conn, $temp);
        //     while( $row = mysqli_fetch_assoc($result)){
        //       echo '<div class="panel panel-default">';
        //       echo '<div class="panel-heading">';
        //       echo '<h2><p class="text-center">'.$row['title'].'</p></h2>';
        //       echo '<h5><p class="text-left">'.$row['created'].'</p></h5>';
        //       echo '<h4><p class="text-right">'.$row['author'].'</p></h4>';
        //       echo '</div><br>';
        //       echo $row['content'];
        //       echo '<br><br><br><br><br><br><br>';
        //       echo '</div>';
        //     }
        //   }
        // } else if($_GET['id'] == 3) { // DB에서 Diary 테이블을 쿼리하여 글 화면에 출력
        //   $result = mysqli_query($conn, "SELECT * FROM diary ORDER BY id desc");
        //   while( $row = mysqli_fetch_assoc($result)){
        //     echo '<div class="panel panel-default">';
        //     echo '<div class="panel-heading">';
        //     echo '<h2><p class="text-center">'.$row['title'].'</p></h2>';
        //     echo '<h5><p class="text-left">'.$row['created'].'</p></h5>';
        //     echo '<h4><p class="text-right">'.$row['author'].'</p></h4>';
        //     echo '</div><br>';
        //     echo $row['content'];
        //     echo '<br><br><br><br><br><br><br>';
        //     echo '</div>';
        //   }
        // } else if($_GET['id'] == 4) { // DB에서 Book 테이블을 쿼리하여 글 화면에 출력
        //   $result = mysqli_query($conn, "SELECT * FROM book ORDER BY id desc");
        //   while( $row = mysqli_fetch_assoc($result)){
        //     echo '<div class="panel panel-default">';
        //     echo '<div class="panel-heading">';
        //     echo '<h2><p class="text-center">'.$row['title'].'</p></h2>';
        //     echo '<h5><p class="text-left">'.$row['created'].'</p></h5>';
        //     echo '<h4><p class="text-right">'.$row['author'].'</p></h4>';
        //     echo '</div><br>';
        //     echo $row['content'];
        //     echo '<br><br><br><br><br><br><br>';
        //     echo '</div>';
        //   }
        // } else if($_GET['id'] == 5) { // 업데이트 돼야할 Travel 부분
        //   echo 'Travel to be continued .....';
        //   echo '<br><br><br><br><br><br><br>';
        // } else if($_GET['id'] == 6) { // 글등록 세션
        //
        // } -->
         <!-- ?> -->


       </div>
    </section>


    <!-- Board Section End  -->

    <!-- Board Section Start 게시판 작성 -->
    <section id ="write" class="services section">

      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Board</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Share your experience!</h2>
        </div>
        <form action="dashprocess.php" method="post"> <!-- process.php 에서 처리하도록 한다 -->
          <div class="form-group"> <!-- 글 등록을 위한 Form -->
            <select name="select" class="form-control">
              <option>게시글</option>
              <option>후기</option>
              <option>답글</option>
            </select>
            <br>
            <label for="title" style="color:#fff; font-size:20px" >Title</label>
            <input name="title" class="form-control"  type="text" id="title"><br>
            <!-- style="background-color:#f6f6f6; color:#000" -->
            <label for="content" style="color:#fff; font-size:20px" >Content</label>
            <textarea name="content" class="form-control" id="content" rows="8" cols="80"></textarea><br>
            <input class="btn btn-common wow fadeInUp"  type="submit" value="Submit">
          </div>
        </form>

      </div>
    </section>
    <!-- Board Section End -->

    <!-- Support Section 멘토 지원하기-->
    <section id="support" class="team-area section">
      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Become a mentor for female developers!</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">멘토 지원하기</h2>
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="support">
                <!-- 멘토 신청 폼 -->
                <form role="form" class="form-horizontal" name="supportform" id="supportform" action="supportwork.php" method="post">
                  <div class="form-group">
                    <h3><label for="name" style="color:#000; font-size:20px" >Name</label></h3>
                    <input name="name" class="form-control" style="color:#000" type="text" id="name" placeholder="이름을 입력해주세요."><br>
                    <h3><label for="job" style="color:#000; font-size:20px" >Job</label></h3>
                    <input name="job" class="form-control" style="color:#000" type="text" id="name" placeholder="이름을 입력해주세요."><br>
                    <h3><label for="content" style="color:#000; font-size:20px" >Content</label></h3>
                    <textarea name="content" class="form-control" style="color:#000;" id="content" rows="8" cols="80" placeholder="인사말, 멘토로서의 다짐을 작성해주세요."></textarea><br>
                    <input class="btn btn-common wow fadeInUp"  type="submit" value="Submit">
                  </div>
                </form>
                <!-- 멘토 신청 폼 끝! -->
              </div>
            </div>
          </div>
          <!-- 우수 멘토 목록 -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div id="testimonial" class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="touch-slider" class="owl-carousel owl-theme">
                <div class="item active text-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conseq uatuis aute irure dolor.</p>
                  <div class="client-info">
                   <h2 class="client-name">Song Minseok</h2>
                   <h4 class="client-details">Founder & CEO, JN Inc.</h4>
                  </div>
                  <img class="img-member" src="img/testimonial/img1.png" alt="">
                </div>
                <div class="item text-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conseq uatuis aute irure dolor.</p>
                  <div class="client-info">
                   <h2 class="client-name">Jhon Nash</h2>
                   <h4 class="client-details">Founder & CEO, JN Inc.</h4>
                  </div>
                  <img class="img-member" src="img/testimonial/img2.png" alt="">
                </div>
                <div class="item text-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conseq uatuis aute irure dolor.</p>
                  <div class="client-info">
                   <h2 class="client-name">Jhon Nash</h2>
                   <h4 class="client-details">Founder & CEO, JN Inc.</h4>
                  </div>
                  <img class="img-member" src="img/testimonial/img3.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <!-- 우수 멘토 목록 끝 -->
      </div>
    </section>
    <!-- 멘토 지원하기 Section Ends -->

    <!-- 멘티 목록 Start -->
    <section id="mentor" class="why">
        <div class="container">
          <div class="section-header">
            <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Choose your Mentor!</h3>
            <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Mentoring</h2>
          </div>
            <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">

              <div class="single-team wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                <!-- <img src="img/team/1.png" alt=""> -->
                <div class="team-content">
                  <h4 class="tem-member">John Doe</h4>
                  <h6>web developer</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <ul class="team-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="single-team wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                <!-- <img src="img/team/2.png" alt=""> -->
                <div class="team-content">
                  <h4 class="tem-member">Sommer Christian</h4>
                  <h6>social marketing</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <ul class="team-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="single-team wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">
                <!-- <img src="img/team/3.png" alt=""> -->
                <div class="team-content">
                  <h4 class="tem-member">Ben Davis</h4>
                  <h6>Frontend Developer</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <ul class="team-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <br><br>
          <div  class="contents text-center">
          <a rel="nofollow" href="Mentoring.php" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Apply Mentoring!</a>
          <br><br>
        </div>
        </div>
      </section>

    <!-- 멘토 목록 End -->


    <!-- Contact Icon Start -->
    <div id = "contact" class="section contact-icon">
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
