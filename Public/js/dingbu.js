$(document).ready(function() {
	$(".side ul li").hover(function() {
		$(this).find(".sidebox").stop().animate({
			"width": "124px"
		}, 200).css({
			"opacity": "1",
			"filter": "Alpha(opacity=100)",
			"background": "#cccccc",
			
		})
	}, function() {
		$(this).find(".sidebox").stop().animate({
			"width": "54px"
		}, 200).css({
			"opacity": "0.8",
			"filter": "Alpha(opacity=80)",
			"background": "#000"
		})
	});

});
//回到顶部
function goTop() {
	$('html,body').animate({
		'scrollTop': 0
	}, 1500); //滚回顶部的时间，越小滚的速度越快~
}