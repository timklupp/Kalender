<?php
session_start();
if(empty($_SESSION['id']))
{
header('Location: http://79.170.44.118/timklupp.com/calendar/');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand active" href="index.php">calendar</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
         	<li id="navMe"><a href="#">Me</a></li>
         	<li id="contact">
         		<a data-toggle="collapse" href="#contactCollapse" aria-expanded="false" aria-controls="contactCollapse">
  				Contact
				</a>
         	</li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
          <li><p class="navbar-text">Signed in as <span class="userFNAMELNAME text-capitalize">Vorname Nachname</span></p></li>
          <li id="logout"><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
         </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class="container marginTop">
		<div class="collapse" id="contactCollapse">
			<div class="well">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
			</div>
		</div>

    <div id="mainContent">
    	<div id="control-l">
    		<button type="button" class="btn btn-default btn-sm nextprev" id="btnprev">
  				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			</button>
			<button type="button" class="btn btn-default btn-sm" id="btntoday">
  				today
			</button>
			<button type="button" class="btn btn-default btn-sm nextprev" id="btnnext">
  				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			</button>
		</div>

		<div id="control-r">
			Year
		</div>

		<div id="control-rm">
			Month
		</div>




    	<div class='break'></div>
    	<div class="table-responsive" id="calendar"></div>
    </div>
    </div>

	<!-- Modal -->
	<?php
    include("CalModal.html");
    include("userEditModal.html");
  ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/calendar.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/login.js"></script>
    <script src="js/userdata.js"></script>
    <script>
    $("#navSignup").on('click', function(e){

            $("#navHome").removeClass("active");
            $("#navMe").removeClass("active");
            $( this ).addClass("active");

            $("#mainContent").load("ajaxform.html");

            e.preventDefault();

        });

        $( document ).on("hover","img",function(){
  function() {
    $('#imgHover').show();
  }, function() {
    $('#imgHover').hide();
  }
});


    </script>

  </body>
</html>
