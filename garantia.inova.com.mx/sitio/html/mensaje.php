<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  
 "http://www.w3.org/TR/html4/loose.dtd">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" />
		<title>Tracking de Pedidos</title>
		<link rel="stylesheet" type="text/css"href="img/estilos.css" />	

		<!-- Add jQuery library -->
		<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

		<!-- Add Button helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
		<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

		<!-- Add Thumbnail helper (this is optional) -->
		<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
		<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

		<!-- Add Media helper (this is optional) -->
		<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

				/*
				 *  Different effects
				 */

				// Change title type, overlay closing speed
				$(".fancybox-effects-a").fancybox({
					helpers: {
						title : {
							type : 'outside'
						},
						overlay : {
							speedOut : 0
						}
					}
				});

				// Disable opening and closing animations, change title type
				$(".fancybox-effects-b").fancybox({
					openEffect  : 'none',
					closeEffect	: 'none',

					helpers : {
						title : {
							type : 'over'
						}
					}
				});

				// Set custom style, close if clicked, change title type and overlay color
				$(".fancybox-effects-c").fancybox({
					wrapCSS    : 'fancybox-custom',
					closeClick : true,

					openEffect : 'none',

					helpers : {
						title : {
							type : 'inside'
						},
						overlay : {
							css : {
								'background' : 'rgba(238,238,238,0.85)'
							}
						}
					}
				});

				// Remove padding, set opening and closing animations, close if clicked and disable overlay
				$(".fancybox-effects-d").fancybox({
					padding: 0,

					openEffect : 'elastic',
					openSpeed  : 150,

					closeEffect : 'elastic',
					closeSpeed  : 150,

					closeClick : true,

					helpers : {
						overlay : null
					}
				});

				/*
				 *  Button helper. Disable animations, hide close button, change title type and content
				 */

				$('.fancybox-buttons').fancybox({
					openEffect  : 'none',
					closeEffect : 'none',

					prevEffect : 'none',
					nextEffect : 'none',

					closeBtn  : false,

					helpers : {
						title : {
							type : 'inside'
						},
						buttons	: {}
					},

					afterLoad : function() {
						this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
					}
				});


				/*
				 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
				 */

				$('.fancybox-thumbs').fancybox({
					prevEffect : 'none',
					nextEffect : 'none',

					closeBtn  : false,
					arrows    : false,
					nextClick : true,

					helpers : {
						thumbs : {
							width  : 50,
							height : 50
						}
					}
				});

				/*
				 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
				*/
				$('.fancybox-media')
					.attr('rel', 'media-gallery')
					.fancybox({
						openEffect : 'none',
						closeEffect : 'none',
						prevEffect : 'none',
						nextEffect : 'none',

						arrows : false,
						helpers : {
							media : {},
							buttons : {}
						}
					});

				/*
				 *  Open manually
				 */

				$("#fancybox-manual-a").click(function() {
					$.fancybox.open('1_b.jpg');
				});

				$("#fancybox-manual-b").click(function() {
					$.fancybox.open({
						href : 'iframe.html',
						type : 'iframe',
						padding : 5
					});
				});

				$("#fancybox-manual-c").click(function() {
					$.fancybox.open([
						{
							href : '1_b.jpg',
							title : 'My title'
						}, {
							href : '2_b.jpg',
							title : '2nd title'
						}, {
							href : '3_b.jpg'
						}
					], {
						helpers : {
							thumbs : {
								width: 75,
								height: 50
							}
						}
					});
				});


			});
		</script>
		<style type="text/css">
			.fancybox-custom .fancybox-skin {
				box-shadow: 0 0 50px #222;
			}


		</style>
	</head>
	
	<body>

		<div style="background-color:#111111;"> 
			<div style="width:100%;max-width:900px; margin-left: auto ;  margin-right: auto ;text-align:left;">
				<a href="<?= $actual_link ?>"><img src="img/logo2.png" height="90px" style="margin:10px;margin-bottom:25px; border:none;"></a>
			</div>
		</div>

		<div  class="main">	
			<h1>Garantía Registrada</h1>
			<hr>
		
			<p>
				La Garantía <b><?= $_SESSION['id_warranty'] ?></b> del artículo <b><?= 'Producto X' ?></b> ha sido correctamente registrada el <?= date("Y-m-d") ?>.
			</p>
			
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
			</p>

			<center>
				<div style="border: 1px solid #fbca6b; padding: 15px; background-color:#fdfdb3;margin-top:5px;width:90%;max-width:340px;">
					Para más información marque al:  <br>
					<font size=4><b>Tel. 01 (55) 10872577</b></font>
				</div>
				<br><br>
			<center>

			<a class="fancybox fancybox.iframe" href="privacidad.html">Politíticas de Privacidad</a>
		</div>


		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51145920-1', 'inova.com.mx');
		  ga('send', 'pageview');

		</script>

	</body>
</html>
