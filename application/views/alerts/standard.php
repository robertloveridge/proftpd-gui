<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" xmlns:Error="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Error</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel">
                <div class="login-logo-text"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;<a href="/">Error!!</a></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Error!</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $error_msg ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="/assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/assets/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/assets/js/proftpd-admin.js"></script>

</body>

</html>


