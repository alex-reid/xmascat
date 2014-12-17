<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//use.typekit.net/tbu7rjw.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
    </head>
    <body class="tk-futura-pt">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="content">
            <p>HAVE A <span class="tk-league-gothic big">MEOWY CHRISTMAS</span> McCANN</p>
            <hr>
            <div id="video"></div>
            <hr>
            <form action="http://mccannau.createsend.com/t/j/s/pluiuj/" method="post" id="subForm">
                <p class="sub"><a href="#" class="tw ir">tw</a><a href="#" class="fb ir">fb</a>THE MORE THE <span class="tk-league-gothic big">MEOWY-IER.</span> WISH SOMEONE ELSE A <span class="tk-league-gothic big">MEOWY CHRISTMAS.</span>
                            <input type="text" name="cm-name" id="name" placeholder="name"/>
                            <input type="text" name="cm-pluiuj-pluiuj" id="aljhk-aljhk" placeholder="email"/>
                            <input type="submit" value="SEND" class="tk-league-gothic big"/>
                </p>
            </form>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
        <script type="text/javascript">
            $(function () {
                $('#subForm').submit(function (e) {
                    e.preventDefault();
                    $.getJSON(
                    this.action + "?callback=?",
                    $(this).serialize(),
                    function (data) {
                        if (data.Status === 400) {
                            alert("Error: " + data.Message);
                        } else { // 200
                            alert("Success: " + data.Message);
                        }
                    });
                });
            });
        </script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
