
<?php
session_start();
if(!empty($_SESSION['id']))
{
header('Location: mainpage.php');
}
?>
<div class="col-sm-6 col-sm-offset-3">
    <h1>Registrierung</h1>
    <!-- OUR FORM -->
    <form id="test" action="process.php" method="POST">

        <div class="row">
        <div id="fname-group" class="form-group col-md-6">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" name="firstName" placeholder="First name">
        </div>
            <!-- errors will go here -->
        <!-- Last NAME -->
        <div id="lname-group" class="form-group col-md-6">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lastName" placeholder="Last name">
        </div>
        </div>
        <!-- EMAIL -->
        <div id="email-group" class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="rudd@avengers.com">
            <!-- errors will go here -->
        </div>

        <!-- SUPERHERO ALIAS -->
        <div id="pass-group" class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
            <!-- errors will go here -->
        </div>

        <button type="submit" class="btn btn-success">Create Account</button>

    </form>
</div>
