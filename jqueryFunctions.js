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
	$("#setupBtnM").click(function(){
        if($("#setupLessM").css("display")!='none') {
        	$("#setupMoreM").show();
        	$("#setupLessM").hide();
        	$(this).html("Show Less");
        } else if ($("#setupMoreM").css("display")!="none"){
        	$("#setupLessM").show();
        	$("#setupMoreM").hide();
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
	$("#lessonBtnM").click(function(){
        if($("#lessonLessM").css("display")!='none') {
        	$("#lessonMoreM").show();
        	$("#lessonLessM").hide();
        	$(this).html("Show Less");
        } else if ($("#lessonMoreM").css("display")!="none"){
        	$("#lessonLessM").show();
        	$("#lessonMoreM").hide();
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

$(function(){
	$("#repairBtnM").click(function(){
        if($("#repairLessM").css("display")!='none') {
        	$("#repairMoreM").show();
        	$("#repairLessM").hide();
        	$(this).html("Show Less");
        } else if ($("#repairMoreM").css("display")!="none"){
        	$("#repairLessM").show();
        	$("#repairMoreM").hide();
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
		}else{
		  navItems.show();
		}
	}).trigger('resize');
});

$(function(){
	var wind = $(window),
	servicesDHeaders = $("#servicesDesktopHeaders"),
    servicesDContent = $("#servicesDesktopContent"),
    servicesDButtons = $("#servicesDesktopButtons"),
        
    servicesMColumns = $("#servicesMColumns");
                


	wind.resize(function(){
		if (wind.width()<550) {
		  servicesDHeaders.hide();
          servicesDContent.hide();
          servicesDButtons.hide();
            
          servicesMColumns.show();
          //servicesItemsAlt.show();
		}else{
          servicesMColumns.hide();
            
		  servicesDHeaders.show();
          servicesDContent.show();
          servicesDButtons.show();
          //servicesItemsAlt.hide();
		}
	}).trigger('resize');
});


// -------------- "scroll down" image --------------------
$(function() {
    $(window).scroll(function(){
        var st = $(this).scrollTop();
        //console.log(st);
            if (st >= 200){
                $(".scroll.down").fadeOut();
            } else if (st < 200){
                $(".scroll.down").fadeIn();    
            }
    });
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

