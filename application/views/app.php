<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" ng-app="myApp" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en" class="no-js"> 
    <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My AngularJS App</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>bower_components/html5-boilerplate/dist/css/normalize.css">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>bower_components/html5-boilerplate/dist/css/main.css">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>bower_components/angular-material/angular-material.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>css/app.css">
  <link rel="stylesheet" href="<?php echo angular_url(); ?>css/style.css">

  <script src="<?php echo angular_url(); ?>bower_components/html5-boilerplate/dist/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body layout="column" ng-app="myApp" ng-cloak>
 
    <div ui-view></div>

  <!-- In production use:
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/x.x.x/angular.min.js"></script>
  -->
    <script src="http://code.angularjs.org/1.4.0/angular.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-animate.min.js" type="text/javascript" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-aria.min.js" type="text/javascript" ></script>
    <script src="<?php echo angular_url(); ?>bower_components/angular-material/angular-material.js" type="text/javascript" ></script>
    <script src="<?php echo angular_url(); ?>components/version/version.js"></script>
    <script src="<?php echo angular_url(); ?>components/version/version-directive.js"></script>
    <script src="<?php echo angular_url(); ?>components/version/interpolate-filter.js"></script>
    <script src="<?php echo angular_url(); ?>js/app.js"></script>
    <script src="<?php echo angular_url(); ?>js/routes.js"></script>
    <script src="<?php echo angular_url(); ?>js/controller.js"></script>
    
</body>
</html>
