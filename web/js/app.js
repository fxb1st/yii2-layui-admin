/* jshint esversion: 6 */
$(function () {
    $('.layui-header .layui-nav li a').click((item)=>{
        $('.layui-header .layui-nav li').removeClass('layui-this');
        $(item.target).parent().addClass('layui-this');
    });
});
