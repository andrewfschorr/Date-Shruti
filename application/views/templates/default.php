<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- TODO add dynamic ttile-->
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/assets/css/style.css">
        
        <!--TODO include HTML shiv if IE whatever -->
        <script type="text/javascript" src="//use.typekit.net/jms6ovm.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    </head>
    <body>
    	
		<div id="wrapper">
			<div id="head">
			    <div class="center">
			        <img src="/assets/img/header.jpg" alt="">
			    </div>
			</div>

			<div class="center">
			   <div id="main" class="cf">
			       <!-- <div id="headShot">
			           <img src="/assets/img/headshot.jpg" alt="">
			       </div>
			       
			       <div id="intro" class="copy">
			        
			            <p><span class="lrg">this is shruti</span>. She is the best. Born in PA and currently living in Brooklyn, Shruti is a writer, traveller, and an all around top notch human being. (We don’t have to tell you how pretty she is, see for yourself).</p>
			            <p>We (her friends) don’t like that she has to use those meat market dating sites to meet guys. So we decided to make Shruti her own site. As in, for dating only her. Welcome to Date Shruti!</p>
			            <p>But, listen, we can’t let just anyone in on the Shruti magic. So first you have to take this test, do great, and you’ll win a date!</p>
			            <a class="cta" href="quiz.php">let's do this!</a>
			            
			       </div> -->
			       <p>
			       		<?php echo $body; ?>
			       </p>
			    </div>
			</div>
		</div>	
        <footer id="footer" class="cf">
           <ul>
               <li>
                   <a href="/">
                        Home   
                   </a>
               </li>
                <li>
                   <a href="about">
                       about
                   </a>
               </li>
                <li>
                   <a href="http://www.twitter.com/yayshruti" target="_blank">
                        @yayshruti
                   </a>
               </li>
           </ul>
           <h2>
               Brought to you by friends of Shruti &copy; 2013.
           </h5>
        </footer>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
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