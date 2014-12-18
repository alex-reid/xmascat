<?php 
    $name = (isset($_GET['name'])) ? $_GET['name'] : false;
    $play = (isset($_GET['name'])) ? '&autoplay=1' : '';
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

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">

        <meta property="og:image" content="http://mccannchristmascat.com/fb-share.jpg"/>
        <meta property="og:title" content="McCann Christmas Cat"/>
        <meta property="og:url" content="http://mccannchristmascat.com/"/>
        <meta property="og:site_name" content="McCann Christmas Cat"/>
        <meta property="og:type" content="Website"/>
        <meta property="og:description" content="People love cat videos and Xmas. Finally, the two have been combined... Watch and give someone a Meowy Christmas!" />

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
                <div class="name"><?php 
                    if($name){
                        echo "<span>".strtoupper($name)."</span>";
                    }
                ?></div>
<!--                 <div id="player"></div>
 -->                <iframe id="player1" src="//player.vimeo.com/video/114835296?api=1<?php echo $play ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <hr>
            <form action="http://mccannau.createsend.com/t/j/s/pluiuj/" method="post" id="subForm">
                <p class="sub">
                    <span class="social">
                        <a href="https://twitter.com/share/?text=People%20love%20cat%20videos%20and%20Xmas.%20Finally%2C%20the%20two%20have%20been%20combined...%20Watch%20and%20give%20someone%20a%20Meowy%20Christmas!%20http%3A%2F%2Fbit.ly%2F13e7FjD" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="tw ir">tw</a><a href="https://www.facebook.com/sharer/sharer.php?u=http://mccannchristmascat.com/?name=<?php echo $name; ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="fb ir">fb</a>
                    </span>
                    <span class="l1">
                        THE MORE THE
                    </span> 
                    <span class="l2 tk-league-gothic big">MEOWY-ER.</span> 
                    <span class="l3">WISH SOMEONE ELSE A</span> 
                    <span class="tk-league-gothic big">MEOWY CHRISTMAS.</span>
                    <span class="form">
                        <input type="text" name="cm-name" id="name" placeholder="name"/>
                        <input type="text" name="cm-pluiuj-pluiuj" id="aljhk-aljhk" placeholder="email"/>
                        <input type="submit" value="SEND" class="tk-league-gothic big"/>
                    </span>
                </p>
            </form>
            <div class="form_feedback"></div>
            <a class="mcclogo" href="http://mccann.com.au" target="_blank"><img src="img/mccann.png" width="120"/></a>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/jquery.fittext.js"></script>
        <script type="text/javascript">


            var hasname = <?php echo ($name) ? '1' : '0'; ?>;
            $(function () {
                $('#subForm').submit(function (e) {
                    e.preventDefault();
                    $.getJSON(
                    this.action + "?callback=?",
                    $(this).serialize(),
                    function (data) {
                        if (data.Status === 400) {
                            $('.form_feedback').html(data.Message);
                        } else { // 200
                            $('.form_feedback').html(data.Message);
                        }
                    });
                });

                // var flash_count = 0;
                // var anims = ['tada','wobble','rubberBand','tada']
                // function names(){
                //     name = "<?php echo ($name) ? strtoupper($name) : false; ?>";
                //     flash_count ++;
                //     var n = Math.round(Math.random()*2)+1;
                //     var x = Math.round(Math.random()*90);
                //     var y = Math.round(Math.random()*80);
                //     $("#video").prepend('<span class="name tk-league-gothic animated '+anims[n]+'" rel="f_'+flash_count+'" style="top:'+y+'%;left:'+x+'%;font-size:'+n+'em">'+name+'</span>')
                //     var r = $('span[rel="f_'+flash_count+'"]');
                //     setTimeout(function(){r.remove()},500)
                // }

                var play;
                function bigname(){
                    $(".name").bigtext();
                    $(".name").css('visibility','visible')
                    setTimeout(function(){$(".name").css('visibility','hidden')},500)
                }

                function go(){
                    play = setInterval(bigname,5000);
                }
                function stop(){
                    clearInterval(play);
                }







                // vimeo api

                
                var player = $('iframe');
                var url = window.location.protocol + player.attr('src').split('?')[0];
                var status = $('.status');

                // Listen for messages from the player
                if (window.addEventListener){
                    window.addEventListener('message', onMessageReceived, false);
                }
                else {
                    window.attachEvent('onmessage', onMessageReceived, false);
                }

                // Handle messages received from the player
                function onMessageReceived(e) {
                    var data = JSON.parse(e.data);
                    
                    switch (data.event) {
                        case 'ready':
                            onReady();
                            break;
                           
                        case 'play':
                            onPlay();
                            break;
                           
                        case 'playProgress':
                            onPlayProgress(data.data);
                            break;
                            
                        case 'pause':
                            onPause();
                            break;
                           
                        case 'finish':
                            onFinish();
                            break;
                    }
                }

                // Call the API when a button is pressed
                $('button').on('click', function() {
                    post($(this).text().toLowerCase());
                });

                // Helper function for sending a message to the player
                function post(action, value) {
                    var data = {
                      method: action
                    };
                    
                    if (value) {
                        data.value = value;
                    }
                    
                    var message = JSON.stringify(data);
                    player[0].contentWindow.postMessage(data, url);
                }

                function onReady() {
                    status.text('ready');
                    
                    post('addEventListener', 'play');
                    post('addEventListener', 'pause');
                    post('addEventListener', 'finish');
                    post('addEventListener', 'playProgress');
                }

                function onPlay() {
                    go();
                }

                function onPause() {
                    stop();
                }

                function onFinish() {
                    stop();
                }

                function onPlayProgress(data) {
                    if(data.seconds > 42) stop();
                }
                


            });



        </script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-57794328-1','auto');ga('send','pageview');
        </script>
    </body>
</html>
