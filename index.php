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
                <div class="name"><?php 
                    if($name){
                        echo "<span>".strtoupper($name)."</span>";
                    }
                ?></div>
<!--                 <div id="player"></div>
 -->                <iframe id="player1" src="//player.vimeo.com/video/114835296?api=1&autoplay=1" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <hr>
            <span class="status"></span>
            <form action="http://mccannau.createsend.com/t/j/s/pluiuj/" method="post" id="subForm">
                <p class="sub">
                    <span class="social">
                        <a href="#" class="tw ir">tw</a><a href="#" class="fb ir">fb</a>
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
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="//f.vimeocdn.com/js/froogaloop2.min.js"></script>
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
                            alert("Error: " + data.Message);
                        } else { // 200
                            alert("Success: " + data.Message);
                        }
                    });
                });

                var flash_count = 0;
                var anims = ['tada','wobble','rubberBand','tada']
                function names(){
                    name = "<?php echo ($name) ? strtoupper($name) : false; ?>";
                    flash_count ++;
                    var n = Math.round(Math.random()*2)+1;
                    var x = Math.round(Math.random()*90);
                    var y = Math.round(Math.random()*80);
                    $("#video").prepend('<span class="name tk-league-gothic animated '+anims[n]+'" rel="f_'+flash_count+'" style="top:'+y+'%;left:'+x+'%;font-size:'+n+'em">'+name+'</span>')
                    var r = $('span[rel="f_'+flash_count+'"]');
                    setTimeout(function(){r.remove()},500)
                }
                function bigname(){
                    $(".name").css('visibility','visible')
                    setTimeout(function(){$(".name").css('visibility','hidden')},1000)
                }
                $(".name").bigtext();

                setInterval(bigname,5000);







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
                    
                    post('addEventListener', 'pause');
                    post('addEventListener', 'finish');
                    post('addEventListener', 'playProgress');
                }

                function onPause() {
                    status.text('paused');
                }

                function onFinish() {
                    status.text('finished');
                }

                function onPlayProgress(data) {
                    status.text(data.seconds + 's played');
                }


            });



        </script>
        <script>
              var tag = document.createElement('script');

              tag.src = "https://www.youtube.com/iframe_api";
              var firstScriptTag = document.getElementsByTagName('script')[0];
              firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
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
