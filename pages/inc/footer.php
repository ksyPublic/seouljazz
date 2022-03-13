<!--Footer-->
<div class="ly-footer fp-auto-height section">
  <div class="ly-footer-spn">
    <div class="area-main-banner">
      <div class="layout">
        <div class="inner">
        <ul class="main-banner">
          <li>
            <a href="#" title="go to site">
              <img
                src="../../images/data-img/sponsor2.png"
                alt="imagine your korea logo"
              />
            </a>
          </li>
          <li>
            <a href="#" title="go to site">
              <img
                src="../../images/data-img/sponsor2.png"
                alt="imagine your korea logo"
              />
            </a>
          </li>
          <li>
            <a href="#" title="go to site">
              <img
                src="../../images/data-img/sponsor2.png"
                alt="imagine your korea logo"
              />
            </a>
          </li>
          <li>
            <a href="#" title="go to site">
              <img
                src="../../images/data-img/sponsor2.png"
                alt="imagine your korea logo"
              />
            </a>
          </li>
          <li>
            <a href="#" title="go to site">
              <img
                src="../../images/data-img/sponsor2.png"
                alt="imagine your korea logo"
              />
            </a>
          </li>
          <li>
                <a href="#" title="go to site">
                  <img
                    src="../../images/data-img/sponsor2.png"
                    alt="imagine your korea logo"
                  />
                </a>
              </li>
              <li>
                <a href="#" title="go to site">
                  <img
                    src="../../images/data-img/sponsor2.png"
                    alt="imagine your korea logo"
                  />
                </a>
              </li>
              <li>
                <a href="#" title="go to site">
                  <img
                    src="../../images/data-img/sponsor2.png"
                    alt="imagine your korea logo"
                  />
                </a>
              </li>
              <li>
                <a href="#" title="go to site">
                  <img
                    src="../../images/data-img/sponsor2.png"
                    alt="imagine your korea logo"
                  />
                </a>
              </li>
              <li>
                <a href="#" title="go to site">
                  <img
                    src="../../images/data-img/sponsor2.png"
                    alt="imagine your korea logo"
                  />
                </a>
              </li>
        </ul>
    </div>
      </div>
    </div>

    <script type="text/javascript">
      var mainBanner = $(".main-banner").bxSlider({
        auto: "auto",
        autoControls: false,
        autoDelay: 100, //자동으로 롤링되는 딜레이시간
        minSlides: 3, //최소 슬라이드 수
        maxSlides: 12, //최대 슬라이드 수 알아서 조정하시면됩니다
        slideWidth: "128px", //슬라이드 안의 넓이, 숫자로도 가능합니다.
        slideMargin: 12, //슬라이드 사이의 마진값
        moveSlides: 2, 
        
        // reloadSlider:20,
        pager: false
        // mode:'vertical'
      });
      $(".main-banner li a").focusin(function() {
        $(".main-banner li").removeClass("focus");
        $(this)
          .parents("li")
          .addClass("focus");
        mainBanner.stopAuto();
        if ($(".main-banner li:first-child").hasClass("focus")) {
          mainBanner.css("transform", "translate3d(0, 0px, 0px)");
        }
      });
    </script>

    <div class="ft-cont">
      <ul>
        <li class="ft-point wdt50 bpc1">
          <a href="" alt="개인정보처리방침">개인정보처리방침</a>
        </li>
        <li class="wdt50 bpc2"><a href="" alt="이용약관">이용약관</a></li>
        <li>
          <a href="" alt="이메일무단수집거부">이메일무단수집거부</a>
        </li>
        <li><a href="" alt="고객센터">고객센터</a></li>
        <li class="siteMap"><a href="../sub/siteMap.php" alt="사이트맵">사이트맵</a></li>
      </ul>
    </div>
    <div class="ft-suv">
      <ul class="nav">
        <li>
          주소: 서울특별시 송파구 올림픽로 35 가길 B-310
        </li>
        <li>대표전화: 000-0000-0000</li>
        <br />
        <li>대표자: 000</li>
        <li>재단고유번호: 000-0000-0000</li>
        <li>개인정보관리책임자: 000</li>
        <br />
        <li>
          <span class="ft-16"
            >Copyright © 2012 SeoulJazzFestival. All Rights Reserved.</span
          >
        </li>
      </ul>
      <ul class="nav-02">
        <li><span class="ft-16">FOLLOW US</span></li>
        <br />
        <li><a href="" alt="페이스북">
            <img src="../../images/main/footer_facebook.png" />
        </a></li>
        <li><a href="" alt="블로그"><img src="../../images/main/footer_blog.png" /></a></li>
        <li><a href="" alt="인스타그램"><img src="../../images/main/footer_insta.png" /></a></li>
        <li><a href="" alt="유튜브"><img src="../../images/main/footer_youtube.png" /></a></li>
      </ul>
    </div>
  </div>
</div>

<!-- footer -->

<div class="movie" style="display: none;">
  <div id="video_pop" style="display: none;">
    <a href="#stop_video">닫기</a>
    <div class="pop_con"></div>
  </div>
</div>

<script type="text/javascript">
  //시작
  $(document).ready(function() {
    $("#video_pop > a").click(function() {
      //팝업 닫기
      $("#video_pop .pop_con").empty();
      $("#video_pop, div.movie").fadeOut();
      $(".ov-bg, div.movie").fadeOut();
    });
    //영문 동영상
    $("#youtube_movie").click(function() {
      var vdurl = $(this).attr("data-id");
      if ($(window).width() < 900) {
        $(this)
          .attr("href", "https://youtu.be/" + vdurl)
          .attr("target", "_blank");
      } else {
        $(this)
          .attr("href", "#none")
          .attr("target", "_self");
        $("#video_pop .pop_con")
          .css("height", 400)
          .html(
            '<iframe width="" height="" src="https://www.youtube.com/embed/' +
              vdurl +
              '?rel=0&amp;showinfo=0&amp;ecver=1&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>'
          );
        $("#video_pop, div.movie").fadeIn();
        $(".ov-bg").fadeIn();
      }
    });
  });
  //끝
</script>
<script>
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    //console.log(scroll);
    if (scroll >= 50) {
      //console.log('a');
      $("#header").addClass("down");
      $(".ly-hd-menu").addClass("bb1");
    } else {
      //console.log('a');
      $("#header").removeClass("down");
      $(".ly-hd-menu").removeClass("bb1");
    }
  });
</script>
<script>
  //main 사용안함
  {
    AOS.init({
      easing: "ease-in-out-sine",
      duration: 800,
      once: true
    });
  }
</script>
