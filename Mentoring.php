<?php
require_once("connect.php");
$result = mysqli_query($conn,'SELECT*FROM apply');
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
                  <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">여러분의 생각과 경험을 공유해주세요.<br>멘토 지원하기, 멘토링 신청하기를 바로 하고 싶다면 아래 버튼을 눌러주세요.<br> Including - Support, Documentation and Future Updates</p>
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

      <!-- Board Section Start 게시판 목록 -->
    <section class="team-area section">
        <div class="container">
          <div class="section-header">
            <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Choose your prefer Mentor!</h3>
            <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Mentor</h2>
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
         		</form>
          </div>
        </div>
       </div>
    </section>


    <!-- Board Section End  -->

    <!-- Board Section Start 게시판 작성 -->
    <section id="services" class="services section">

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
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Your Mantor or Mentee</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">My Mentroign 정보</h2>
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="support">
                <!-- 멘토 신청 폼 -->
                <form role="form" class="form-horizontal" name="supportform" id="supportform" action="supportwork.php" method="post">
                  <div class="form-group">
                    <h3><label for="title" style="color:#000; font-size:20px" >Name</label></h3>
                    <input name="name" class="form-control" style="color:#000" type="text" id="name" placeholder="이름을 입력해주세요."><br>
                    <h3><label for="content" style="color:#000; font-size:20px" >Content</label></h3>
                    <textarea name="content" class="form-control" style="color:#000;" id="content" rows="8" cols="80" placeholder="인사말, 멘토로서의 다짐을 작성해주세요."></textarea><br>
                    <input class="btn btn-common wow fadeInUp"  type="submit" value="Submit">
                  </div>
                </form>
                <!-- 멘토 신청 폼 끝! -->
              </div>
            </div>
          </div>
          
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
          </div<
        </div>
      </section>

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
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h3 class="logo-title">Basic</h3>
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="widget">
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
                <form class="subscribe-box">
                  <input placeholder="Your email" type="text">
                  <input class="btn-system" value="Send" type="submit">
                </form>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Links</h3>
                <ul class="menu">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Works</a></li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Services</h3>
                <ul class="menu">
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Graphics Design</a></li>
                  <li><a href="#">Branding</a></li>
                  <li><a href="#">UX Consulting</a></li>
                  <li><a href="#">Mobile Apps</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Flicker Gallery</h3>
                <ul class="featured-list">
                  <li>
                    <a href="#"><img alt="" src="img/featured/img1.jpg"></a>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="img/featured/img2.jpg"></a>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="img/featured/img3.jpg"></a>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="img/featured/img4.jpg"></a>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="img/featured/img5.jpg"></a>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="img/featured/img6.jpg"></a>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="img/featured/img7.jpg"></a>
                  </li>
                  <li>
                    <a href="#"><img alt="" src="img/featured/img8.jpg"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->

      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info pull-left wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>Template by <a rel="nofollow" href="http://graygrids.com">GrayGrids</a></p>
              </div>
              <div class="bottom-social-icons social-icon pull-right  wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                <a class="twitter" href="https://twitter.com/GrayGrids"><i class="fa fa-twitter"></i></a>
                <a class="facebook"" href="https://web.facebook.com/GrayGrids"><i class="fa fa-facebook"></i></a>
                <a class="google-plus"" href="https://plus.google.com/+GrayGrids"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="https://www.linkedin.com/GrayGrids"><i class="fa fa-linkedin"></i></a>
                <a class="dribble" href="https://dribbble.com/GrayGrids"><i class="fa fa-dribbble"></i></a>
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
