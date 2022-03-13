<? require "../inc/header.php"; ?>
<!--서브 헤더-->

<div class="sub-header-wrap">
  <div class="inner suv-pdt">
    <h1>CUSTOMER CENTER</h1>
    <p>SEOUL JAZZ FESTIVAL FAQ</p>
  </div>
</div>
<div class="suv-title-wrap">
  <div class="inner suv-title">
    <ul class="suv-tt-list">
      <!-- list-->
      <li><a href="">Home</a></li>
      <li><a href="">CUSTOMERCENTER</a></li>
      <li><a href="">FAQ</a></li>
    </ul>
    <p class="suv-p">FAQ</p>
  </div>
</div>
<div class="contents-box-wrap bkc03">
  <div class="inner">
    <div class="eng-btn" style="text-align: center;"><a href="./eng.php">ADVANCE</a></div>
    <!--게시판영역-->
    <div class="notice_list_wrap mt50 bt2">
      <ul class="notice_list2">
        <li class="por">
          <div class="sn_date poa ftm">
            <div class="sn_date01 ft36 b_color">Q</div>
          </div>
          <div class="sn_txt tal">
            <div class="sn_txt01 ft18 f400 lh14">
              [Visitor] I would like to know how to enter and move the festival
              area.
            </div>
          </div>
          <div class="sn_chum poa"></div>
        </li>
      </ul>
      <div class="view_wrap">
        <ul class="notice_list-qa bkc02">
          <li class="por">
            <div class="sn_date poa ftm">
              <div class="sn_date01 ft36 a_color">A</div>
            </div>
            <div class="sn_txt tal">
              <div class="sn_txt01 ft16 f400 lh14 g_color">
                <ul class="test">
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <!-- //inner -->
      </div>
      <!--게시판영역-->
    </div>
    <div class="notice_list_wrap">
      <ul class="notice_list2">
        <li class="por">
          <div class="sn_date poa ftm">
            <div class="sn_date01 ft36 b_color">Q</div>
          </div>
          <div class="sn_txt tal">
            <div class="sn_txt01 ft18 f400 lh14">
              [Visitor] I would like to know how to enter and move the festival
              area.
            </div>
          </div>
          <div class="sn_chum poa"></div>
        </li>
      </ul>
      <div class="view_wrap">
        <ul class="notice_list-qa bkc02">
          <li class="por">
            <div class="sn_date poa ftm">
              <div class="sn_date01 ft36 a_color">A</div>
            </div>
            <div class="sn_txt tal">
              <div class="sn_txt01 ft16 f400 lh14 g_color">
                <ul class="test">
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                  <li>
                    [Visitor] I would like to know how to enter and move the
                    festival area.
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <!-- //inner -->
      </div>
      <script>
        $(document).ready(function() {
          $(".view_wrap").hide();
          //content 클래스를 가진 div를 표시/숨김(토글)
          $(".notice_list2").click(function() {
            //    $(this).next(".view_wrap").slideToggle(500);
            $(".view_wrap")
              .not(
                $(this)
                  .next(".view_wrap")
                  .slideToggle(100)
              )
              .slideUp();
            //    $(this).toggleClass("fa-chevron-down fa-chevron-up");
          });
        });
      </script>
      <!--페이징-->
      <div class="page_wrap">
        <div class="page">
          <a href="#none" class="first">첫페이지</a>
          <a href="#none" class="prev">이전페이지</a>
          <!--모바일버전-->
          <span class="current_m">
            <span class="txt_red">1</span>
            <!--현재페이지-->
            <span class="total">/ 3</span>
            <!--토탈--> </span
          ><!--모바일버전 끝-->

          <!--패드웹버전-->
          <span class="page_p">
            <a href="#none" class="act">1</a
            ><!--현재페이지-->
            <a href="#none">2</a>
            <a href="#none">3</a>
            <a href="#none">4</a>
            <a href="#none">5</a> </span
          ><!--패드웹버전 끝-->

          <a href="#none" class="next">다음페이지</a>
          <a href="#none" class="end">끝페이지</a>
        </div>
      </div>
      <!--페이징-->
    </div>
  </div>

  <? require "../inc/footer.php"; ?>
</div>
