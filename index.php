<!DOCTYPE html>
<html ng-app="loginApp">
  <head>
    <meta charset="UTF-8">
    <title>Flat Login Form</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    
<div class="container">
  <div class="info">
    <h1>Twitter Login</h1>
  </div>
</div>
<div class="form" ng-controller="authCtrl">
  <div class="thumbnail"><img src="img/twitter-logo.png"/></div>
  <form class="register-form">
    <input type="text" placeholder="Name"/>
    <input type="password" placeholder="Password"/>
    <input type="text" placeholder="Email Address"/>
    <button>Create Account</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form name="loginForm" class="login-form" role="form" method="POST" action="api/v1/auth.php">
    <input type="email" name="email" placeholder="Email Address" ng-model="login.email" required focus/>
    <input type="password" name="password" placeholder="Password" ng-model="login.password" required/>
    <button type="submit" ng-click="doLogin(login)" data-ng-disabled="loginForm.$invalid">Login</button>
    <p class="message">Not registered? <a href="#">Create an account</a></p>
  </form>
</div>
  <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
    <script src='js/jquery.min.js'></script>
	<script src="js/index.js"></script>
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