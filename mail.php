<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://cdn.bitlanding.com/block/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="http://cdn.bitlanding.com/block/css/style.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <section>
        <header class="block-35">
            <div class="container">
                <div class="row">
                    <nav class="navbar col-sm-12" role="navigation">
                        <div class="navbar-header">
                            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-35">
                                <ul class="nav pull-left">
                                    <li><a href="./index.html">HOME</a></li>
                                    <li><a href="./consulting.html">CONSULTING</a></li>
                                    <li><a href="./baw.html">BUISNESS ARCHITECTURE WORKSHOP</a></li>
                                    <li><a href="./projects.html">PROJECTS</a></li>
                                    <li><a href="./biography.html">BIOGRAPHY</a></li>
                                </ul>
                            </div>
                    </nav>
                    </div>
                </div>
                <div class="header-background"></div>
        </header>
    </section>
        <div class="container">
		<?php
			$name = $_POST["fName"].' '.$_POST["lName"];
			// the message
			$msg = $name.' sent you the following comment from '.$_POST["email"]."\n".$_POST["comment"];

			// use wordwrap() if lines are longer than 70 characters
			$msg = wordwrap($msg,70);

			// send email
			// $success = mail("ronocollc@outlook.com","You got an RSV Request",$msg);
			$success = mail("jmoseman01@gmail.com", $name." sent you a comment",$msg);

			if ($success) {
			    echo "<p>Your question will be answered.</p>";
			}
			else{
			    $errorMessage = error_get_last()['message'];
			    echo $errorMessage;
			    print_r(error_get_last());
			}
		?>
    <div class="container">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98094893-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-98094893-1');
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfI-uuyuDRMlZfVGkpybtmYxkk08a11n4"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://cdn.bitlanding.com/block/js/landing.min.js"></script>
</body>

</html>
