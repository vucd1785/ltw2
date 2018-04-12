


<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/myjs.js" type="text/javascript"></script>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-129.less', 'css/type-129.css');
        ?>
		<?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-8.less', 'css/type-8.css');
        ?>
        <link href="css/type-129.css" rel="stylesheet" type="text/css" />
		<link href="css/type-8.css" rel="stylesheet" type="text/css" />
        @include('header')
    </head>

    <body>
    	@include('content')
    </body>
    <footer>
    	@include('footer')
    </footer>
</html>
