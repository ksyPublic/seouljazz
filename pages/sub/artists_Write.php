<? require "../inc/header.php"; ?>

<!--서브 헤더-->
<div class="sub-header-wrap">
  <div class="inner suv-pdt">
    <h1>ARTISTS</h1>
    <p>서울재즈페스티벌과 함께합니다</p>
  </div>
</div>
<div class="suv-title-wrap">
  <div class="inner suv-title">
    <ul class="suv-tt-list">
      <!-- list-->
      <li><a href="">Home</a></li>
      <li><a href="">Artists</a></li>
    </ul>
    <p class="suv-p">ARTISTS</p>
  </div>
</div>

<!-- 컨텐츠 시작 --->
<div class="contents-box-wrap bkc03">
  <div class="inner">
    <div class="view_txt por bkc04">
        <form>
      <div class="view_tit ft26 f400 lh14 clr">
        <!-- <span class="label yel mr15">artists Name</span> -->
        <!--영문 한글 필수입력 전환 -->
        <div class="modify-title-wrap">
            <label>영문입력</label>
            <input type="text" placeholder="영문 아티스트를 입력해주세요"/>
        </div>
        <div class="modify-title-wrap">
            <label class="mlt10">한글입력</label>
            <input type="text" placeholder="한글아티스트를 입력해주세요" />
        </div>
      </div>
      <div class="view_date ftm ft18 c02 poa">DatePicker</div> 
      <!--DatePicker가 있어야함-->
    </div>
    <div class="ptb60 prl60 view_contents">
     글쓰기 에디트 영역
      <!-- //view_chum -->
    </div>
    <!-- //view_contents -->
    </form>
    

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
    <div class="button-wrap">
      <a href="" class="basic bg-red">관리자</a>
      <a href="./artists_Write.php" class="basic bgb">글쓰기</a>
      <a href="" class="basic bgb">저장</a>
      <a href="" class="basic bgb">삭제</a>
    </div>
    <div class="btns_wrap pt60">
      <a href="#" class="br50 ft18 fwb c00 btns btns01">목록</a>
    </div>
  </div>
</div>

<? require "../inc/footer.php"; ?>
