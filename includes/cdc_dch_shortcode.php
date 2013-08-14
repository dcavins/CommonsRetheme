<?php
function cdc_dch_nav() {
?>
<style type="text/css">
.popup {z-index:10; width:700px; height:600px; background-color:#d3d3d3;border:solid 5px #bebebe; margin:0 auto;padding:15px;display:none;  
  position:fixed;top:50%; left:50%; margin-left:-350px; margin-top:-300px;}
.closex {float:right;cursor:pointer;color:#0645AD;}
.closex:hover { TEXT-DECORATION: underline; font-weight:bold; }
#overlay {
    display: none; /* ensures it’s invisible until it’s called */
    position: absolute; /* makes the div go into a position that’s absolute to the browser viewing area */
    left: 25%; /* positions the div half way horizontally */
    top: 25%; /* positions the div half way vertically */
    padding: 25px; 
    border: 2px solid black;
    background-color: #ffffff;
    width: 50%;
    height: 50%;
    z-index: 100; /* makes the div the top layer, so it’ll lay on top of the other content */
}
#fade {
    display: none;  /* ensures it’s invisible until it’s called */
    position: fixed;  /* makes the div go into a position that’s absolute to the browser viewing area */
    left: 0%; /* makes the div span all the way across the viewing area */
    top: 0%; /* makes the div span all the way across the viewing area */
    background-color: black;
    -moz-opacity: 0.7; /* makes the div transparent, so you have a cool overlay effect */
    opacity: .70;
    filter: alpha(opacity=70);
    width: 100%;
    height: 100%;
    z-index: 90; /* makes the div the second most top layer, so it’ll lay on top of everything else EXCEPT for divs with a higher z-index (meaning the #overlay ruleset) */
}
</style>




<div id="overlay"><div class="closex"  onclick="javascript:closediv(this);return false;">[X] close</div><div><br><p><ul><li><a href="http://www.communitycommons.org/wp-content/uploads/2013/06/guidingprinciples.pdf" target="_blank">Guiding Principles</a></li><li><a href="http://www.communitycommons.org/wp-content/uploads/2013/06/practices.pdf" target="_blank">Recommended Practices for Enhancing Community Health Improvement</a></li></ul></p></div>
</div>
<div id="fade"></div>

<script type="text/javascript">
	var $j = jQuery.noConflict();
	var baseurl = window.location.protocol + "//" + window.location.host + "/";
	var formid = 4;
	if (baseurl == "http://dev.communitycommons.org/") {
		formid = 10;
	} 
		
	function navpg(x){				
		$j("#gform_target_page_number_" + formid).val(x.value); $j("#gform_" + formid).trigger("submit",[true]);	
		$j("#steps").val(x.value);
	}
	function navpg2(x){				
		$j("#gform_target_page_number_" + formid).val(x); $j("#gform_" + formid).trigger("submit",[true]);	
		$j("#steps").val(x);		
	}	
	
	$j(document).bind('gform_post_render', function(event, form_id, current_page){
		//alert("Mike's test - PAGE:" + current_page);
	
		if (current_page == 5)
		{
			$j("#steps").val(4);
			$j(".gform_next_button").click(function() {			
				var value9 = $j('input[name=input_9]:checked').val();	
				var value20 = $j('input[name=input_20]:checked').val();
				var value19 = $j('input[name=input_19]:checked').val();
				var value18 = $j('input[name=input_18]:checked').val();
				var value17 = $j('input[name=input_17]:checked').val();
				var value16 = $j('input[name=input_16]:checked').val();
				var value15 = $j('input[name=input_15]:checked').val();
				var value14 = $j('input[name=input_14]:checked').val();
				var value13 = $j('input[name=input_13]:checked').val();
				var value12 = $j('input[name=input_12]:checked').val();
				var value56 = $j('input[name=input_56]:checked').val();		
				if (value9 < 3 || value20 < 3 || value19 < 3 || value18 < 3 || value17 < 3 || value16 < 3 || value15 < 3 || value14 < 3 || value13 < 3 || value12 < 3 || value53 < 3) {
					$j("#overlay").show();
					$j("#fade").show();
				}
			});
			
		} else if (current_page == 8) {
			$j("#steps").val(7);
		} else if (current_page == 10) { 
			$j("#steps").val(9);
		} else {
			$j("#steps").val(current_page);
		}	
		

		
	});
	
	$j(document).ready(function()
	{
		if (!getUrlVars()["navpg"]) {
		
		} else {
			var pg = getUrlVars()["navpg"];			
			navpg2(pg);
		}	
		$j('#tacticbtn').click(function () {		
			window.open('https://www.communitiestransforming.org/');   
		});
	});
	
	function getUrlVars()
	{
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}

	function closediv(x) {
		$j("#overlay").hide();
		$j("#fade").hide();
	}

	
</script>
<?php 

	$a = array(
		'Name your Journey' => 1,
		'Journey Overview' => 2,
		'Step 1. Strong Coalitions' => 3,
		'Step 2. Define Community' => 4,
		'Step 3. Explore Community Needs' => 6,
		'Step 4. Setting Priorities' => 7,
		'Step 5. Intervention Selection' => 9,
		'Step 6. Engage Healthcare in Selecting Priorities and Interventions' => 11,
		'Step 7. Implement Interventions' => 12,
		'Step 8. Evaluations and Monitoring' => 13,
		'Journey Summary' => 14		
	);

	$pt1 = '<div style="width:800px; margin:0 auto;position:relative;top:-20px;"><a href="/groups/cdc-division-of-community-health/" title="Return to group home page"><img src="http://dev.communitycommons.org/wp-content/uploads/2013/08/banner.jpg" alt="Community Health Improvement Journey" style="box-shadow: 0px 0px 0px #ffffff;"></a></div><div style="float:right;text-align:right;">Navigate to: <select onchange="javascript:navpg(this);" id="steps">';
	$pt2 = '';
	foreach($a as $option => $val) {
		$pt2 = $pt2 . "<option value='".$val."'>".$option."</option>";			
	}
	$pt3 = '</select></div>';
	$mb = $pt1.$pt2.$pt3;
	return $mb;

}

add_shortcode( 'cdc_dch_nav', 'cdc_dch_nav' );
