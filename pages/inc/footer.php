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
        autoDelay: 100, //???????????? ???????????? ???????????????
        minSlides: 3, //?????? ???????????? ???
        maxSlides: 12, //?????? ???????????? ??? ????????? ????????????????????????
        slideWidth: "128px", //???????????? ?????? ??????, ???????????? ???????????????.
        slideMargin: 12, //???????????? ????????? ?????????
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
          <a href="" alt="????????????????????????">????????????????????????</a>
        </li>
        <li class="wdt50 bpc2"><a href="" alt="????????????">????????????</a></li>
        <li>
          <a href="" alt="???????????????????????????">???????????????????????????</a>
        </li>
        <li><a href="" alt="????????????">????????????</a></li>
        <li class="siteMap"><a href="../sub/siteMap.php" alt="????????????">????????????</a></li>
      </ul>
    </div>
    <div class="ft-suv">
      <ul class="nav">
        <li>
          ??????: ??????????????? ????????? ???????????? 35 ?????? B-310
        </li>
        <li>????????????: 000-0000-0000</li>
        <br />
        <li>?????????: 000</li>
        <li>??????????????????: 000-0000-0000</li>
        <li>???????????????????????????: 000</li>
        <br />
        <li>
          <span class="ft-16"
            >Copyright ?? 2012 SeoulJazzFestival. All Rights Reserved.</span
          >
        </li>
      </ul>
      <ul class="nav-02">
        <li><span class="ft-16">FOLLOW US</span></li>
        <br />
        <li><a href="" alt="????????????">
            <img src="../../images/main/footer_facebook.png" />
        </a></li>
        <li><a href="" alt="?????????"><img src="../../images/main/footer_blog.png" /></a></li>
        <li><a href="" alt="???????????????"><img src="../../images/main/footer_insta.png" /></a></li>
        <li><a href="" alt="?????????"><img src="../../images/main/footer_youtube.png" /></a></li>
      </ul>
    </div>
  </div>
</div>

<!-- footer -->

<div class="movie" style="display: none;">
  <div id="video_pop" style="display: none;">
    <a href="#stop_video">??????</a>
    <div class="pop_con"></div>
  </div>
</div>

<script type="text/javascript">
  //??????
  $(document).ready(function() {
    $("#video_pop > a").click(function() {
      //?????? ??????
      $("#video_pop .pop_con").empty();
      $("#video_pop, div.movie").fadeOut();
      $(".ov-bg, div.movie").fadeOut();
    });
    //?????? ?????????
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
  //???
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
  //main ????????????
  {
    AOS.init({
      easing: "ease-in-out-sine",
      duration: 800,
      once: true
    });
  }
</script>
