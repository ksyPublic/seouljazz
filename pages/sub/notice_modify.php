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
            <div class="notice-title-wrap">
            <div class="notice-input-wrap mgb20">
                <label>제목</label>
                <input type="text" placeholder="제목을 입력해주세요" class="noti-title-input"/>
            </div>
            <div class="notice-input-wrap">
                <label>날짜</label>
                <input type="text" placeholder="날짜를 기입해주세요" class="noti-title-input"/>
            </div>
            </div>
            <div class="notice-title-wrap">
                <div class="notice por">
                    <input type="checkbox" name="chk1" value="1" id="chk1">
                    <label for="chk1">공지사항</label>
                </div>  
                <div class="notice por">
                    <input type="checkbox" name="chk2" value="1" id="chk2">
                    <label for="chk2">아이콘 사용여부</label>
                </div>
            </div>
        </div>
        <div class="not-content-view">
            <div class="">에디트 영역입니다.</div>
            <div class="tal ft16 lh17 c02">
                    <textarea style="width:100%; min-height:300px; padding:10px;">sdfsdf</textarea>
            </div>
        </div>
        <ul class="view_guel">
            <li class="por">
            <div class="ft16 f400 poa vg_txt">
                <i class="v_up">이전</i><span>이전글</span>
            </div>
            <div class="ft16 vg_tit">
                <a href="#" class="c01">SJF2019서울재즈페스티벌 공지사항</a>
            </div>
            <div class="ft14 ftm c05 poa vg_date">2018.12.05</div>
            </li>

            <li class="por">
            <div class="ft16 f400 poa vg_txt">
                <i class="v_down">다음</i><span>다음글</span>
            </div>
            <div class="ft16 vg_tit">
                <a href="#" class="c01">SJF2019서울재즈페스티벌 공지사항</a>
            </div>
            <div class="ft14 ftm c05 poa vg_date">2018.12.05</div>
            </li>
        </ul>
    </div>
    
    <!--어드민용 버튼그룹 -->
    <div class="button-wrap">
      <a href="" class="basic bg-red">관리자</a>
      <a href="./notice_write.php" class="basic bgb">글쓰기</a>
      <a href="./notice_modify.php" class="basic bgb">저장</a>
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
