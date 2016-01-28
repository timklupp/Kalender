$(document).ready(function() {

	// process the form
	$(document).on('submit', '#test', function(event) {

		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'fname' 			: $('input[name=firstName]').val(),
			'lname' 			: $('input[name=lastName]').val(),
			'email' 			: $('input[name=email]').val(),
			'password' 			: $('input[name=password]').val()
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: '../calendar/serverstuff.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data);

				// here we will handle errors and validation messages
				if ( ! data.success) {
					if(data.errors.general){
						$("#messages").html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + "<strong>Fehler!</strong><br>" + data.errors.general + "</div>");
					}
					// handle errors for name ---------------
					if (data.errors.fname) {
						$('#fname-group').addClass('has-error'); // add the error class to show red input
						$('#fname-group').append('<div class="help-block">' + data.errors.fname + '</div>'); // add the actual error message under our input
					}

					if (data.errors.lname) {
						$('#lname-group').addClass('has-error'); // add the error class to show red input
						$('#lname-group').append('<div class="help-block">' + data.errors.lname + '</div>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}

					// handle errors for superhero alias ---------------
					if (data.errors.password) {
						$('#pass-group').addClass('has-error'); // add the error class to show red input
						$('#pass-group').append('<div class="help-block">' + data.errors.password + '</div>'); // add the actual error message under our input
					}

				} else {
					$('.alert-danger').remove();
					// ALL GOOD! just show the success message!
						$("#messages").html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + "<strong>Glückwunsch!</strong><br>" + data.message + "</div>");

					// usually after form submission, you'll want to redirect
					// window.location = '/thank-you'; // redirect a user to another page

				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});
