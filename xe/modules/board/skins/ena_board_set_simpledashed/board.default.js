jQuery(function($) {
	// delete the border for the last row
	$('.board_list tr:last-child>td').css('border','0');
	$('.board_read .exOut table tr:last-child>th').css('border','0');
	$('.board_read .exOut table tr:last-child>td').css('border','0');
	$('.exForm table tr:last-child>th').css('border','0');
	$('.exForm table tr:last-child>td').css('border','0');

	// hide last tag
	$('.read_footer .tags span:last-child').hide();
	// display/hide box
	
	// add class to the parent category 
	$('.cTab>li>ul>li.on_').parents('li:first').addClass('on');
	// delete the margin-top for the first child of the ccomments
	$('.feedback .xe_content>*:first-child').css('margin-top','0');
	// category scroll
	$(".category").on('mousewheel',function(e){
		var wheelDelta = e.originalEvent.wheelDelta;
		if(wheelDelta > 0){
			$(this).scrollLeft(-wheelDelta + $(this).scrollLeft());
		}else{
			$(this).scrollLeft(-wheelDelta + $(this).scrollLeft());
		}});
		
	// category scroll 2
	var step = 25;
   var scrolling = false;
// Wire up events for the 'scrollUp' link:
$("#scrollLeft").bind("click", function(event) {
    event.preventDefault();
    // Animates the scrollTop property by the specified
    // step.
    $("#header_category").animate({
        scrollLeft: "-=" + step + "px"
    });
}).bind("mouseover", function(event) {
    scrolling = true;
    scrollContent("up");
}).bind("mouseout", function(event) {
    scrolling = false;
});


$("#scrollRight").bind("click", function(event) {
    event.preventDefault();
    $("#header_category").animate({
        scrollLeft: "+=" + step + "px"
    });
}).bind("mouseover", function(event) {
    scrolling = true;
    scrollContent("down");
}).bind("mouseout", function(event) {
    scrolling = false;
});

function scrollContent(direction) {
    var amount = (direction === "up" ? "-=1px" : "+=1px");
    $("#header_category").animate({
        scrollLeft: amount
    }, 1, function() {
        if (scrolling) {
            scrollContent(direction);
        }
    });
}


});