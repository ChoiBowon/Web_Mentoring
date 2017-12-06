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
                <a class="nav-link" href="#member">Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#information">Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Mentoring.php">Mentoring</a>
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
    <section class="team-area section">
        <div class="container">
          <div class="section-header">
            <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Choose your prefer Mentor!</h3>
            <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Mentors</h2>
          </div>

          <div class="row">
              <!-- <img src="img/team/1.png" alt=""> -->

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
                    </li>
                    <input type='hidden' name='menteeapply' value='".$row['name']."'>
                    </ul>";
                    echo "</div>";

                    echo "</div>";
                    echo "</div>";

                //    }
                }

                 ?>
                 <br>
         		</form>
          </div>
        </div>
       </div>
    </section>
    <!-- 멘토 목록 End  -->

    <!-- Board Section Start 게시판 작성 -->
    <!-- Board Section Start 게시판 목록 -->

  <!-- Board Section End  -->
    <section id="services" class="services section">

      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Board</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Share your experience!</h2>
        </div>
        <?php
        echo "<table class='table table-striped custab'>
        <thead>
            <tr>
                <th>Category</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Hits</th>
            </tr>
        </thead>";

        while( $row = mysqli_fetch_assoc($re)){
        //      if(empty($_GET['category']) == true) {
        echo
        "<tbody>";
            echo "<tr>";
            echo "<td>".$row['category']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['content']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['hits']."</td>";
            echo "</tr>";
        "</tbody>";
        //    }
        }
        echo"</table>";

         ?>
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

    <!-- Support Section 멘토 지원하기-->
    <section id="support" class="team-area section">
      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Your Mantor or Mentee</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">My Mentroign 정보</h2>
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="support">
                <div class="team-content">
                  <h4 class="tem-member">John Doe</h4>
                  <p>Mathcing</p>
                </div>

              </div>
            </div>
          </div>

      </div>
    </section>
    <!-- 멘토 지원하기 Section Ends -->

    <!-- 멘티 목록 Start -->


    <!-- 멘토 목록 End -->


    <!-- Contact Icon Start -->
    <div class="section contact-icon">
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
