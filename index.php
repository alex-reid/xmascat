<?php 
    $name = (isset($_GET['name'])) ? $_GET['name'] : false;
?>
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
        <link rel="stylesheet" href="css/animate.css">
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
            <?php 
                if(!$name){
            ?>
                <div id="bgcover">
                    <div id="noname" class="tk-league-gothic">
                        <p>PLEASE ENTER YOUR NAME</P>
                        <form action="" method="get" id="name_form">
                            <input type="text" name="name" id="name" placeholder="name"/>
                            <input type="submit" value="GO" class="tk-league-gothic big"/>
                        </form>
                    </div>
                </div>
            <?php
                }
            ?>
            <p>HAVE A <span class="tk-league-gothic big">MEOWY CHRISTMAS</span> McCANN</p>
            <hr>
            <div id="video" class="tk-league-gothic">
                <?php 
                    // if($name){
                    //     echo strtoupper($name);
                    // }
                ?>
                <iframe width="1280" height="720" src="//www.youtube.com/embed/Q04ILDXe3QE?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <hr>
            <form action="http://mccannau.createsend.com/t/j/s/pluiuj/" method="post" id="subForm">
                <p class="sub"><a href="#" class="tw ir">tw</a><a href="#" class="fb ir">fb</a>THE MORE THE <span class="tk-league-gothic big">MEOWY-ER.</span> WISH SOMEONE ELSE A <span class="tk-league-gothic big">MEOWY CHRISTMAS.</span>
                            <input type="text" name="cm-name" id="name" placeholder="name"/>
                            <input type="text" name="cm-pluiuj-pluiuj" id="aljhk-aljhk" placeholder="email"/>
                            <input type="submit" value="SEND" class="tk-league-gothic big"/>
                </p>
            </form>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
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

                var flash_count = 0;
                var anims = ['tada','wobble','rubberBand','tada']
                function names(){
                    name = "<?php 
                                if($name){
                                    echo strtoupper($name);
                                }else{
                                    echo false;
                                }
                            ?>";
                    flash_count ++;
                    var n = Math.round(Math.random()*2)+1;
                    var x = Math.round(Math.random()*90);
                    var y = Math.round(Math.random()*80);
                    $("#video").prepend('<span class="name tk-league-gothic animated '+anims[n]+'" rel="f_'+flash_count+'" style="top:'+y+'%;left:'+x+'%;font-size:'+n+'em">'+name+'</span>')
                    var r = $('span[rel="f_'+flash_count+'"]');
                    setTimeout(function(){r.remove()},500)
                }

                setInterval(names,1100);

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
