// 1 - START DROPDOWN SLIDER SCRIPTS  ------------------------------------------------------------------------

	$(document).ready(function () {
    $(".tipo-usuario").click(function () {
        $(".usuario-opciones").slideToggle("fast");
        $(this).toggleClass("active");
        return false;
    });

	});

	$(document).ready(function () {
    $(".icono-despliegue").click(function () {
        $(".usuario-opciones").slideToggle("fast");
        $(this).toggleClass("active");
        return false;
    });

	});

	$(document).ready(function () {
    $(".action-slider").click(function () {
        $("#actions-box-slider").slideToggle("fast");
        $(this).toggleClass("activated");
        return false;
    });
});

//  END ----------------------------- 1

// 2 - START LOGIN PAGE SHOW FORGOT PASSWORD DIALOG--------------------------------------


	$(document).ready(function () {
	$(".forgot-pwd").click(function () {
		$("#password-fgt").dialog({
				
            maxWidth:450,
            maxHeight: 200,
            width: 450,
            height: 200
         });
		return false;
	});
	});


// END ----------------------------- 2


$(document).ready(function () {

        $("#val_errors").dialog({

            maxWidth:450,
            maxHeight: 400,
            width: 450,
            height: 300
        });

});

// 3 - MESSAGE BOX FADING SCRIPTS ---------------------------------------------------------------------

$(document).ready(function() {
	$(".close-yellow").click(function () {
		$("#message-yellow").fadeOut("slow");
	});
	$(".close-red").click(function () {
		$("#message-red").fadeOut("slow");
	});
	$(".close-blue").click(function () {
		$("#message-blue").fadeOut("slow");
	});
	$(".close-green").click(function () {
		$("#message-green").fadeOut("slow");
	});
});

// END ----------------------------- 3



// 4 - CLOSE OPEN SLIDERS BY CLICKING ELSEWHERE ON PAGE -------------------------------------------------------------------------

$(document).bind("click", function (e) {
    if (e.target.id != $(".tipo-usuario").attr("class")) $(".usuario-opciones").slideUp();
});

$(document).bind("click", function (e) {
    if (e.target.id != $(".action-slider").attr("class")) $("#actions-box-slider").slideUp();
});
// END ----------------------------- 4
 
 
