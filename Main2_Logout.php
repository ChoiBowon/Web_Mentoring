<?php
require_once("connect.php");
$result = mysqli_query($conn,'SELECT*FROM post');
session_start();
//include("login.php");

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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon-menu"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#hero-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#member">Mentoring</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#information">Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <!-- 로그인 정보 알려주는 곳 -->
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
                  <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Women Developer for Society</h1>
                  <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">여성 개발자들을 위한 공간<br>여성 개발자로서, 여성 개발자를 준비하는 학생으로서, <br> Leading Each Other.</p>
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

    <!-- About Section Start -->
    <section id="about" class="section">
      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Who We Are</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">About Us</h2>
        </div>
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <p>When one woman helps another, amazing things can happen. Professional careers leap forward. That's what Women in IT is all about. As the premier professional association for women in the IT technology industry, we understand the unique challenges you face. No matter where you are in your professional development, or what technology-related field you're in, our community offers a broad range of support, programs and resources to advance women in IT from the classroom to the boardroom.
  This spacious space is for you. Lead each other as a female developer or a student preparing for female developers.</p>
            </div>
        </div>
        <div class="counters">
          <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="wow fadeInUp" data-wow-delay=".2s">
                <div class="facts-item">
                  <div class="fact-count">
                    <h3><span class="counter">4452</span></h3>
                    <h4>여성 개발자</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="wow fadeInUp" data-wow-delay=".4s">
                <div class="facts-item">
                  <div class="fact-count">
                    <h3><span class="counter">367</span></h3>
                    <h4>여학생 개발자</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="wow fadeInUp" data-wow-delay=".6s">
                <div class="facts-item">
                  <div class="fact-count">
                    <h3><span class="counter">965</span></h3>
                    <h4>Working Hours</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="wow fadeInUp" data-wow-delay=".8s">
                <div class="facts-item">
                  <div class="fact-count">
                    <h3><span class="counter">280</span></h3>
                    <h4>Followers</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="img-about-out">
        <img src="img/about-img.png" alt="">
      </div>
    </section>
    <!-- About Section End -->


    <!-- Member Dashboard Section Start -->
    <section id="member" class="services section">
      <div class="container">
        <div class="section-header">
          <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Member</h3>
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Member Dashboard</h2>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="icon">
                <i class="icon-settings"></i>
              </div>
              <h3><a href="#">Share information</a></h3>
              <p>여성 개발자로서 여러분이 가진 정보를 공유 해주세요.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="450ms">
              <div class="icon">
                <i class="icon-graph"></i>
              </div>
              <h3><a href="#">New information</a></h3>
              <p>최신 소프트웨어 동향,취업에 관련한 정보를 얻을 수 있습니다.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="550ms">
              <div class="icon">
                <i class="icon-camera"></i>
              </div>
              <h3><a href="#">Team matching</a></h3>
              <p>나와 함께 공모전, 대회에 참가할 팀원을 찾을 수 있습니다.</p>
            </div>
          </div>
           <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="650ms">
              <div class="icon">
                <i class="icon-screen-tablet"></i>
              </div>
              <h3><a href="#">Mentoring</a></h3>
              <p>멘토링을 통해 더욱 성장한 여성개발자가 될 수 있습니다.</p>
            </div>
        </div>
      </div>
    </div>
    <br><br>
              <!-- Mentoring.php로 전환 -->
      <div class="contents text-center">
        <a rel="nofollow" href="DashBoard.php" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">More</a>
      </div>
    </section>
    </div>
    <!-- Member Section End -->

    <!-- Information Section Start  -->
      <section id="information" class="team-area section">
        <div class="container">
          <div class="section-header">
            <h3 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Information</h3>
            <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Notices</h2>
          </div>

          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="single-team wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="team-content">
                  <h4 class="tem-member">Facebook</h4>
                  <h6>U.S.A</h6>
                  <p>The Facebook Page celebrates how our friends inspire us, support us, and help us discover the world when we connect.</p>
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
                <div class="team-content">
                  <h4 class="tem-member">Google</h4>
                  <h6>U.S.A</h6>
                  <p>Organizing the world's information and making it universally accessible and useful.</p>
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
                <div class="team-content">
                  <h4 class="tem-member">Apple</h4>
                  <h6>U.S.A</h6>
                  <p>The most powerful products for business are the ones people already love to use.</p>
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
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-team wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
              <div class="team-content">
                <h4 class="tem-member">Facebook</h4>
                <h6>U.S.A</h6>
                <p>The Facebook Page celebrates how our friends inspire us, support us, and help us discover the world when we connect.</p>
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
              <div class="team-content">
                <h4 class="tem-member">Google</h4>
                <h6>U.S.A</h6>
                <p>Organizing the world's information and making it universally accessible and useful.</p>
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
              <div class="team-content">
                <h4 class="tem-member">Apple</h4>
                <h6>U.S.A</h6>
                <p>The most powerful products for business are the ones people already love to use.</p>
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
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="single-team wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="team-content">
              <h4 class="tem-member">Samsung</h4>
              <h6>South Korea</h6>
              <p>삼성그룹의 대표 기업으로 휴대폰, 정보통신기기, 반도체, TV 등을 생산 판매하는 제조업체</p>
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
            <div class="team-content">
              <h4 class="tem-member">LG</h4>
              <h6>South Korea</h6>
              <p>LG그룹 계열사로 가전제품, 정보통신기기 제조 판매업체</p>
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
            <div class="team-content">
              <h4 class="tem-member">Naver</h4>
              <h6>South Korea</h6>
              <p>인터넷포털 '네이버(NAVER)'와 글로벌 모바일 메신저 '라인(LINE)' 등을 운영하는 글로벌 기업</p>
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
        <br>
      </div>
      </section>
      <!-- information Section End  -->


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
