var COM = {};

// 订单页面菜单切换
COM.nav_change = function(){

	$(".nav-order").find("a").click(function(){
		var _that = $(this);
		$(".nav-order").find("a").removeClass("active");
		_that.addClass("active");
		if (_that.parent("div").hasClass("nav-get")) {
			$("#order-get").removeClass("js-ds-none");
			$("#order-pay").addClass("js-ds-none");
		} else {
			$("#order-get").addClass("js-ds-none");
			$("#order-pay").removeClass("js-ds-none");
		}
	});

},

// 打开登陆注册
COM.show_entrance = function(id, _type) {

    $(id).show();
    setTimeout(function() {
        $(id).removeClass("modal-out").addClass("modal-in");
    }, 50);
    $("body").attr("data-type", _type);

},

// 关闭登陆注册
COM.close_entrance = function() {

    $(".close").click(function() {
        setTimeout(function() {
            $(".entrace").removeClass("modal-in").addClass("modal-out");
        }, 50);
    });

},

COM.banner_switch = function () {
    var swiper = new Swiper('.m-banner', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
},

window.COM = COM;

$(function(){

	COM.nav_change();
	COM.close_entrance();
  COM.banner_switch();

});
