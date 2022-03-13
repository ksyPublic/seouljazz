<? require "../inc/header.php"; ?>

<!--notice-->
<!--서브 헤더-->
<div class="sub-header-wrap">
  <div class="inner suv-pdt">
    <h1>CUSTOMER CENTER</h1>
    <p>서울재즈페스티벌 고객센터</p>
  </div>
</div>
<div class="suv-title-wrap">
  <div class="inner suv-title">
    <ul class="suv-tt-list">
      <!-- list-->
      <li><a href="">Home</a></li>
      <li><a href="">Information</a></li>
      <li><a href="">NEWS</a></li>
    </ul>
    <p class="suv-p">NEWS</p>
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
            <input
              type="text"
              placeholder="제목을 입력해주세요"
              class="noti-title-input"
            />
          </div>
          <div class="notice-input-wrap mgb20">
            <label>날짜</label>
            <input
              type="text"
              placeholder="날짜를 기입해주세요"
              class="noti-title-input"
            />
          </div>
          <div class="notice-input-wrap">
            <label>태그</label>
            <input
              type="text"
              placeholder="태그는 최대 5개입니다"
              class="noti-title-input"
              id="user_pr_v1"
              name="user_pr_v1"
            />
          </div>
          <div class="notice-input-wrap">
            <label></label>
            <div class="red mgt10 mlt5 dpb wit100 ft16">
              태그입력시 ',' 를 사용해주세요 ex)백예린, 서울재즈페스티벌,
            </div>
          </div>
        </div>
        <div class="notice-title-wrap">
          <div class="notice por">
            <input type="checkbox" name="chk1" value="1" id="chk1" />
            <label for="chk1">최신글</label>
          </div>
          <div class="notice por">
            <input
              type="checkbox"
              name="user_input"
              value="user_input"
              id="user_input"
            />
            <label for="user_input">태그 사용안함</label>
          </div>
        </div>
      </div>
      <div class="not-content-view">
        <div class="">에디트 영역입니다.</div>
        <div class="tal ft16 lh17 c02">
          <textarea style="width:100%; min-height:300px; padding:10px;">
sdfsdf</textarea
          >
        </div>
      </div>
      <ul class="view_guel">
        <li class="por">
          <div class="ft16 f400 poa vg_txt">
            <i class="v_up">이전</i><span>이전글</span>
          </div>
          <div class="ft16 vg_tit">
            <a href="#" class="c01">백예린X구원찬,오늘(26일)협업곡 발표</a>
          </div>
          <div class="ft14 ftm c05 poa vg_date">2018.12.05</div>
        </li>

        <li class="por">
          <div class="ft16 f400 poa vg_txt">
            <i class="v_down">다음</i><span>다음글</span>
          </div>
          <div class="ft16 vg_tit">
            <a href="#" class="c01">백예린X구원찬,오늘(26일)협업곡 발표</a>
          </div>
          <div class="ft14 ftm c05 poa vg_date">2018.12.05</div>
        </li>
      </ul>
    </div>

    <!--어드민용 버튼그룹 -->
    <div class="button-wrap">
      <a href="" class="basic bg-red">관리자</a>
      <a href="./news_write.php" class="basic bgb">글쓰기</a>
      <a href="./news_modify.php" class="basic bgb">수정</a>
      <a href="" class="basic bgb">삭제</a>
    </div>
    <div class="btns_wrap pt60">
      <a href="#" class="br50 ft18 fwb c00 btns btns01">목록</a>
    </div>
  </div>
</div>

<script>
  $("input#user_input").click(function() {
    if ($("#user_input:checked").val() == "user_input") {
      // 활성화
      $("input#user_pr_v1").attr("disabled", true);
    } // 비활성화
    else {
      $("input#user_pr_v1").removeAttr("disabled");
    }
  });
</script>

<!--//notice-->

<? require "../inc/footer.php"; ?>
