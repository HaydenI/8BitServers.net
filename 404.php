<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Hayden Ivey">
    <META HTTP-EQUIV=Refresh CONTENT="20; URL=index.php">
    <link rel="icon" href="favicon.ico">

    <title>8BIT://SERVERS - 404</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script>
        $(function() {
            $(".element").typed({
                strings: ["website@8BIT://SERVERS:~$ goto webpage.php\n^2000ERROR: 404 Not Found\nAlerting webstaff now\n^2000website@8BIT://SERVERS:~$ goto index.php\n^2000Redirecting to home..."],
                typeSpeed: 30,
                showCursor: true,
                cursorChar: "_",
            });
        });

    </script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Typed.js CSS -->
    <link href="css/typed.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>

    <?php
		include ('php/header.php');
		?>

    <!-- Begin page content -->
    <div class="container">
        <div class="lead">
            <span class="element" style="white-space:pre;"></span>
        </div>
    </div>

    <?php
		include ('php/footer.php');
		?>

    <!-- Bootstrap core JavaScript
		================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
