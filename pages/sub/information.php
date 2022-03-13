<? require "../inc/header.php"; ?>

<!--notice-->
<!--서브 헤더-->
<div class="sub-header-wrap">
  <div class="inner suv-pdt">
    <h1>INFORMATION</h1>
    <p>서울재즈페스티벌과 함께합니다</p>
  </div>
</div>
<div class="suv-title-wrap">
  <div class="inner suv-title">
    <ul class="suv-tt-list">
      <!-- list-->
      <li><a href="">Home</a></li>
      <li><a href="">Information</a></li>
      <li><a href="">관람안내</a></li>
    </ul>
    <p class="suv-p">관람안내</p>
  </div>
</div>
<!--서브 헤더-->
<div class="notice-wrap">
  <div class="inner">
    <div class="gzs_wrap clr">
      <div class="nts_select" id="kst_sel">
        <label for="m1" class="ft16">전체</label>
        <select id="m1">
          <!--년도별 검색-->
          <option>2019</option>
          <option>2018</option>
          <option>2017</option>
        </select>
      </div>
      <div class="nts_search">
        <input type="text" title="검색" class="fc02" />
        <button type="submit" class="submit_btn">검색</button>
      </div>
    </div>
    <!--게시판영역-->
    <div class="notice_list_wrap mt50 bt2">
      <ul class="notice_list">
        <li class="por">
          <div class="sn_date poa ftm">
            <div class="sn_date01 ft24 p_color">05.15</div>
            <div class="sn_date02 ft16 c03">2019</div>
          </div>
          <div class="sn_txt tal">
            <div class="sn_txt01 ft26 f400 lh14">
              <span class="label yel2 mr15">NEW</span>[SJF] 2019 서울재즈페스티벌
              관람안내
            </div>
            <div class="sn_txt02 ft16 c04 lh17">
              2019 서울재즈페스티벌 관람안내 입니다. 자세한 내용은 클릭시
              확인가능합니다.
            </div>
          </div>
          <div class="sn_chum poa">첨부파일</div>
        </li>
      </ul>
      <div class="view_wrap">
        <div class="inner">
          <div class="ptb60 prl60 view_contents">
            <div class="view_pic tac">
              <img src="http://sjf.zcx.kr/images/main/main01.jpg" />
            </div>
            <div class="view_word tal ft16 lh17 c02 pt60">
              게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
              테스트중입니다. 게시판 테스트중입니다. 게시판 테스트중입니다.
              게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
              테스트중입니다. 게시판 테스트중입니다. 게시판 테스트중입니다.
              게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
              테스트중입니다. 게시판 테스트중입니다. 게시판 테스트중입니다.
              게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
              테스트중입니다. 게시판 테스트중입니다.
            </div>
            <!-- //view_chum -->
          </div>
          <!-- //view_contents -->
        </div>
        <!-- //inner -->
      </div>
    </div>
    <div class="notice_list_wrap">
      <ul class="notice_list">
        <li class="por">
          <div class="sn_date poa ftm">
            <div class="sn_date01 ft24 p_color">05.15</div>
            <div class="sn_date02 ft16 c03">2019</div>
          </div>
          <div class="sn_txt tal">
            <div class="sn_txt01 ft26 f400 lh14">
              <span class="label yel2 mr15">NEW</span>[SJF] 2019 서울재즈페스티벌
              관람안내
            </div>
            <div class="sn_txt02 ft16 c04 lh17">
              2019 서울재즈페스티벌 관람안내 입니다. 자세한 내용은 클릭시
              확인가능합니다.
            </div>
          </div>
          <div class="sn_chum poa">첨부파일</div>
        </li>
      </ul>
      <div class="view_wrap">
        <div class="inner">
          <div class="ptb60 prl60 view_contents">
            <div class="view_pic tac">
              <img src="http://sjf.zcx.kr/images/main/main01.jpg" />
            </div>
            <div class="view_word tal ft16 lh17 c02 pt60">
              게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
              테스트중입니다. 게시판 테스트중입니다. 게시판 테스트중입니다.
              게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
              테스트중입니다. 게시판 테스트중입니다. 게시판 테스트중입니다.
              게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
              테스트중입니다. 게시판 테스트중입니다. 게시판 테스트중입니다.
              게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
              테스트중입니다. 게시판 테스트중입니다.
            </div>
            <!-- //view_chum -->
          </div>
          <!-- //view_contents -->
        </div>
        <!-- //inner -->
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $(".view_wrap").hide();
        //content 클래스를 가진 div를 표시/숨김(토글)
        $(".notice_list").click(function() {
          //    $(this).next(".view_wrap").slideToggle(500);
          $(".view_wrap")
            .not(
              $(this)
                .next(".view_wrap")
                .slideToggle(500)
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

<!--//notice-->

<? require "../inc/footer.php"; ?>
