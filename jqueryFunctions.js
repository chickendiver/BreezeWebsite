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
	var wind = $(window),
	navItems = $(".list.nav"),
	logoImage = $("#breezeLogo"),
    phoneNumber = $("#phoneNumber");


	wind.resize(function(){
		if (wind.width()<1275) {
		  navItems.hide();
		  //logoImage.css("margin-right", "500px");
          //phoneNumber.css("margin-left", "200px");
		}else{
		  navItems.show();
		}
	}).trigger('resize');
});


// -------------- Testimonials Slideshow ---------------------
$(function(){
    var currentIndex = 0;
    var items = $(".band.testimonies .slideshow.container div");
    var itemAmt = items.length;
    var item = $(".band.testimonies .slideshow.container div").eq(currentIndex);
    items.hide();
    item.show();


    $("#slideshowPrev").click(function(){
        
        
        if (currentIndex == 0){
            currentIndex = itemAmt;
        } 
        currentIndex -= 1;
        items.hide();
        item = items.eq(currentIndex);
        item.show();
        item.animate({left: '250px'});        
    });

    $("#slideshowNext").click(function(){
        
        currentIndex += 1;
        if (currentIndex == itemAmt){
            currentIndex = 0;
        }
        items.hide();
        item = items.eq(currentIndex);
        item.show();        
    });

    $("#slideOff").click(function(){
        item=items.eq(currentIndex);
        $('#slideTest').animate({
            marginLeft: '500px',       //this isnt working but opacity
            opacity: '0.5'
        });       
    });

});

