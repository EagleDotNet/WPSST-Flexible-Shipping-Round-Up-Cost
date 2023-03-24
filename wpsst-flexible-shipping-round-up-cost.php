<?php
/*
Plugin Name:  WPSST Flexible Shipping Round Up Cost
Plugin URI:   https://www.syriasmart.net
Description:  Round up shipping cost to 5. 
Version:      1.0
Author:       Syria Smart Technology 
Author URI:   https://www.syriasmart.net
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpsst-flexible-shipping-round-up-cost
Domain Path:  /languages
*/

add_filter('flexible-shipping/shipping-method/calculated-cost', 'round_up_shipping_cost_to_nearest_5', 10, 2);

function round_up_shipping_cost_to_nearest_5($cost, $rate) {
    $rounded_cost = ceil($cost/5) * 5;
    return $rounded_cost;
}

?>