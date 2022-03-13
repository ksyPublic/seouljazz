<? require "../inc/header.php"; ?>
<!--서브 헤더-->

<div class="sub-header-wrap">
  <div class="inner suv-pdt">
    <h1>SPONSOR</h1>
    <p>서울재즈페스티벌과 함께합니다</p>
  </div>
</div>
<div class="suv-title-wrap">
  <div class="inner suv-title">
    <ul class="suv-tt-list">
      <!-- list-->
      <li><a href="">Home</a></li>
      <li><a href="">Sponsor</a></li>
    </ul>
    <p class="suv-p">제휴 협찬 단체구매 문의</p>
  </div>
</div>
<div class="write_wrap">
  <div class="inner">
    <div class="write-form-wrap">
      <h1 class="ft24">Contact Us</h1>
      <form>
        <div class="write-view">
          <div class="write-form">
            <label>성함</label>
            <input type="text" />
          </div>
          <div class="write-form">
            <label>연락처</label>
            <input type="text" />
            <span>'-'없이 작성해주세요</span>
          </div>
          <div class="write-form">
            <label>이메일</label>
            <input
              type="text"
              name="str_email01"
              id="str_email01"
            />
            @
            <input
              type="text"
              name="str_email02"
              id="str_email02"
              disabled
              value="naver.com"
            />
            <select
              name="selectEmail"
              id="selectEmail"
            >
              <option value="1">직접입력</option>
              <option value="naver.com" selected>naver.com</option>
              <option value="hanmail.net">hanmail.net</option>
              <option value="hotmail.com">hotmail.com</option>
              <option value="nate.com">nate.com</option>
              <option value="yahoo.co.kr">yahoo.co.kr</option>
              <option value="empas.com">empas.com</option>
              <option value="dreamwiz.com">dreamwiz.com</option>
              <option value="freechal.com">freechal.com</option>
              <option value="lycos.co.kr">lycos.co.kr</option>
              <option value="korea.com">korea.com</option>
              <option value="gmail.com">gmail.com</option>
              <option value="hanmir.com">hanmir.com</option>
              <option value="paran.com">paran.com</option>
            </select>
          </div>

          <div class="write-form">
            <label class="mgt30 mgb20">문의내용</label>
            <textarea placeholder="내용을 입력해주세요"></textarea>
          </div>
          <div class="more-btn-wrap">
            <button class="submit">전송</button>
            <button class="cancel">취소</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  //이메일 입력방식 선택
  $("#selectEmail").change(function() {
    $("#selectEmail option:selected").each(function() {
      if ($(this).val() == "1") {
        //직접입력일 경우
        $("#str_email02").val("");
        //값 초기화
        $("#str_email02").attr("disabled", false);
        //활성화
      } else {
        //직접입력이 아닐경우
        $("#str_email02").val($(this).text());
        //선택값 입력
        $("#str_email02").attr("disabled", true); //비활성화
      }
    });
  });
</script>

<? require "../inc/footer.php"; ?>
