(function($) {
	$(function() {
		
		$(".entry-content svg").each(function() {
			
			var $svg = $(this);
			
			$svg.find("title").each(function() {
			
				var $title = $(this),
					$node = $title.parent();
				
				$node.attr("title", $node.attr("title") || $title.text());
				$title.remove();
			
			});

		});
		
		$("svg [title]").tooltipster();
		
	});
}(jQuery))
