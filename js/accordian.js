$(document).ready(function(){

$("#menu-sidebar_menu_1 > li > a").click(function(){

	if(false == $(this).next().is(':visible')) {
		$('#menu-sidebar_menu_1 ul').slideUp(300);
	}
	$(this).next().slideToggle(300);
});

$('#menu-sidebar_menu_1 ul:eq(0)').show();
});
