//시작
$(document).ready(function(){
			$('#video_pop > a').click(function(){	//팝업 닫기
				$('#video_pop .pop_con').empty();
				$('#video_pop, div.movie').fadeOut();
				$('.ov-bg, div.movie').fadeOut();
			});


			//영문 동영상
		$('#youtube_movie').click(function(){
			var vdurl = $(this).attr('data-id');
			if($(window).width() < 900){
				$(this).attr('href','https://youtu.be/'+vdurl).attr('target','_blank');
			}else{
				$(this).attr('href','#none').attr('target','_self');
				$('#video_pop .pop_con').css('height',400).html('<iframe width="" height="" src="https://www.youtube.com/embed/'+vdurl+'?rel=0&amp;showinfo=0&amp;ecver=1&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>');
				$('#video_pop, div.movie').fadeIn();
				$('.ov-bg').fadeIn();
			}
		});

});
//끝