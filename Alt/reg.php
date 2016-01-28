<? include("login.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
   		.marginTop{margin-top: 40px;}
    </style>
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
          <a class="navbar-brand" href="#">calendar</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="reg.php">Registrierung</a></li>
         </ul>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <div class="container marginTop">

      <div>
        <h3 class="text-muted text-center">Registrierungs Formular</h3>
      </div>

      <div class="well text-center">
  	<form role="form" method="post" >
            <div class="form-group">
              <label for="email">E-Mail</label>
              <input type="email" placeholder="Email" name="email" id="email" class="form-control" value="<? echo addslashes($_POST['email']); ?>">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
              <label for="vorname">Vorname</label>
              <input type="text" name="vorname" id="vorname" placeholder="Vorname" class="form-control">
            </div>
            <div class="form-group">
              <label for="nachname">Nachname</label>
              <input type="text" name="nachname" id="nachname" placeholder="Nachname" class="form-control">
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                <input type="checkbox" value="">Administrator
              </label>
              </div>
              <div class="checkbox">
                <label>
                <input type="checkbox" value="">Trainer
              </label>
              </div>
              <div class="checkbox">
                <label>
                <input type="checkbox" value="">Mitglied
              </label>
              </div>
            </div>
            <input type="submit" name="submit" value="sign up" class="btn btn-success" disabled="disabled">
          </form>
          <div>
          	<?php
          	if($error){

          		echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>$error</div>";

          	}
          	if($message){

          		echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>>$message</div>";

          	}
          	?>
          </div>
        </div>
  </body>
</html>
