jQuery(document).ready(function(){
	"use strict";
	grax_tm_ripple();
});
function grax_tm_ripple(){
	"use strict";
	jQuery('#ripple').ripples({
		resolution: 500,
		dropRadius: 20,
		perturbance: 0.04
	});
}