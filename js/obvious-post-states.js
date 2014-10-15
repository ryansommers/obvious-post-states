jQuery(document).ready(function( $ ) {
	
	if (($('span.post-state').length != 0) && ($('span.post-state').parent().is('td') == false)) {
		$('span.post-state').each(function() {
			$(this).insertBefore($(this).parent());
		});
	}

});