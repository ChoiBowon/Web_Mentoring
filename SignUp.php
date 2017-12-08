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
          <a class="navbar-brand" href="index.html"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon-menu"></i>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="SignUp.html">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#member">Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#information">Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Mentoring.html">Mentoring</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
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
                  <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Sign Up</h1>
                  <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Sign up for Mentor or Mentee<br></p>
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
          <h2 class="section-title wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Sign Up</h2>
        </div>
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <form class="join" action="SignUpprocess.php" method="post">

            <div class="col-md-6 col-md-offset-3">

                <div class="form-group">
                <label for="InputId">ID</label>
                <input type="text" class="form-control" name="Id" style="color:#000" placeholder="아이디">
                </div>

                <div class="form-group">
                  <label for="InputPassword1">Password</label>
                  <input type="password" class="form-control" name="Password" style="color:#000" placeholder="비밀번호">
                </div>

                <div class="form-group">
                  <label for="InputPassword2">비밀번호 확인</label>
                  <input type="password" class="form-control" name="Password2" style="color:#000" placeholder="비밀번호 확인">
                </div>
                <div class="form-group">
                  <label for="username">이름</label>
                  <input type="text" class="form-control" name="Name" style="color:#000" placeholder="이름을 입력해 주세요">
                </div>
                <div class="form-group">
                  <label for="role">멘토/멘티 구분</label>
                    <input type="radio" name="Role" value="mentor">멘토
                    <input type="radio" name="Role" value="mentee">멘티
                </div>

    			      <div class="form-group">
                  <label for="InputEmail">전화번호</label>
                  <input type="text" class="form-control" name="PhoneNum" style="color:#000" placeholder="전화번호를 입력해 주세요">
                </div>

                <div class="form-group">
                  <label for="InputEmail">이메일 주소</label>
                  <input type="email" class="form-control" name="Email" style="color:#000" placeholder="이메일 주소를 입력해 주세요">
                </div>

                <div class="form-group">
                  <label for="InputDept">소속기관/학교명</label>
                  <input type="text" class="form-control" name="Department" style="color:#000" placeholder="소속기관/학교를 입력해 주세요">
                </div>

                <div class="form-group">
                  <label for="InputYear">직급/학년</label>
                  <input type="text" class="form-control" name="Year" style="color:#000" placeholder="직급/학년을 입력해 주세요">
                </div>
                <div class="form-group">
                  <label for="InputMajor">학과/전공</label>
                  <input type="text" class="form-control" name="Major" style="color:#000" placeholder="학과/전공을 입력해 주세요">
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-info">회원가입<i class="fa fa-check spaceLeft"></i></button>
                  <button type="submit" class="btn btn-warning">가입취소<i class="fa fa-times spaceLeft"></i></button>
                </div>
            </div>
          </form></div>
        </div>

      </div>
      <div class="img-about-out">
        <img src="img/about-img.png" alt="">
      </div>
    </section>
    <!-- About Section End -->

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
