<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Twitter</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/typography.css" rel="stylesheet">

  </head>
  <body ng-controller="authCtrl">
  	<div class="hidden-xs-down col-sm-2 col-md-2 col-xl-2 col-lg-2 left-nav">
  		<div class="inner" ng-repeat="x in names">
  			<div class="container">
	  			<div class="profile-pic">
	  				<img src="img/Anna_Profile.png">
	  				<a class="hidden-sm-down" href="#">{{ x.name }}</a>
	  			</div>
	  			<hr />
	  			<div class="col-md-12 col-lg-6 fol">
	  				<h1>184</h1>
	  				<a href="#">Following</a>
	  			</div>
	  			<div class="col-md-12 col-lg-6 fol">
	  				<h1>184</h1>
	  				<a href="#">Follower</a>
	  			</div>
	  		</div>
	  		<ul>
	  			<li class="active"><a href="#/"><i class="fa fa-home"></i> <span class="hidden-sm-down">Home</span></a></li>
	  			<li><a href="mention.html"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Connect</span></a></li>
	  			<li><a href="#/discover"><i class="fa fa-compass"></i> <span class="hidden-sm-down">Discover</span></a></li>
	  			<li><a href="#/user"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a></li>
	  			<li><a href="#/stat"><i class="fa fa-area-chart"></i> <span class="hidden-sm-down">Statistic</span></a></li>
	  		</ul>
  		</div>
  	</div>
  	<div class="nav-top col-xs-12 col-sm-10 col-md-10 col-xl-10 col-lg-10 pull-right">
  		<div class="container">
  			<div class="navbar">
  				<a href="#" class="hidden-xs-down navbar-brand"><i class="fa fa-twitter"></i></a>
  				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mainNav">
  					<i class="fa fa-twitter"></i>
  				</button>
  				<button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#userNav">
  					<i class="fa fa-user"></i>
  				</button>
  				<ul class="collapse navbar-toggleable-xs hidden-sm-up" id="mainNav">
  					<li><a href="#/"><i class="fa fa-home"></i> <span>Home</span></a></li>
		  			<li><a href="mention.html"><i class="fa fa-envelope"></i> <span>Connect</span></a></li>
		  			<li><a href="#/discover"><i class="fa fa-compass"></i> <span>Discover</span></a></li>
		  			<li><a href="#/user"><i class="fa fa-user"></i> <span>Profile</span></a></li>
		  			<li><a href="#/stat"><i class="fa fa-area-chart"></i> <span>Statistic</span></a></li>
  				</ul>
	  			<ul class="collapse navbar-toggleable-xs nav navbar-nav pull-sm-right" id="userNav">
	  				<li class="nav-item"><a href="#" role="button" data-toggle="modal" data-target="#tweet-dialog"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Tweet"></i> <span class="hidden-sm-up">Tweet</span></a></li>
	  				<li class="nav-item"><a href="mention.html"><i data-toggle="tooltip" data-placement="bottom" title="Mention" class="fa fa-envelope"></i> <span class="hidden-sm-up">Mention</span></a></li>
	  				<li class="nav-item"><a href="#" role="button" data-toggle="modal" data-target="#search-dialog"><i data-toggle="tooltip" data-placement="bottom" title="Search" class="fa fa-search"></i> <span class="hidden-sm-up">Search</span></a></li>
	  				<li class="nav-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Setting"><i class="fa fa-gear"></i> <span class="hidden-sm-up">Setting</span></a></li>
	  			</ul>
	  		</div>
  		</div>
  	</div>
  	<section data-ng-view="" id="main" class="col-xs-12 col-sm-offset-2 col-sm-10">
  		
  	</section>
    <div id="tweet-dialog" class="modal fade" role="dialog">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
	    			<button type="button" class="close" data-dismiss="modal">
	    				&times;
	    			</button>
	    			<h4 class="modal-title">Tweet Something</h4>
    			</div>
    			<form>
		    			<div class="modal-body">
		   				<textarea placeholder="Compose your tweet...." class="form-control"></textarea>
		   				<span>150 character remaining</span>
		   			</div>
		   			<div class="modal-footer">
		   				<button class="btn btn-secondary-outline pull-left" data-dismiss="modal">Close</button>
		   				<input type="submit" class="btn btn-primary pull-right" value="Tweet"/>
		    		</div>
    			</form>
    		</div>
    	</div>
    </div>
    <div id="search-dialog" class="modal fade" role="dialog">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
	    			<button type="button" class="close" data-dismiss="modal">
	    				&times;
	    			</button>
	    			<h4 class="modal-title">Search</h4>
    			</div>
    			<div class="modal-body">
    				<form class="input-group">
    					<span class="input-group-addon"><i class="fa fa-search"></i></span>
    					<input type="text" class="form-control" placeholder="Search">
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  	<script>
  		$(function( ){
  			$( "[data-toggle='tooltip']").tooltip( );
  		});
		$(".left-nav ul li").click(function(){
			$(".left-nav ul li").removeClass("active");
			$(this).addClass("active");
		});
  	</script>
	<script src="js/angular.min.js"></script>
	<script src="js/angular-route.min.js"></script>
	<script src="js/angular-animate.min.js" ></script>
	<script src="js/toaster.js"></script>
	<script src="app/app.js"></script>
	<script src="app/data.js"></script>
	<script src="app/directives.js"></script>
	<script src="app/authCtrl.js"></script>
  </body>
</html>