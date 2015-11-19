function Mod10(ccno){
  
	ccsum=0;
	cclen=ccno.length;

	result = false;

	if(cclen == 0)
	{
		$("#validating_number").attr('src', '');
		$("#visaimg").attr('src', 'images/visaoff.jpg');
		$("#mcimg").attr('src', 'images/mastoff.jpg');
		return null;
	}

	if (cclen<13)
	{
		result = false;
	}
	else
	{
		for (i=1; i<cclen; i++)
		{
			ccdig=parseInt(ccno.charAt(cclen-(i+1)));
			if (i%2==1)
			{
				ccdig*=2;
				if (ccdig.toString().length==2)
				{
					ccdig=(parseInt(ccdig.toString().charAt(0))+parseInt(ccdig.toString().charAt(1)));
				} 
			}
			ccsum+=ccdig;
		}

		ccsum+=parseInt(ccno.charAt(cclen-1));
		
		if(ccsum%10==0)
		{
			cc_type_id='NOT VALID TYPE';

			if (ccno.match(/^4/) )
			{
				cc_type_id = 'Visa';
				if (cclen==13 || cclen==16)
				{
					result = true;
				}
				else
				{
					result = false;
				}
			}

			if (ccno.match(/^51|^52|^53|^54|^55/) )
			{
				cc_type_id = 'Mastercard';
				if (cclen==16)
				{
					result = true;
				}
				else
				{
					result = false;
				}
			}

			if (ccno.match(/^405501|^405502|^405503|^405504|^405550|^405551|^405552|^405553|^405554|^415928|^424604|^424604|^427533|^4288|^443085|^4484|^4485|^4486|^4715|^4716|^4804/) )
			{
				cc_type_id = 'Visa'; //visapurchasing
				if (cclen==16) 
				{
					vlengthgood=1;
				}
				else 
				{
					vlengthgood=0;
				}
			}

			if (ccno.match(/^490300|^490301|^49031|^49032|^490330|^490331|^490332|^490333|^490334|^49034|^49035|^49036|^49037|^49038|^49039|^49040|^490419|^490451|^490459|^490467|^490475|^490476|^490477|^490478|^4905|^491103|^491104|^491105|^491106|^491107|^491108|^491109|^49111|^49112|^49113|^49114|^49115|^49116|^491170|^491171|^491172|^491173|^491183|^491184|^491185|^491186|^491187|^491188|^491189|^49119|^4928|^4987/) )
			{
				cc_type_id = 'Visa'; //visaatmonly
				if (cclen==16) 
				{
					vlengthgood=1;
				}
				else 
				{
					vlengthgood=0;
				}
			}
		}
		else
		{
			result = false;
		}
	}

	$("#visaimg").attr('src', 'images/visaoff.jpg');
	$("#mcimg").attr('src', 'images/mastoff.jpg');

	if( result )
	{
		$("#validating_number").attr('src', 'images/pal.png');
		
		if(cc_type_id == "Visa"){
			$("#visaimg").attr('src', 'images/visaon.jpg');
			$("#pmtfield1").val('Visa');
		}

		if(cc_type_id == "Mastercard"){
			$("#mcimg").attr('src', 'images/maston.jpg');
			$("#pmtfield1").val('Mastercard');
		}
	}
	else 
	{
		$("#validating_number").attr('src', 'images/nones.png');
	}	

} 