$(function(){
	$(".menuicon").on('click', function(){
		var $sidebar = $('.sidebar'),
			$menuicon = $(".menuicon i");
		if($sidebar.hasClass('slideLeft')){
			$sidebar.removeClass('slideLeft');
			$menuicon.removeClass("icon-cancel").addClass('icon-menu');
			setTimeout(function(){
				$sidebar.hide();
				$(document).off('touchmove');
			},300);
		}else{
			$sidebar.show();
			$menuicon.removeClass('icon-menu').addClass("icon-cancel");
			$sidebar[0].offsetHeight;
			$sidebar.addClass('slideLeft');
			$(document).on('touchmove', function(e){e.preventDefault();});
		}
	});

	var timer;
	(function getkoto(){
	    var loader = document.createElement('script');
	    loader.setAttribute('src', 'http://api.hitokoto.us/rand?encode=jsc&fun=echokoto');
	    $("#loadbox").html(loader);
	    timer=setTimeout(getkoto,5000);
	})();
});

function echokoto(result){
    var hc = eval(result);
    document.getElementById("hitokoto").innerHTML = hc.hitokoto;
}