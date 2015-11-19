<?php $promo = preg_match('/ordenar|verificar|confirmacion|final/',substr($_SERVER['SCRIPT_NAME'],1)) == 0 ? 'onLoad="placeIt(); showIt(); showTheTime();"' : ''; ?>
<!DOCTYPE html><head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />



<title>InStyler | Tienda</title>   

<!--*********************************** SHOPPING CART *********************************-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        
        <script language="javascript" type="text/javascript" src="/innova-shared/jquery.tools.min.js"></script>
        <script language="javascript" type="text/javascript" src="/innova-shared/cokies.js"></script>
        <script language="javascript" type="text/javascript" src="/innova-shared/app/loadmask/jquery.loadmask.min.js"></script>
        <script language="javascript" type="text/javascript" src="/innova-shared/innova-base.js"></script>
        
        <link type="text/css" media="screen" rel="stylesheet" href="/innova-shared/jquerytools.css" />
        <link type="text/css" media="screen" rel="stylesheet" href="/innova-shared/app/loadmask/jquery.loadmask.css" />
        <link type="text/css" media="screen" rel="stylesheet" href="/mod/tabs-accordion.css" />
        
        <!--*********************************** SHOPPING CART *********************************-->
        
        
        <script type="text/javascript" src="/mod/animatedcollapse.js"></script>
        <script type="text/javascript">
        
        animatedcollapse.addDiv('movil', 'fade=1,speed=500,')
        animatedcollapse.addDiv('movilcart', 'fade=0,speed=500, hide=1')
        
        animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
            //$: Access to jQuery
            //divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
            //state: "block" or "none", depending on state
        }
        
        animatedcollapse.init()
        
        </script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="assets/images/favicon.ico"/>

<link href="assets/css/framework.css" rel="stylesheet" />
<link href="assets/css/main.css" rel="stylesheet" />

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17539527-13']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();



</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PV6CDB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PV6CDB');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){
    z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?21C2UQwR3bsgtB8WP0Lh9n92CymfpwBB';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>

<!--End of Zopim Live Chat Script-->

    <!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=48818,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code --> 

<style>body{backgorund:#FFF}font.envio{display:none}</style>

<script>
	jQuery(document).ready(function() {
        var eo = $('font.envio').parent('td').parent('tr');
		var ot1 = eo.children().children('.goVer');
		var ot2 = eo.children().children('.goRes');
	
		$(eo).hide();
    });
	
</script>

</head>

<body>

    <header class="ingrid-12 bg_color_1" style="position:relative"><div class="px1000">
    
    	<div class="ingrid-4" id="main_logo">
        	<a href="http://instyler.com.mx/"><img src="assets/images/instyler_logo.png" /></a>
        </div>
        
        <nav class="ingrid-4" id="header_menu">
        	<ul>
            	<li><a href="http://instyler.com.mx/">Regresar</a></li>
            </ul>
        </nav>
        
        <div class="ingrid-4 align-right" id="hedaer_info">
			<img src="assets/images/inova_logo_white.png" id="h_i_logo" />
        	<img src="assets/images/inova_tel.png" id="h_phone" />
        </div>

	</div></header>
    <style>.px1000 label, .px1000{color:#333 !important}</style>
    <div class="ingrid-12"><div class="px1000" style="color:#333; max-width: 100%;  text-align: center;">
     
