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
                  <a rel="nofollow" href="Mentoring.php" class="btn btn-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">멘토링 신청하기</a>
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
            echo "<td width=550>";

            echo "<a href='Dashboard.php?idd=".$row['post_no']."'>".$row['title']."</a>";
            echo "</td>";
            // echo "<td>".$row['content']."</td>";

            echo "<td width=100>".$row['author']."</td>";
            echo "<td>".$row['created']."</td>";
            echo "<td>".$row['hits']."</td>";
            echo "</tr>";
        "</tbody>";
        //    }
        }
        echo"</table>";

        ?>

       </div>
    </section>


    <!-- Board Section End  -->



    <!-- Board Section Start 게시판 작성 , 글 확인 -->
    <section id ="write" class="services section">

      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Board</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Share your experience!</h2>
        </div>
        <?php
        $bno = $_GET['idd'];
        $result_post = mysqli_query($conn,'SELECT * FROM post where post_no = '.$bno.'');
        // $sql = mysql_db_query("SELECT * FROM post WHERE post_no='".$bno."'");
        // $result_post = $sql->fetch_array();
        $board = mysqli_fetch_array($result_post);

        if(empty($_GET['idd']) === true || $_GET['idd'] == 100) {
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
        }else if($_GET['idd'] == 1 || $_GET['idd'] == 2 || $_GET['idd'] == 3 || $_GET['idd'] == 4 || $_GET['idd'] == 5 ){

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
          //목록보기, 글쓰기, 삭제 버튼
          echo "<tr>
          <table width =100%>
          <tr>
          <td colsapn=4 align=right><a href=#board><font color=white>[ 목록보기 ]</font></a>";
          echo "<a href='deletepost.php?idd=".$board['post_no']."'><font color=white>[ 삭제 ]</font></a>";
          echo "<a href='Dashboard.php?idd=100'><font color=white>[ 글쓰기 ]</font></a></td></tr>";
          echo "</td>
          </tr>";
          echo "</table>";


//조회수 업데이트
          $result_post = mysqli_query($conn,'UPDATE post SET hits=hits+1 WHERE post_no = '.$bno.'');

        }else {
//첫 화면에서 넘어갈 시 조회수 업데이트
          $result = mysqli_query($conn,'UPDATE post SET hits=hits+1 WHERE post_no = '.$bno.'');

        }

        ?>

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
                    <div  class="contents text-center">
                      <input class="btn btn-common wow fadeInUp"  type="submit" value="지원하기">
                      <br><br>
                    <a rel="nofollow" href="Mentoring.php" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">멘토링페이지 바로가기</a>
                    <br>
                  </div>
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
