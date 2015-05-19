//Button clicks in servicies band ----------
$(function(){
	$("#setupBtn").click(function(){
        if($("#setupLess").css("display")!='none') {
        	$("#setupMore").show();
        	$("#setupLess").hide();
        	$(this).html("Show Less");
        } else if ($("#setupMore").css("display")!="none"){
        	$("#setupLess").show();
        	$("#setupMore").hide();
        	$(this).html("Show More");
        } 
    });
});


$(function(){
	$("#lessonBtn").click(function(){
        if($("#lessonLess").css("display")!='none') {
        	$("#lessonMore").show();
        	$("#lessonLess").hide();
        	$(this).html("Show Less");
        } else if ($("#lessonMore").css("display")!="none"){
        	$("#lessonLess").show();
        	$("#lessonMore").hide();
        	$(this).html("Show More");

        } 
    });
});


$(function(){
	$("#repairBtn").click(function(){
        if($("#repairLess").css("display")!='none') {
        	$("#repairMore").show();
        	$("#repairLess").hide();
        	$(this).html("Show Less");
        } else if ($("#repairMore").css("display")!="none"){
        	$("#repairLess").show();
        	$("#repairMore").hide();
        	$(this).html("Show More");
        } 
    });
});

// ---------------- window resize code. --------------------

$(function(){
	var $window = $(window),
	$navItems = $(".list.nav"),
	$logoImage = $("#breezeLogo");

	$window.resize(function(){
		if ($window.width()<1275) {
			$navItems.hide();
			$logoImage.css("margin-right", "500px");
		}else{
			$navItems.show();
		}
	}).trigger('resize');
});


// -------------- Testimonials Slideshow ---------------------
$(function(){
    var currentIndex = 0;
    var items = $(".band.testimonies .slideshow.container div");
    var itemAmt = items.length;

    $("#slideshowNext").click(function(){
        var item = $(".band.testimonies .slideshow.container div").eq(currentIndex);
        items.hide();
        currentIndex += 1;
        item = $(".band.testimonies .slideshow.container div").eq($currentIndex);
        item.show();
    });

});

