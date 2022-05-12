// 탭 ----------------------------------------- /
var menu = $('.menu-tab li');
var content = $('.tabs');

menu.click(function (e) {
    e.preventDefault();
    var targetIdx = $(this).index();
    content.hide();
    content.eq(targetIdx).show();
    menu.find('a').removeClass('active');
    $(this).find('a').addClass('active');
});
content.eq(0).show();