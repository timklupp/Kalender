<?php
session_start();
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

    <style type="text/css">     
   		
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/ajax.js"></script> 
    <script src="js/login.js"></script> 
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
          <li id="logout" class="pull-right"><a href="#">Log out</a></li>
         </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class="container marginTop">
    <div id="messages"></div>
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
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				Sport <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="#">Swim</a></li>
				<li><a href="#">Bike</a></li>
				<li><a href="#">Run</a></li>
				<li class="divider"></li>
				<li><a href="#">muhkuh</a></li>
			  </ul>
			</div>
				<span id="modalTitle">Title of the event</span>
			</h4>
		  </div>
		  <div class="modal-body">
		  	<div class="pull-right">test</div>
		  	<div class="clearfix"></div>
		  	<p>
		  		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
		  	</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Verwerfen</button>
			<button type="button" class="btn btn-primary">Anlegen</button>
		  </div>
		</div>
	  </div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/calendar.js"></script>
    
    <script>
    $("#navSignup").on('click', function(e){

            $("#navHome").removeClass("active");
            $("#navMe").removeClass("active");
            $( this ).addClass("active");

            $("#mainContent").load("ajaxform.html");
              
            e.preventDefault();

        });
    $("#navMe").on('click', function(e){

            $("#navHome").removeClass("active");
            $("#navSignup").removeClass("active");
            $( this ).addClass("active");

            $("#mainContent").load("user.php");
              
            e.preventDefault();

        });
    </script>
  </body>
</html>