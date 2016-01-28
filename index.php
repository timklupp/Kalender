<?php
session_start();
if(!empty($_SESSION['id']))
{
header('Location: mainpage.php');
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

    <style type="text/css">
   		body {
        background: url(pictures/bg.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .cover{
        margin-top: 100px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 3px rgba(0,0,0,.5);
    }

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
          <a class="navbar-brand" href="/timklupp.com/calendar">calendar</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
          <li id="navSignup"><a href="#signup">Sign up</a></li>
         </ul>
          <form id="loginform" action="login.php" class="navbar-form navbar-right" method="post" >
            <div class="form-group">
              <input type="email" placeholder="Email" name="loginemail" id="loginemail" class="form-control" value="<? echo addslashes($_POST['loginemail']); ?>">
            </div>
            <div class="form-group">
              <input type="password" name="loginpassword" id="loginpassword" placeholder="Password" class="form-control">
            </div>
            <input type="submit" name="submit" value="Sign in" id="login" class="btn btn-success">
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class="container marginTop" role="main">
    <div id="errors"></div>
    <div id="messages"></div>
    <div id="mainContent">
    <div class="cover">
            <h1 class="cover-heading">Willkommen</h1>
            <p class="lead">Bitte logge dich ein, für mehr Features.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
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
            $('.alert').remove();
            $("#mainContent").load("signup.php");

            e.preventDefault();

        });
    </script>
  </body>
</html>
