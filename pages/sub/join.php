<? require "../inc/header.php"; ?>
<!--회원가입-->
<div class="sign-up-wrap">
    <div class="inner">
        <div class="sign-up-title">
            <h1>일반 회원가입</h1>
            <span>General Membership</span>
        </div>
        <div class="sign-box-wrap clr">
           <div class="basic">
                <input type="checkbox" name="checkall" value="1" id="checkall">
                <label for="checkall">전체선택</label>
           </div>
           <div class="basic border-box">
                <input type="checkbox" name="chk" value="2" id="chk1">
                <label for="chk1">회원가입약관의 내용에 동의합니다</label>
           </div>
           <!--회원가입약관 내용-->
           <div class="border-box-textArea">회원가입약관 내용</div>

           <div class="basic border-box">
                <input type="checkbox" name="chk" value="3" id="chk2">
                <label for="chk2">개인정보처리방침안내의 내용에 동의합니다</label>
           </div>
            <!--개인정보처리방침안내의 내용-->
            <div class="border-box-textArea">개인정보처리방침안내 내용</div>
            <div class="sign-il-btn ">
                <a href="./join-Us.php" class="bak3">
                    회원가입
                </a>
            </div>
        </div>
    </div>
</div>
 <!--전체선택-->
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
        });
      </script>
<!-- //회원가입-->
<? require "../inc/footer.php"; ?>
