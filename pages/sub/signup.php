<? require "../inc/header.php"; ?>
<!--회원가입-->
<div class="sign-up-wrap">
    <div class="inner">
        <div class="sign-up-title">
            <h1>회원가입</h1>
            <span>Terms of Access</span>
        </div>
        <div class="sign-box-wrap clr">
            <div class="box-sizeing">
                <h2>회원가입 안내</h2>
                <span>
                    서울재즈페스티벌은 회원 분들께 다양한 혜택을 드리기 위해 <br/>간편회원가입을 진행하고 있습니다.
                </span>
                <span>
                    본 아래의 이용약관 과 개인정보처리방침을 읽어주세요.
                </span>
            </div>
            <div class="box-sizeing bak10">
                <h2>SNS 계정 회원가입</h2>
                <span>SNS 계정으로 간편하게 회원 가입하실 수 있습니다. 단, 일부 서비스와 회원 혜택에 제한이 있을 수 있습니다.</span>
                <div class="sns-btn-wrap">
                    <ul>
                        <a href=""><li class="bg1"><span><img src="../../images/main/bg1.png" /></span>페이스북 회원가입</li></a>
                        <a href=""><li class="bg2"><span><img src="../../images/main/bg2.png" /></span>카카오로 회원가입</li></a>
                        <a href=""><li class="bg3"><span><img src="../../images/main/bg3.png" /></span>네이버 회원가입</li></a>
                        <a href=""><li class="bg4"><span><img src="../../images/main/bg4.png" /></span>구글 회원가입</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sign-box-wrap clr">
           <div class="basic mgt20">
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
<!-- //회원가입-->
<? require "../inc/footer.php"; ?>
