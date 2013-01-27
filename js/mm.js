;
$(function(){

$('#menu-mm1')
	.on('mouseenter', '> li', function() {
		var $this = $(this).index(),
			banner = $('#masthead h1'),
			matrix = [null,'wedding',null,'homebaker','social',null];
		if (!!matrix[$this].length) {
			banner.addClass(matrix[$this]);
		}
	})
	.on('mouseleave', '> li', function() {
		$('#masthead h1')[0].className = '';
	});

});
