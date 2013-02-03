;
$(function(){

$('#menu-mm1')
	.on('mouseenter', '> li', function() {
		var $this = $(this).index(),
			banner = $('#masthead h1'),
			matrix = [null,'wedding',null,'homebaker','social',null];
		if (!!matrix[$this]) {
			banner.addClass(matrix[$this]);
		}
	})
	.on('mouseleave', '> li', function() {
		$('#masthead h1')[0].className = '';
	});

if ($('#subnav').length) {
	$($('#subnav > ul > li')[0].childNodes[0]).remove();
	$('#subnav a').wrapInner('<span />');
}

if (window.outerWidth < 650) {
	$('.fm-form *').removeAttr('style');
}

});

