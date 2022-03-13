<? require "../inc/header.php"; ?>
<!--서브 헤더-->

<div class="sub-header-wrap">
  <div class="inner suv-pdt">
    <h1>GALLERY</h1>
    <p>서울재즈페스티벌과 함께합니다</p>
  </div>
</div>
<div class="suv-title-wrap">
  <div class="inner suv-title">
    <ul class="suv-tt-list">
      <!-- list-->
      <li><a href="">Home</a></li>
      <li><a href="">Gallery</a></li>
      <li><a href="">Video</a></li>
    </ul>
    <p class="suv-p">VIDEO</p>
  </div>
</div>
<div class="contents-box-wrap bkc03">
  <div class="inner clr">
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
    <div class="photo_wrap grid">
      <div class="photo_contents">
        <a data-id="gb4HwYt57Fg" class="youtube_movie" style="cursor: pointer">
          <div class="img-box">
            <img src="../../images/sample_poster.jpg" />
          </div>
          <div class="photo-name">
            <p class="ft18">Seoul Jazz Festival 2019</p>
            <h1 class="ft14">서울재즈페스티벌BMW</h1>
          </div>
        </a>
      </div>
      <div class="photo_contents">
        <a data-id="SlzHgkTzwg" class="youtube_movie" style="cursor: pointer">
          <div class="img-box">
            <img src="../../images/sample_poster.jpg" />
          </div>
          <div class="photo-name">
            <p class="ft18">Seoul Jazz Festival 2019</p>
            <h1 class="ft14">서울재즈페스티벌BMW</h1>
          </div>
        </a>
      </div>
      <div class="photo_contents">
        <a data-id="aB3OPVfTuWU" class="youtube_movie" style="cursor: pointer">
          <div class="img-box">
            <img src="../../images/sample_poster.jpg" />
          </div>
          <div class="photo-name">
            <p class="ft18">Seoul Jazz Festival 2019</p>
            <h1 class="ft14">서울재즈페스티벌BMW</h1>
          </div>
        </a>
      </div>
      <div class="photo_contents">
        <a data-id="mlvwuRcqFzI" class="youtube_movie" style="cursor: pointer">
          <div class="img-box">
            <img src="../../images/sample_poster.jpg" />
          </div>
          <div class="photo-name">
            <p class="ft18">Seoul Jazz Festival 2019</p>
            <h1 class="ft14">서울재즈페스티벌BMW</h1>
          </div>
        </a>
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

<script type="text/javascript">
  //시작
  $(document).ready(function() {
    $("#video_pop > a").click(function() {
      //팝업 닫기
      $("#video_pop .pop_con").empty();
      $("#video_pop, div.movie").fadeOut();
      $(".ov-bg, div.movie").fadeOut();
    });
    //영문 동영상
    $(".youtube_movie").click(function() {
      var vdurl = $(this).attr("data-id");
      if ($(window).width() < 900) {
        $(this)
          .attr("href", "https://youtu.be/" + vdurl)
          .attr("target", "_blank");
      } else {
        $(this)
          .attr("href", "#none")
          .attr("target", "_self");
        $("#video_pop .pop_con")
          .css("height", 450)
          .html(
            '<iframe width="" height="" src="https://www.youtube.com/embed/' +
              vdurl +
              '?rel=0&amp;showinfo=0&amp;ecver=1&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>'
          );
        $("#video_pop .pop_p") 
          .css("height", 150)
          .html(
            ''
          )
        
        $("#video_pop, div.movie").fadeIn();
        $(".ov-bg").fadeIn();
      }
    });
  });
  //끝
</script>

<script>
$(window).load(function(){
	var $container = $('.grid');
	// initialize
	$container.masonry({
    itemSelector: '.photo_contents',
    fitWidth: false,
	});
});
</script>

<? require "../inc/footer.php"; ?>
