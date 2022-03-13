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
      <li><a href="">공지사항</a></li>
    </ul>
    <p class="suv-p">공지사항</p>
  </div>
</div>
<!--서브 헤더-->

<div class="notice-wrap">
  <div class="inner">
    <!--notice-view-->
    <div class="notice-view-wrap">
        <div class="notice-view-title ft24 clr">
            <span class="label yel2 mr15">NEW</span>
            <div class="not-view-title">[SJF] 2019 서울재즈페스티벌 공지사항</div>
            <div class="not-view-date ft18">2019-05-05</div>
        </div>
        <div class="not-content-view">
            <img src="http://sjf.zcx.kr/images/main/main01.jpg" />
            <div class="tal ft16 lh17 c02 pt60">
                    게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
                    테스트중입니다. 게시판 테스트중입니다. 게시판 테스트중입니다.
                    게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
                    테스트중입니다. 게시판 테스트중입니다. 게시판 테스트중입니다.
                    게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
                    테스트중입니다. 게시판 테스트중입니다. 게시판 테스트중입니다.
                    게시판 테스트중입니다. 게시판 테스트중입니다. 게시판
                    테스트중입니다. 게시판 테스트중입니다.
            </div>
        </div>
        <ul class="view_guel">
            <li class="por">
            <div class="ft16 f400 poa vg_txt">
                <i class="v_up">이전</i><span>이전글</span>
            </div>
            <div class="ft16 vg_tit">
                <a href="#" class="c01">한글명 아티스트</a>
            </div>
            <div class="ft14 ftm c05 poa vg_date">2018.12.05</div>
            </li>

            <li class="por">
            <div class="ft16 f400 poa vg_txt">
                <i class="v_down">다음</i><span>다음글</span>
            </div>
            <div class="ft16 vg_tit">
                <a href="#" class="c01">한글명 아티스트</a>
            </div>
            <div class="ft14 ftm c05 poa vg_date">2018.12.05</div>
            </li>
        </ul>
    </div>
    
    <!--어드민용 버튼그룹 -->
    <div class="button-wrap">
      <a href="" class="basic bg-red">관리자</a>
      <a href="./notice_write.php" class="basic bgb">글쓰기</a>
      <a href="./notice_modify.php" class="basic bgb">수정</a>
      <a href="" class="basic bgb">삭제</a>
    </div>
    <div class="btns_wrap pt60">
            <a href="#" class="br50 ft18 fwb c00 btns btns01">목록</a>
          </div>
    <!-- //어드민용 버튼그룹 -->

    <script>
      $(document).ready(function() {
        //최상단 체크박스 클릭
        $("#checkall").click(function() {
          //클릭되었으면
          if ($("#checkall").prop("checked")) {
            //input태그의 name이 chk인 태그들을 찾아서 checked옵션을 true로 정의
            $("input[name=chk]").prop("checked", true);
            //클릭이 안되있으면
          } else {
            //input태그의 name이 chk인 태그들을 찾아서 checked옵션을 false로 정의
            $("input[name=chk]").prop("checked", false);
          }
        });
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

  </div>
</div>

<!--//notice-->

<? require "../inc/footer.php"; ?>
