(function($) {
	var current = -1;
	var contentsID = ["#content1", "#content2", "#content3", "#content4", "#sns"];

	var isScroll = false;

	var onAniDone = function() {
		isScroll = false;
	}

	var freeScroll = false;

	$('body').on('DOMMouseScroll mousewheel', function(event){
		var isDown = event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0;

		if(!isScroll) {

			if( isDown ) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
			    //down
			    if(current < contentsID.length - 1) {
			    	isScroll = true;
				    $('html, body').animate({
				        scrollTop: $(contentsID[++current]).offset().top
				    }, 1000, onAniDone);
			    } 
			} else {
				if(current > 0) {
			    	isScroll = true;
					$('html, body').animate({
				        scrollTop: $(contentsID[--current]).offset().top
				    }, 1000, onAniDone);
				}
			}

			// console.log(current);
		}

		freeScroll = !isDown && current === 0;

		if(!freeScroll) {
			event.preventDefault();
			event.stopPropagation();
			return false;
		}
	});

})(jQuery);

(function($) {

	$(".sc-nav li:not(.sc-nav-legend) a").click(function(e) {
		var a = $(this);
		var href = a.attr("href");

		if(href !== "") return;

		$('#underconstruction').modal();

		e.preventDefault();
		e.stopPropagation();
	})

})(jQuery);

(function($) {
    var message = $('#pwebcontact1_msg');
    message.bind("DOMSubtreeModified",function(){
    	var value = message.text();
        if(value === "신청이 완료되었습니다") {
            $("#success").modal();
            pwebContact1.toggleForm(0);
            
        }

    });
    
    var container = $("#pwebcontact1_container");
    
    var firstRow = container.find(".pweb-fields .pweb-row").first();
    var dobRowNormal = container.find(".pweb-fields .pweb-row:nth-child(2n)").first().hide();
    var dobRowLunar = container.find(".pweb-fields .pweb-row:nth-child(3n)").first();
    var fouRow = container.find(".pweb-fields .pweb-row:nth-child(5n)").first();
    
    var sendBtn = container.find("#pwebcontact1_send");
    
    dobRowLunar.after("<div class='pweb-row radio-button'><label>음력</label><input type='radio' name='yeartype' id='ypLunar' checked/><label>양력</label><input type='radio' name='yeartype' id='ypNormal' value/></div>");
    fouRow.after("<div class='pweb-row form-optional'>선택입력항목</div>");
    firstRow.before("<div class='pweb-row form-require'>필수항목</div>");
    
    var radioN = container.find("#ypNormal");
    var radioL = container.find("#ypLunar");
    
    radioN.click(function() {
        dobRowLunar.hide();
        dobRowLunar.val("");
        dobRowNormal.show();
    });
    radioL.click(function() {
        dobRowLunar.show();
        dobRowNormal.hide();
        dobRowNormal.val("");
    });
    
})(jQuery);



(function($) { 
	$('#the-slider').bjqs({
		height : 800,
		width : 920,
		responsive : true,

		animtype : 'fade',
		animduration : 0, // how fast the animation are
		animspeed : 3000, // the delay between each slide
		automatic : true, // automatic

		// control and marker configuration
		showcontrols : true, // show next and prev controls
		centercontrols : true, // center controls verically
		nexttext : 'Next', // Text for 'next' button (can use HTML)
		prevtext : 'Prev', // Text for 'previous' button (can use HTML)
		showmarkers : true, // Show individual slide markers
		centermarkers : true, // Center markers horizontally

		// interaction values
		keyboardnav : true, // enable keyboard navigation
		hoverpause : true, // pause the slider on hover

		// presentational options
		usecaptions : true, // show captions for images using the image title tag
		randomstart : false, // start slider at random slide
		responsive : true // enable responsive capabilities (beta)
	});
})(jQuery);