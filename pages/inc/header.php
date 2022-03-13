<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8" />
    <title>메인페이지</title>
    <meta property="description" content="" />
    <meta name="Referrer" content="origin" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes"
    />
    <meta name="apple-mobile-web-app-title" content="" />
    <link rel="stylesheet" type="text/css" href="../../css/header.css" />
    <link rel="stylesheet" type="text/css" href="../../css/footer.css" />
    <link rel="stylesheet" type="text/css" href="../../css/artists.css" />
    <link rel="stylesheet" type="text/css" href="../../css/common.css" />
    <link rel="stylesheet" type="text/css" href="../../css/aos.css" />
    <link rel="stylesheet" type="text/css" href="../../css/sub.css" />
    <link rel="stylesheet" type="text/css" href="../../css/photo.css" />
    <script type="text/javascript" src="../../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../../js/aos.js"></script>
    <script type="text/javascript" src="../../js/fullpage.min.js"></script>
    <script type="text/javascript" src="../../js/common.js"></script>
    <script type="text/javascript" src="../../js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>
    <script type="text/javascript" src="../../js/menubar.js"></script>
    <script type="text/javascript" src="../../js/modernizr.custom.js"></script>
    <script type="text/javascript" src="../../js/labelSelect.js"></script>
    <script type="text/javascript" src="../../js/masonry.min.js"></script>
    <script type="text/javascript" src="../../js/footerimgRoll.js"></script>
    

    <body class="body--bg">
    <div id="veil"></div>
      <div class="ov-bg"></div>

      <div class="ly-wrpper">
        <!-- Header -->
        <div class="ly-header">
          <!-- Header SNS -->
          <div class="ly-hd-members">
            <ul class="nav">
              <li><a href="./login.php" alt="로그인">로그인</a></li>
              <li><a href="./signup.php" alt="회원가입">회원가입</a></li>
              <li><a href="./eng.php" alt="ENG">ENG</a></li>
              <a
                href="https://www.facebook.com/seouljazzfestival/"
                alt="facebook"
                target="_blank"
              >
                <li class="hd-facebook-icon"></li>
              </a>
              <a
                href="https://www.youtube.com/user/SeoulJazzFestival"
                alt="youtube"
                target="_blank"
              >
                <li class="hd-youtube-icon"></li>
              </a>
              <a
                href="https://www.instagram.com/seouljazzfestival/?hl=ko"
                alt="instargram"
                target="_blank"
              >
                <li class="hd-insta-icon"></li>
              </a>
              <a
                href="https://itunes.apple.com/kr/curator/%EC%84%9C%EC%9A%B8-%EC%9E%AC%EC%A6%88-%ED%8E%98%EC%8A%A4%ED%8B%B0%EB%B2%8C/1372194565?app=music"
                alt="applemusic"
                target="_blank"
              >
                <li class="hd-music-icon"></li>
              </a>
            </ul>
          </div>
          <!-- 메인 로고 -->
          <div class="ly-hd-logo inner" id="header">
            <ul class="clr">
              <li>
                <img
                  src="../../images/png/the13.png"
                  alt="THE13th"
                />
              </li>
              <li>
                <a href="../index.html" alt="홈"
                  ><img
                    src="../../images/png/logo.png"
                    alt="서울재즈페스티벌"
                /></a>
              </li>
              <li>
                <img
                  src="../../images/png/fff2019.png"
                  alt="서울재즈페스티벌2019"
                />
              </li>
            </ul>
          </div>
          <div class="ly-hd-menu inner">
            <section class="navigation">
              <div class="nav-container">
                <nav>
                  <div class="nav-mobile">
                    <a id="nav-toggle" href="#!"><span></span></a>
                  </div>
                  <ul class="in-none">
                    <li class="none">
                      <a href="./artists.php" alt="아티스트">ARTISTS</a>
                    </li>
                    <li class="none">
                      <a href="#!" alt="티켓">TICKETS</a>
                      <ul class="nav-dropdown" id="drop1">
                        <li>
                          <a href="./ticket.php">예매안내</a>
                        </li>
                        <li>
                          <a href="#!">티켓구매</a>
                        </li>
                      </ul>
                    </li>
                    <li class="none">
                      <a href="#!" alt="정보안내">INFORMATION</a>
                      <ul class="nav-dropdown" id="drop2">
                        <li>
                          <a href="./notice.php">공지사항</a>
                        </li>
                        <li>
                          <a href="./information.php">관람안내</a>
                        </li>
                        <li>
                          <a href="./eventInfor.php">행사장 안내</a>
                        </li>
                        <li>
                          <a href="./waycome.php">오시는 길</a>
                        </li>
                      </ul>
                    </li>
                    <li class="none">
                      <a href="#!" alt="갤러리">GALLERY</a>
                      <ul class="nav-dropdown" id="drop3">
                        <li>
                          <a href="./photo.php">PHOTO</a>
                        </li>
                        <li>
                          <a href="./video.php">VIDEO</a>
                        </li>
                      </ul>
                    </li>
                    <li class="none">
                      <a href="./history.php" alt="히스토리">HISTORY</a>
                    </li>
                    <li class="none">
                      <a href="./sponsor.php" alt="스폰서">SPONSOR</a>
                    </li>
                    <li class="none">
                      <a href="#!" alt="고객센터">CUSTOMER CENTER</a>
                      <ul class="nav-dropdown" id="drop4">
                        <li>
                          <a href="./news.php">NEWS</a>
                        </li>
                        <li>
                          <a href="./faq.php">FAQ</a>
                        </li>
                      </ul>
                    </li>
                    <li class="none mb-dis">
                      <a href="#!" alt="SNS">SNS</a>
                      <ul class="nav-dropdown" id="drop5">
                        <li class="facebook-moblie-btn">
                          <a
                            href="https://www.facebook.com/seouljazzfestival/"
                            alt="페이스북"
                            target="_blank"
                          ></a>
                        </li>
                        <li class="insta-moblie-btn">
                          <a
                            href="https://www.instagram.com/seouljazzfestival/?hl=ko"
                            alt="인스타그램"
                            target="_blank"
                          ></a>
                        </li>
                        <li class="youtube-moblie-btn">
                          <a
                            href="https://www.youtube.com/user/SeoulJazzFestival"
                            alt="유튜브"
                            target="_blank"
                          ></a>
                        </li>
                        <li class="appMusic-moblie-btn">
                          <a
                            href="https://itunes.apple.com/kr/curator/%EC%84%9C%EC%9A%B8-%EC%9E%AC%EC%A6%88-%ED%8E%98%EC%8A%A4%ED%8B%B0%EB%B2%8C/1372194565?app=music"
                            alt="뮤직"
                            target="_blank"
                          ></a>
                        </li>
                      </ul>
                    </li>
                    <div id="sidenav">
                      <a href="#!"
                        ><span class="btn-x"></span><span class="btn-x2"></span
                      ></a>
                    </div>
                    <div class="mobile-login-wrap">
                      <ul>
                        <li class="moblie-login-btn">
                          <a href="" alt="로그인"></a>
                        </li>
                        <!--로그인일때-->
                        <li class="moblie-logout-btn">
                          <a href="" alt="로그아웃"></a>
                        </li>
                        <!--로그아웃일때-->
                        <li class="moblie-signup-btn">
                          <a href="" alt="회원가입"></a>
                        </li>
                        <!--회원가입일때-->
                        <li class="moblie-changeinfo-btn">
                          <a href="" alt="회원정보수정"></a>
                        </li>
                        <!--회원정보수정 일때-->
                      </ul>
                    </div>
                  </ul>
                </nav>
              </div>
            </section>
          </div>
        </div>
      </div>
    </body>
  </head>
</html>
