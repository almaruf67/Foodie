jQuery(document).ready(function(){

	//This is to Avoid Page Refresh and Fire the Event "Click"

    jQuery('#reservation-form').on('submit',function(e) {  //Don't foget to change the id form
	    jQuery.ajax({
	        url:'reservation.php', //===PHP file name====
	        data:jQuery(this).serialize(),
	        type:'POST',
	        success:function(data){
	        
	          //Success Message == 'Title', 'Message body', Last one leave as it is
	        swal("Thank You!", "Your reservation request has been submitted. You will get the confirmation message shortly.", "success");
	        },
	        error:function(data){
	          //Error Message == 'Title', 'Message body', Last one leave as it is
	        swal("Oops...", "Something went wrong :(", "error");
	        }
	      });
	      e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
	});


    //Contact Page Form script"

	jQuery('#contact-form').on('submit',function(e) {  //Don't foget to change the id form
	    jQuery.ajax({
	        url:'contact.php', //===PHP file name====
	        data:jQuery(this).serialize(),
	        type:'POST',
	        success:function(data){
	        
	          //Success Message == 'Title', 'Message body', Last one leave as it is
	        swal("Thank You!", "Your Message has been sent. Admin will respond you shortly", "success");
	        },
	        error:function(data){
	          //Error Message == 'Title', 'Message body', Last one leave as it is
	        swal("Oops...", "Something went wrong :(", "error");
	        }
	      });
	      e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
	});


});
