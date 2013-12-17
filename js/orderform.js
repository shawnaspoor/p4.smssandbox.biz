$(document).ready(function(){

$('#button').attr('disabled', true);

console.log("js is working");

});

 /*-------------------------------------------------------------------------
 	validate input from the fields
  --------------------------------------------------------------------------*/ 
  //this is done using the jquery validation plugin, available at http://jqueryvalidation.org/
 $('#signup').keyup(function() {

	$('form').validate( {
		
	   rules: {
	     first_name: {
	       required: true,
	       minlength: 2
	     },
	     last_name: {
	       required: true,
	       minlength: 2

	     },
	     phoneNo: {
	       required: false,
	       minlength: 10,
	       digits:true
	     },

	     password: {
	       required: true,
	       minlength: 5
	     },

	     billingAddress: {
	       required: true,
	       minlength: 10
	     },

	     billingAddress2: {
	       required: true,
	       minlength: 2
	     },
	     city: {
	       required: true,
	       minlength:2
	     },

	     state: {
	       required: true,
	       minlength:10
	     },
	     
	     zipcode: {
	       required: true,
	       minlength:5,
	       maxlength: 5,
	       number:true
	     },

	     licenseNo: {
	       required: true,
	       minlength:8

	     },

	     email: {
	       required: true,
	       minlength:5,
	       email: true
	     }
	   },

	   messages: {
	     first_name: "<br> Please enter your first name",
	     last_name:  "<br> Please enter your last name",
	     phoneNo:  "<br> Phone numbers can be numbers only",
	     password:  "<br> Please enter a password that is at least 5 character long",
	     billingAddress: "<br> Please enter a billing address.",
	     billingAddress2:  "<br> This field needs at least 2 character. Please put a # in front of unit number if required.",
	     city: "<br> Please enter your city",
	     state: "<br> We need your state.",
	     zip: "<br> Zipcodes can be numbers only",
	     licenseNo: "<br> Legally we need to keep this on file. We appreciate your cooperation.",
	     email: "<br> Definitely required, we need to know how to contact you to take payment."
	   }
	 });
});




/*-------------------------------------------------------------------------
add the recipient name
--------------------------------------------------------------------------*/
$('#first_name').change(function() {
	//find out what they entered as their name
	var name = $(this).val();

	console.log(name);
	var name_length=name.length;

	if (name_length > 20) {
		$('#namelength').html('Names can be no longer than 25 characters, sorry!');
	}
	else {
		$('#namelength').html(' ');
	};


;
});

/*-------------------------------------------------------------------------
add the recipient billing address
--------------------------------------------------------------------------*/
$('#billingAddress').change(function() {
	//find out what they entered as their address
	var billingAddress = $(this).val();

	$('#billingAddressOut').html(billingAddress);

	var billingAddress_length=billingAddress.length;

	if (billingAddress_length > 25) {
		$('#billingaddress').html("The billing address field doesn't take more than 30 characters, sorry!");
	}
	else {
		$('#billingaddress').html(' ');
	};
});
$('#state').change(function() {
	//find out what they entered as their address
	var state = $(this).val();

	var state_length=state.length;

	if (state_length > 25) {
		$('#statelength').html("The state, city, and zipcode field doesn't take more than 30 characters, sorry!");
	}
	else {
		$('#statelength').html(' ');
	};

	$('#stateOut').html(state);

	
});

/*-------------------------------------------------------------------------
add the recipient email address
--------------------------------------------------------------------------*/

$('#email').change(function() {
    //find out what they entered as their email
    var email = $(this).val();


  	var email_length=email.length;

	if (email_length > 25) {
		$('#emaillength').html("The email field doesn't take more than 30 characters, sorry!");
	}
	else {
		$('#emaillength').html(' ');
	};
  
    $('#emailOut').html(email);

  });

/*-------------------------------------------------------------------------
disable the submit button if there is no content/invalid content in the
text fields and no baked goods chosen
--------------------------------------------------------------------------*/ 

function checkForm() {

	if ( $('form').valid() && quantity.length > 0 ) {
		$('#button').attr('disabled', false);
		$('.requiredinput').hide();
	}
	else {
		$('.requiredinput').html("");
		$('#button').attr('disabled', true);
	};
	
};

$("form").change(checkForm);