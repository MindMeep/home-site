<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <div>
                <h1>MindMeep</h1>
                <nav>
                    <a href="#">Work</a>
                    <a href="#">Team</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        </header>
        <section class="intro">
            <div>
                <h1>MindMeep</h1>
                <p>We are some group that needs two lines that are a bit longer<br>Some description about us comes here.</p>
                <button>Get in touch!</button>
                <!-- maybe what or how we work -->
            </div>
        </section>
        <section class="work">
            <div>
                <h1>Our Work</h1>
                <p>Some description of our work comes here.</p>
                <figure>
                <a href="#">
                	<img src="http://css-tricks.com/examples/SlideinCaptions/images/1.jpg" alt="">
                	<figcaption>
                		yay!!!
                	</figcaption>
                	</a>
                </figure>
                <figure>
                <a href="#">
                	<img src="http://css-tricks.com/examples/SlideinCaptions/images/1.jpg" alt="">
                	<figcaption>
                		yay!!!
                	</figcaption>
                	</a>
                </figure>
				<figure>
                <a href="#">
                	<img src="http://css-tricks.com/examples/SlideinCaptions/images/1.jpg" alt="">
                	<figcaption>
                		yay!!!
                	</figcaption>
                	</a>
                </figure>
                <!-- image grid comes here -->
            </div>
        </section>
        
        <section>
            <div>
                <h1>Meet the Team</h1>
                <p>Some description about the team comes here.</p>
                <!-- pictures and names here -->
            </div>
        </section>
        <section>
            <div>
                <h1>Contact Us</h1>
                <p>Send us some love. No reason needed, just do it!</p>
                <!-- contact form -->
            </div>
        </section>
        <a href="#" class="tocontact"><i class="fa fa-envelope fa-2x"></i></a>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/waypoints.min.js"></script>
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