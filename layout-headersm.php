<!DOCTYPE html>
<html>
    <head>
        <title><?php require_once('config.php');echo $wsn;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?php if (!$theme) {echo 'css/bootstrap.css';}else {echo $theme;}?>"/>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="shortcut icon" href="favicon.ico">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <script src='select_url.js'></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script>
            $(function() {
                // Setup drop down menu
                $('.dropdown-toggle').dropdown();
                // Fix input element click problem
                $('.dropdown input, .dropdown label').click(function(e) {
                    e.stopPropagation();
                });
            });
        </script>
    </head>
    <body style="padding-top:60px">
        <div class="container-fluid">
            <div class="navbar navbar-default navbar-fixed-top"><div class="navbar-header"><a class="navbar-brand" href="index.php"><?php require_once('config.php');echo $wsn;?></a></div>
                <!--<a class="btn btn-navbar btn-default" data-toggle="collapse" data-target="#nbc">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>-->

                <ul class="nav navbar-collapse navbar-nav" id="nbc">
                    <li><a href="about.php">About</a></li>
                </ul>
                <ul class="nav pull-right navbar-nav">
                    <?php
                    require_once('lib-auth.php');
                    $polrauth = new polrauth();
                    $polrauth->headblock();
                    ?>
                    <?php require_once('config.php'); if ($regtype != 'none'){ echo '<li><a href="register.php">Sign Up</a></li>';}?>
                    <li class="divider-vertical"></li>
                    <li class="dropdown pull-right">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                        <div class="dropdown-menu" id="dropdown" style="padding: 15px; padding-bottom: 0px;">
                            <h2>Login</h2>
                            <form action="handle-login.php" method="post" accept-charset="UTF-8">
                                <input id="user_username" style="margin-bottom: 15px;" type="text" name="username" placeholder='Username' size="30" class="form-control">
                                <input id="user_password" style="margin-bottom: 15px;" type="password" name="password" placeholder='Password' size="30" class="form-control">

                                <input class="btn btn-success form-control" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="login" value="Sign In">
                                <br><br>
                            </form>
                        </div>
                    </li>
<?php $polrauth->headendblock(); ?>
                </ul>
            </div>
        </div>
        <div class="container">
            <div style="text-align:left; padding-top:5px; background-color: rgba(0,0,0,0);">
