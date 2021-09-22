<?php
include_once('link.php');
include_once('header1.php');
include_once('welcome.php');

?>
<div id="account">
<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="https://th.bing.com/th/id/R.8d5c380ab54acb817199653edcbb47c8?rik=Zj2Q1E282YTT3Q&riu=http%3a%2f%2fpapers.co%2fwallpaper%2fpapers.co-vd76-noir-by-boris-p-borisov-dark-pattern-art-36-3840x2400-4k-wallpaper.jpg&ehk=u4Y%2bL7ncMGmPVj5XreKMLAp%2bPgae8pYUKvvosaQff0U%3d&risl=&pid=ImgRaw&r=0">
            
        </div>
        <div class="useravatar">
            <img alt="" src="img/user.svg">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $fname." ".$lname; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Profile</div>
            </button>
        </div>
        
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <table class="table">
          	<tr>
          		<td>First Name</td>
          		<td><?php echo $fname; ?></td>
          	</tr>
          	<tr>
          		<td>Last Name</td>
          		<td><?php echo $lname; ?></td>
          	</tr>
          	<tr>
          		<td>Email</td>
          		<td><?php echo $email; ?></td>
          	</tr>
          </table>
        </div>
        
      </div>
    </div>
    
    </div>
    </div>    
