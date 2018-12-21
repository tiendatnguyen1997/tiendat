function open_search_modal(){
	var modal_search = $("#search-modal");
	var form_search = $("#search").clone();
	$("#search-modal .modal-body").html(form_search);
	modal_search.modal();
}

function animate(element,animation){
	$(element).addClass('animated ' + animation);
	var wait = setTimeout(function(){
		$(element).removeClass('animated ' + animation);
	},1000);
}

$(document).ready(function(){
	if($("#post-detail").length > 0){
		$(".post-dropdown").hide();
		$(".post-info").show();
		$("#map").hide();

		//Di chuyển phần tin túc xuống dưới ở màn hình nhỏ
		var sc_width = $(window).width();
		if(sc_width <= 992){
			var news = $("#md-news").clone();
			$("#md-news").remove();
			$("#sm-news").html(news);
		}

		$(".slider-img img").click(function(){
			var iamges = $(this).clone();
			$(".slider-img img").removeClass("focus-img");
			$(this).addClass("focus-img");
			$(".main-img").html(iamges);
			$(".main-img img").addClass("animated");
			$(".main-img img").addClass("fadeIn");
		});
	}

	$("#post-info").click(function(){
		$(".post-dropdown").slideUp();
		$(".post-info").slideDown();
		$(".contact-info .sub-title").removeClass("active");
		$(this).addClass("active");
	});

	$("#post-contact").click(function(){
		$(".post-dropdown").slideUp();
		$(".post-contact").slideDown();
		$(".contact-info .sub-title").removeClass("active");
		$(this).addClass("active");
	});

	$("#post-slider").click(function(){
		$("#map").slideUp();
		$(".post-slider").slideDown();
		$(".slider-maps .sub-title").removeClass("active");
		$(this).addClass("active");
	});

	$("#post-maps").click(function(){
		$("#map").slideDown();
		$(".post-slider").slideUp();
		$(".slider-maps .sub-title").removeClass("active");
		$(this).addClass("active");
	});

	$("#view-more-desc").click(function(){
		$(this).hide();
		$(".content-desc").css({"height":"auto"});
	});
});