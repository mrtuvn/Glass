$(document).ready(function() {
	
	$(".main a").click(function() {
	
		$(this).find('ul:first').css({visibility: "visible", display: "block"});
	
		});
});