<? require "../inc/header.php"; ?>
<!--회원가입-->
<div class="sign-up-wrap">
  <div class="inner">
    <div class="sign-up-title">
      <h1>개인정보입력</h1>
      <span>personal information</span>
    </div>
    <div class="joinUs-wrap">
      <div class="join-input clr">
        <label>아이디</label>
        <input type="text" />
      </div>
      <div class="info-er">
        영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.
      </div>
      <div class="join-input clr">
        <label>비밀번호</label>
        <input type="password" />
      </div>
      <div class="join-input clr">
        <label>비밀번호 확인</label>
        <input type="password" />
      </div>
      <div class="join-input clr">
        <label>성함</label>
        <input type="text" />
      </div>
      <div class="join-input clr">
        <label>E-mail</label>
        <input type="text" />
      </div>
      <div class="join-input clr">
        <label>휴대폰번호</label>
        <input type="text" />
      </div>
      <span class="divider"></span>
      <div class="mgt5">
        <div class="notice">
          <input type="checkbox" name="1" value="checked" id="chk1" />
          <label for="chk1">서울재즈페스티벌의 수신정보 메일을 받으시겠습니까?</label>
        </div>
        <div class="notice">
            <input type="checkbox" name="2" value="checked2" id="chk2" />
            <label for="chk2">서울재즈페스티벌의 이벤트정보 수신 문자메세지를 받으시겠습니까?</label>
        </div>
      </div>
      <span class="divider mgt10"></span>
      <div class="mgt20">
            <!-- 자동등록방지 넣어주세요 -->
            자동등록방지 영역입니다.
        </div>
        <div class="sign-il-btn ">
                <a href="./join-save.php" class="bak3">
                    가입완료
                </a>
            </div>
    </div>
  </div>
</div>
<!--전체선택-->
<!-- //회원가입-->
<? require "../inc/footer.php"; ?>
