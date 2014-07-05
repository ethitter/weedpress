<?php
/**
 * Plugin Name: WeedPress
 * Plugin URI: http://weedpress.co
 * Description: The features that turn WordPress into WeedPress
 * Version: 1
 * Author: Kevin Conboy
 * Author URI: weedpress.co
 * License: GPL3
 */

// Main Dispensary Menu Handler
include "inc/dispensary.php";

// Register WeedPress CPTs
include "inc/custom-post-types.php";

// Handles Custom Fields for WeedPress CPTs
include "inc/custom-fields.php";

// Posts 2 Posts Code for Parent Strains
include "inc/parent-strains.php";

// Hide Sharing Options on CPTs
include "inc/hide-sharing.php";

// Contact Info Widget from Nova
include "inc/contact-info-widget.php";

// Strains Autocomplete with local Leafly Data
include "inc/strains-leafly.php";

// Turn Certain Categories into Radio Buttons instead of Check Boxes
include "inc/radio-buttons.php";

// Forces Clean MP6 Theme
include "inc/color-scheme.php";

// Unregister Unused WP Default and Jetpack Widgets
include "inc/unregister-widgets.php";

//Add lines to sidebar separators
include "inc/add_lines_to_separators.php";