<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8" />
    <title>로그인페이지</title>
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
    <link rel="stylesheet" type="text/css" href="../../css/common.css" />
    <link rel="stylesheet" type="text/css" href="../../css/members.css" />

    <body>
        <!-- Header SNS -->
        <div class="ly-header">
        <div class="ly-hd-members">
            <ul class="nav">
              <li><a href="./login.php" alt="로그인">로그인</a></li>
              <li><a href="./signup.php" alt="회원가입">회원가입</a></li>
              <li><a href="" alt="ENG">ENG</a></li>
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
        </div>
        <div class="sjf-login-wrap">
            <h1 class="login-title">LOGIN</h1>
            <form>
            <div class="search-login">
                <input type="text" placeholder="아이디"/>
                <input type="text" placeholder="비밀번호"/>
                <div class="check-login ">
                    <div class="floatedLeft">
                        <input type="checkbox" name="chk1" value="1" id="id-save"/>
                        <Label for="id-save">아이디 저장</Label>
                    </div>
                    <div class="floatedRight">
                        <ul class="pat3">
                            <li><a href="./signup.php">회원가입</a></li>
                            <li><a href="">아이디/비밀번호 찾기</a></li>
                        </ul>
                    </div>
                </div>
                    <a href="">
                        <div class="login-submit-btn">로그인</div>
                    </a>
                </form>
                <div class="login-sns-line">
                    <span class="sns-line">SNS</span>
                    <div class="sns-btn-wrap">
                        <ul>
                            <a href=""><li class="bg1"><span><img src="../../images/main/bg1.png" /></span>페이스북 로그인</li></a>
                            <a href=""><li class="bg2"><span><img src="../../images/main/bg2.png" /></span>카카오로 로그인</li></a>
                            <a href=""><li class="bg3"><span><img src="../../images/main/bg3.png" /></span>네이버 로그인</li></a>
                            <a href=""><li class="bg4"><span><img src="../../images/main/bg4.png" /></span>구글 로그인</li></a>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
  </head>
</html>
