(function() {

	$.fn.partial = function(template) {

		var element = this[0];

		$.get(template, function(data) {		
			$(element).replaceWith(data);
		});
	};

}());