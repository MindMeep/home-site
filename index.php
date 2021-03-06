<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MindMeep</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
        <section class="intro">
            <div>
                <h1>MindMeep</h1>
                <p>We're a group dedicated to making interesting projects of our own designing, and learning a ton while we're at it!</p>
            </div>
        </section>
        <header>
            <div>

                <nav>
                    <a href="#">Work</a>
                    <a href="#">Team</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        </header>
        <section class="work">
            <div>
                <h1>Our Work</h1>
                <p>Some description of our work comes here.</p>
                <a href="api/project/10" class="ajax-popup-link">
                	<img src="http://css-tricks.com/examples/SlideinCaptions/images/1.jpg">
                	<span>Something</span>
                </a><a href="api/project/11" class="ajax-popup-link">
                	<img src="http://css-tricks.com/examples/SlideinCaptions/images/1.jpg">
                	<span>Something</span>
                </a><a href="api/project/12" class="ajax-popup-link">
                	<img src="http://css-tricks.com/examples/SlideinCaptions/images/1.jpg">
                	<span>Something</span>
                </a><a href="api/project/13" class="ajax-popup-link">
                	<img src="http://css-tricks.com/examples/SlideinCaptions/images/1.jpg">
                	<span>Something</span>
                </a><a href="api/project/14" class="ajax-popup-link">
                	<img src="http://css-tricks.com/examples/SlideinCaptions/images/1.jpg">
                	<span>Something</span>
                </a><a href="api/project/15" class="ajax-popup-link">
                	<img src="http://css-tricks.com/examples/SlideinCaptions/images/1.jpg">
                	<span>Something</span>
                </a>
            </div>
        </section>
        
        <section>
            <div>
                <h1>Meet the Team</h1>
                <p>Our profficent, awesome team</p>
                <!-- pictures and names here -->
            </div>
        </section>
        <section>
            <div>
                <h1>Contact Us</h1>
                <p>Ask as about a project, give us a tip, or pretty much anything you want to talk to us about! We read every message, so don't worry!</p>
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Name" /><input type="text" name="email" placeholder="Email"/>
                    <textarea placeholder="Message"></textarea>
                    <button>Send</button>
                </form>
            </div>
        </section>
        <a href="#" class="tocontact"><i class="fa fa-envelope fa-2x"></i></a>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){ 
                $(window).scroll(function(){
                    if ($(this).scrollTop() > 100) {
                        $('.tocontact').fadeIn();
                    } else {
                        $('.tocontact').fadeOut();
                    }
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
