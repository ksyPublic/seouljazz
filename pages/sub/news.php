<? require "../inc/header.php"; ?>
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
      <li><a href="">CustomerCenter</a></li>
      <li><a href="">NEWS</a></li>
    </ul>
    <p class="suv-p">NEWS</p>
  </div>
</div>
<div class="contents-box-wrap bkc03">
  <div class="inner txtCenter">
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
    <script></script>
    <div class="news-wrapper clr mgt50">
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
      <div class="news">
        <input type="checkbox" name="checkall" value="ALL" id="checkall" />
        <label for="checkall" class="Allchk">전체선택</label>
      </div>
      <div class="grid">
        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="./news_view.php">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>
              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
                <div class="notice init">
                  <input type="checkbox" name="chk" value="chk1" id="chk1" />
                  <label for="chk1" class="ft14">선택</label>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>

              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>
              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
                <div class="notice init">
                  <input type="checkbox" name="chk" value="chk1" id="chk1" />
                  <label for="chk1" class="ft14">선택</label>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>

              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>
              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
                <div class="notice init">
                  <input type="checkbox" name="chk" value="chk1" id="chk1" />
                  <label for="chk1" class="ft14">선택</label>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>

              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>
              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
                <div class="notice init">
                  <input type="checkbox" name="chk" value="chk1" id="chk1" />
                  <label for="chk1" class="ft14">선택</label>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>

              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를... 음색 천재들이 만났다. 가수 백예린과
                  구원찬이 26일 오후 6시에 협업곡 ‘너는 어떻게’ 를 발표한다.
                  구원찬은 지난 21일 선공개한 30초 분량의 티저를... 음색
                  천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에 협업곡
                  ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한 30초
                  분량의 티저를... 음색 천재들이 만났다. 가수 백예린과 구원찬이
                  26일 오후 6시에 협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은
                  지난 21일 선공개한 30초 분량의 티저를... 음색 천재들이 만났다.
                  가수 백예린과 구원찬이 26일 오후 6시에 협업곡 ‘너는 어떻게’ 를
                  발표한다. 구원찬은 지난 21일 선공개한 30초 분량의 티저를...
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>
              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
                <div class="notice init">
                  <input type="checkbox" name="chk" value="chk1" id="chk1" />
                  <label for="chk1" class="ft14">선택</label>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>

              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>
              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를...
                </span>
                <div class="notice init">
                  <input type="checkbox" name="chk" value="chk1" id="chk1" />
                  <label for="chk1" class="ft14">선택</label>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="new-wrap">
          <div class="news-size-wrap">
            <a href="">
              <div class="news-images-box">
                <img src="../../images/suv_bg.png" />
              </div>

              <div class="news-bot-contents">
                <p class="">백예린X구원찬, 오늘(26일) 협업곡 발표</p>
                <ul>
                  <li><img src="../../images/suv/datapicker-icon.png" /></li>
                  <li class="ft12 ftw400">2018.12.26</li>
                  <li class="mlt10">
                    <img src="../../images/suv/tag-icon.png" />
                  </li>
                  <li class="ft12 ftw400">백예린</li>
                </ul>
                <span class="ft13 mgt15 dpl">
                  음색 천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에
                  협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한
                  30초 분량의 티저를... 음색 천재들이 만났다. 가수 백예린과
                  구원찬이 26일 오후 6시에 협업곡 ‘너는 어떻게’ 를 발표한다.
                  구원찬은 지난 21일 선공개한 30초 분량의 티저를... 음색
                  천재들이 만났다. 가수 백예린과 구원찬이 26일 오후 6시에 협업곡
                  ‘너는 어떻게’ 를 발표한다. 구원찬은 지난 21일 선공개한 30초
                  분량의 티저를... 음색 천재들이 만났다. 가수 백예린과 구원찬이
                  26일 오후 6시에 협업곡 ‘너는 어떻게’ 를 발표한다. 구원찬은
                  지난 21일 선공개한 30초 분량의 티저를... 음색 천재들이 만났다.
                  가수 백예린과 구원찬이 26일 오후 6시에 협업곡 ‘너는 어떻게’ 를
                  발표한다. 구원찬은 지난 21일 선공개한 30초 분량의 티저를...
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>

    <div class="button-wrap">
      <a href="" class="basic bg-red">관리자</a>
      <a href="./news_write.php" class="basic bgb">글쓰기</a>
      <a href="./news_modify.php" class="basic bgb">수정</a>
      <a href="" class="basic bgb">삭제</a>
    </div>
    </div>

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


<script>
// vanilla JS
// init with element
var grid = document.querySelector('.grid');
var msnry = new Masonry( grid, {
	// options...
    itemSelector: '.new-wrap',
    columnWidth: 320,
    fitWidth: false
});

// init with selector
var msnry = new Masonry( '.grid', {
	// options...

});
</script>


<? require "../inc/footer.php"; ?>
