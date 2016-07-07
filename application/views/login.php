<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" ng-app="myApp" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My AngularJS App</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>bower_components/html5-boilerplate/dist/css/normalize.css">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>bower_components/html5-boilerplate/dist/css/main.css">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>css/normalize.css">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>css/skeleton.css">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>css/style.css">
  <script src="<?php echo angular_url(); ?>bower_components/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
 
    <!--<div ui-view></div>-->
    <section class="container login">
        <div class="sixteen columns">
            <div class="login-form">
                <form action="login" method="post">
                    <input class="u-full-width" type="text" placeholder="test@mailbox.com" name="email">
                    <input class="u-full-width" type="password" name="password">
                    <input class="button-primary" type="submit" value="Login">    
                </form>
            </div>
        </div>
    </section>
    

  <!-- In production use:
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
  -->
  <script src="http://code.angularjs.org/1.2.13/angular.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
  <script src="<?php echo angular_url(); ?>js/app.js"></script>
  <script src="<?php echo angular_url(); ?>js/routes.js"></script>
  <script src="<?php echo angular_url(); ?>components/version/version.js"></script>
  <script src="<?php echo angular_url(); ?>components/version/version-directive.js"></script>
  <script src="<?php echo angular_url(); ?>components/version/interpolate-filter.js"></script>
</body>
</html>
