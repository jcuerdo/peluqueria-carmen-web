<?php
if (!defined("EXEC")) {
    die('No direct access');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">     
    <head>         
        <title>Peluquería Carmen          
        </title>      

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />         
	<link rel="stylesheet" href="css/global.css">
	        <script src="js/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>

        <script src="js/jquery.colorbox.js"></script> 
        <link rel="shortcut icon" type="image/x-icon" href="tmpl/favicon.ico"/>
        <script>
            $(document).ready(function(){   

                $(".iframe").colorbox({
                    iframe:true, 
                    width:"50%", 
                    height:"70%"
                });
                $(".imagen").colorbox({});
            }); 
        </script> 

        <link rel="stylesheet" type="text/css" href="tmpl/colorbox.css"/> 
        
        <script>
		$(function(){
			// Set starting slide to 1
			var startSlide = 1;
			// Get slide number if it exists
			if (window.location.hash) {
				startSlide = window.location.hash.replace('#','');
			}
			// Initialize Slides
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				generatePagination: true,
				play: 3000,
				pause: 3000,
				hoverPause: true,
				// Get the starting slide
				start: startSlide,
				animationComplete: function(current){
					// Set the slide number as a hash
					//window.location.hash = '#' + current;
				}
			});
		});
	</script>
    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4862846-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

 <link rel="stylesheet" type="text/css" media="screen" href="tmpl/style-popup.css" /> 

    </head>     
    <body>   
    <div id="menu">
    	<h1><a href="/">Peluquería Carmen</a></h1>
				 <?php include_once "menu.php"; ?>
			</div>                     
        <?php $lp->view(); ?>  
        
        <div id="pie_left">Peluquería Carmen 2012 <?php include 'menu_footer.php'; ?></div>
    </body>
</html>