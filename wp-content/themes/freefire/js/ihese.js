// 提示
function Showtips() {
    var _a = $(".atips");
    _a.bind('mouseenter', function() {
        _a.parent("li").find(".tip").remove();
        var _t = $(this),
        text = _t.data("tips");
        _t.parent("li").append('<div class="tip animated"><div class="tip-arrow"></div><div class="tip-inner">'+text+'</div></div>');
        _t.parent("li").find(".tip").addClass('fadeInDown');
        return false;
    });
    _a.bind('mouseleave', function() {
        var _t = $(this);
        _t.parent("li").find(".tip").remove('');
        return false;
    });
}

Showtips();

// 代码高亮
hljs.initHighlightingOnLoad();
