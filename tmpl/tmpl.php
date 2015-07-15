<?php
if (!defined("EXEC")) {
    die('No direct access');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="peluqueria, Carmen, Tineo, Asturias, solarium , solarium vertical, unisex ,extensiones,hairplum,wifi" />
<meta name="description" content="Peluquería Carmen Tineo Asturias
985801842" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="msvalidate.01" content="00A5EBE2A1B3A67BE50B9A90285E5578" />
<META HTTP-EQUIV="Content-Language" Content="es">
<meta name="google-site-verification" content="H8gKphH0X8MpbbwZ8D-Mb2ru22CodgaBHbgnonnhU20" />
<meta name="author" content="Jorge Cuerdo Álvarez www.jorge-cuerdo.tk">
<meta name="Robots" content="all follow" >
<title>Peluquería Unisex Carmen Tineo Asturias 985801842</title>



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
<link href="tmpl/style.css" rel="stylesheet" type="text/css" media="screen" />
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

<?php if($movile){?>
<style>
#menu {
position:relative;
top:-25px;
}

.post{
	position:relative;
top:-35px;
	}
	
	 .principal{float:left;width:100%;}
	 .facebook{margin:0 auto;}
</style>
<?php } ?>

</head>
<body>
<div id="wrapper">	
		<div id="header">
		<div id="logo">
				<div id="logo_main">
				<h1><a href="/">Peluquería Carmen</a></h1>  
				</div>
			</div>
			
		
			</div>
			
<div id="main">
	<div id="content">	
    <div id="menu">
				 <?php include_once "menu.php"; ?>
			</div>		
 <?php $lp->view(); ?>  					
						
</div>
					</div>
				
					<div style="clear: both;">&nbsp;</div>
					<div id="pie">
					    
						<div style="clear: both;">&nbsp;</div>	
						<div id="pie_left">Peluquería Carmen Tineo (Asturias) - 985801842 - <a href="https://www.facebook.com/peluqueriacarmentineo">Síguenos en FaceBook </a> <?php include 'menu_footer.php'; ?> </div>
						<div id="pie_right"> Desarrollada por <a href="http://www.jorge-cuerdo.tk">Jorge Cuerdo</a>.</div>	
						<div style="clear: both;">&nbsp;</div>				
				</div>
					</div>



				</div>

				

		
			</div>
	</body>
</html>