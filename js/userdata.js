$(document).ready(function(){

 var getUserData = function(){

 $.getJSON( "userdata.php", function( data ) {
      $(".userFNAMELNAME").html(data.fname + " " + data.lname);
      $("#userEMAIL").html(data.email);
  });

}
getUserData();
$(document).on("click","#navMe",function(event){

  $("#navHome").removeClass("active");
  $("#navSignup").removeClass("active");
  $( this ).addClass("active");

  $("#mainContent").load("user.php");
  getUserData();

  var logoHeight = $('#userProfilePic img').height();
    if (logoHeight < 200) {
        var margintop = (200 - logoHeight) / 2;
        $('#userProfilePic img').css('margin-top', margintop);
    }

  event.preventDefault();
});
});
