$(document).ready(function() {
$(document).on("submit","#loginform",function(event){

  if($("#loginemail").val() == "" || $("#loginpassword").val() == ""){
    $("#messages").html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + '<strong>Mist!</strong><br>' + 'Bitte E-Mail und Passwort eingeben!' + '</div>');
  }
  else{

    var loginData = $("#loginform :input").serializeArray();

    $.ajax({
      type      : 'POST', // define the type of HTTP verb we want to use (POST for our form)
      url       : '../calendar/login.php', // the url where we want to POST
      data      : loginData, // our data object
      dataType  : 'json', // what type of data do we expect back from the server
      encode    : true
    })
      // using the done promise callback
      .done(function(data) {
        if(!data.success)
          $("#messages").html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + '<strong>Mist!</strong><br>' + data.errors + '</div>');
        else{
          var url = "mainpage.php"
          $(location).attr('href',url);
        }
      })

      .fail(function(data) {

        // show any errors
        // best to remove for production
        //console.log(data);
      });
  }
      event.preventDefault();
});
});
