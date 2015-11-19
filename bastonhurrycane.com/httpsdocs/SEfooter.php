

</div>
					</div>
				</div>
			</div>
		
		
		<!-- Footer Wrapper -->
			<div id="footer-wrapper" style="float:left;width:100%;padding:30px 0;text-align:center;color:#FFF; background:#232323">

				<p>&copy;  Más Ofertas Web S. A. de C. V.</P>

				
			</div>
            
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

<script language="javascript" type="text/javascript" src="/innova-shared/innova-forms.jquery.js"></script>
<script language="javascript" type="text/javascript" src="/innova-shared/innova-checkout.jquery.js"></script>
<!-- activate tabs with JavaScript -->
<script type="text/javascript">

/**
 * Load mask content
 */
 
$(document).ready(function(){

	/*
		Page Refresh | Items in Cart	
	*/
	if('101606224-normal-1 ' != ''){
		var cart_data = '101606224-normal-1 ';
		var cart_ary = cart_data.split('|');
		var valid=0;

		for (var i = 0; i < cart_ary.length; i++) {
		    var this_data = cart_ary[i];

		    if(this_data != ''){
		    	
		    	var product_ary = this_data.split('-');
		    	var this_product_id = product_ary[0];
		    	var this_product_offer = product_ary[1];
		    	var this_product_qty = product_ary[2];
		    	var this_element_id = 'product-' + this_product_id + '-' + this_product_offer;
		    	
		    	if($('#' + this_element_id).length > 0){
		    		/*ToDo. Considerar tipo de elemento [checkbox | select | radio]*/
		    		$('#' + this_element_id).attr('checked', 'checked');
		    		valid++;
		    	}
		    }
		}

		if(valid > 0){
			set_total_pay();
		}

	}

	/*
		PayPal Customer Cancel
	*/

	if('' != ''){
		show_paso3();
	}


	/*
		PayPal Response Failed
	*/

	if('' == 1){
		var msg = document.getElementById("alert_msg");
		msg.innerHTML = '<center><b>  </b></center>';
		$('#x-msg').click();
		show_paso3();
	}
	
});


</script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="js/jquery.gritter.min.js"></script>
<script type="text/javascript" src="js/localstorage-jcart.js"></script>
        
        
<script>
jQuery(document).ready(function() {
		
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
	});
	
});
</script>

<script type="text/javascript">
var google_tag_params = {
ecomm_prodid: '<?php echo $_SESSION['items'][1]['items_id'] ?>',
ecomm_pagetype: 'checkout',
ecomm_totalvalue: '<?php echo $va['total_order'] ?>',
};
</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1068963570;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1068963570/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>