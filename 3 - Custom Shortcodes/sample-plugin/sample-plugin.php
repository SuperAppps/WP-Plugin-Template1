<?php
	
/*
Plugin Name: <Sample Plugin>
Plugin URI: <https://portfolio.appcloud.su/plugins/sample-plugin>
Description: <The ultimate ... plugin for WordPress. Capture ... Reward ... Build ... Import and export ... easily with .csv>
Version: <1.0>
Author: <Alexey Utkin @ SuperAppps>
Author URI: <https://portfolio.appcloud.su/>
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: <sample-plugin>
*/


/* !0. TABLE OF CONTENTS */

/*
	
	1. HOOKS
		1.1 - registers all our custom shortcodes
	
	2. SHORTCODES
		2.1 - sp_register_shortcodes()
		2.2 - sp_form_shortcode()
		
	3. FILTERS
		
	4. EXTERNAL SCRIPTS
		
	5. ACTIONS
		
	6. HELPERS
		
	7. CUSTOM POST TYPES
	
	8. ADMIN PAGES
	
	9. SETTINGS

*/




/* !1. HOOKS */

// 1.1
// hint: registers all our custom shortcodes on init
add_action('init', 'sp_register_shortcodes');



/* !2. SHORTCODES */

// 2.1
// hint: registers all our custom shortcodes
function sp_register_shortcodes() {
	
	add_shortcode('sp_form', 'sp_form_shortcode');
	
}

// 2.2
// hint: returns a html string for a email capture form
function sp_form_shortcode( $args, $content="") {
	
	// setup our output variable - the form html 
	$output = '
	
		<div class="sp">
		
			<form id="sp_form" name="sp_form" class="sp-form" method="post">
			
				<p class="sp-input-container">
				
					<label>Your Name</label><br />
					<input type="text" name="sp_fname" placeholder="First Name" />
					<input type="text" name="sp_lname" placeholder="Last Name" />
				
				</p>
				
				<p class="sp-input-container">
				
					<label>Your Email</label><br />
					<input type="email" name="sp_email" placeholder="ex. you@email.com" />
				
				</p>';
				
				// including content in our form html if content is passed into the function
				if( strlen($content) ):
				
					$output .= '<div class="sp-content">'. wpautop($content) .'</div>';
				
				endif;
				
				// completing our form html
				$output .= '<p class="sp-input-container">
				
					<input type="submit" name="sp_submit" value="Sign Me Up!" />
				
				</p>
			
			</form>
		
		</div>
	
	';
	
	// return our results/html
	return $output;
	
}




/* !3. FILTERS */




/* !4. EXTERNAL SCRIPTS */




/* !5. ACTIONS */




/* !6. HELPERS */




/* !7. CUSTOM POST TYPES */




/* !8. ADMIN PAGES */




/* !9. SETTINGS */

