$(function () {
  setTimeout(function(){
		$('.start p').fadeIn(1600);
	},500); //0.5秒後にロゴをフェードイン!
	setTimeout(function(){
		$('.start').fadeOut(500);
	},2500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！

	var topBtn = $('#page-top');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});

	$('.flow-show-box-left').click(function() {
		$(this).siblings('.flow-show-box-right').slideToggle();
		$(this).find('.open-tag').toggleClass('trans');
		$('.flow-show-box-left').not($(this)).siblings('.flow-show-box-right').slideUp();
		$('.flow-show-box-left').not($(this)).find('.open-tag').removeClass('trans');
	});

	$('.last-ques-box').click(function() {
		$(this).siblings('.last-ques-box-down').slideToggle();
		$(this).find('.open-tag').toggleClass('trans');
	});
	
})