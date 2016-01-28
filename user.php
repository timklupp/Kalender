<?php
	session_start();
?>
<style type="text/css">
    #ab{
      background-color:white;
      border-top: 3px solid #607D8B;
    }
    #ac{
      background-color: #F7F7F7;
    }
    #userNAVBAR{
      background-color: #607D8B;
      padding-left: 0;
    }
    #ad{
      background-color: #F7F7F7;
      color:#F5F5F5;
    }
    #ae{
      background-color: #AABAAB;
    }
    img{
      padding-top: 35px
    }
    .grey{color:white;}
    .navcolor{background-color: #607D8B}
    .nav-pills > li > a {
      -webkit-border-radius: 0;
      -moz-border-radius: 0;
      border-radius: 0;
    }
    tr{
      height: 20px;
    }
    td{
      height: 20px;
    }
    #userEdit{
      margin-top: 15px;
    }

    #imgHover{
      background-color: red;
      text-align: center;
      display: none;
    }
</style>

<div class="row">
  <div class="col-md-3">
    <div class="row">
      <div class="col-md-10 col-md-offset-1" id="ab">
        <img src="pictures/tim.jpg" alt="..." class="img-responsive">
        <div id="imgHover">Change picture</div>
        </a>
      </div>
      <div class="col-md-10 col-md-offset-1">
          <h2 class="userFNAMELNAME text-capitalize">Vorname Nachname</h2>
          <table class="table">
          <tr><td>Status</td><td>active</td></tr>
          <tr><td>Role</td><td>Admin</td></tr>
          <tr><td>Member since</td><td>Date</td></tr>
          </table>
      </div>
    </div>
  </div>
  <div class="col-md-9 text-left" id="ac">
    <div class="row">
      <div class="col-md-12" id="userNAVBAR">
         <ul class="nav nav-pills navcolor">
          <li><a href="#" class="grey">Profile</a></li>
          <li><a href="#" class="grey">Events</a></li>
          <li><a href="#" class="grey">Groups</a></li>
         </ul>
      </div>
    </div>
      <div class="row">
        <div class="col-md-6">
          <h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span> ABOUT</h3>
        </div>
        <div class="col-md-6">
          <button type="button" id="userEdit" class="btn btn-primary btn-xs pull-right" data-toggle='modal' data-target='#userEditModal'>
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-xs-6" id="ac">
          <p><strong>Name: </strong></p>
          <p><strong>E-Mail: </strong></p>
          <p><strong>Mobil: </strong></p>
          <p><strong>Facebook: </strong></p>
        </div>
        <div class="col-md-3 col-xs-6" id="ac">
          <p class="userFNAMELNAME text-capitalize">Vorname Nachname</p>
          <p id="userEMAIL">E-Mail@email.com</p>
          <p id="userMOBIL">0151 437 84932</p>
          <p id="userFB">Facebook Link</p>
        </div>
        <div class="col-md-3 col-xs-6" id="ac">
          <p><strong>Geburtstag: </strong></p>
          <p><strong>Adresse: </strong></p>
          <p><strong>Stadt: </strong></p>
          <p><strong>Interessen: </strong></p>
        </div>
        <div class="col-md-3 col-xs-6" id="ac">
          <p id="userBDAY">21.02.1988</p>
          <p id="userADRESS">Osterstrasse 1</p>
          <p id="userCITY">Hamburg</p>
          <p id="userINTEREST">Sport</p>
        </div>
      </div>
      <hr>
    <div class="row">
      <div class="col-md-6">
        <h3><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span> ACTIVITY</h3>
        <ul>
          <li><strong>Event Name</strong><p><small>Date: Time</small></p></li>
          <li><strong>Event Name</strong><p><small>Date: Time</small></p></li>
          <li><strong>Event Name</strong><p><small>Date: Time</small></p></li>
        </ul>
      </div>
      <div class="col-md-6">
        <h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> WALL</h3>
        <p>A nice post</p>
      </div>
    </div>
  </div>
</div>
