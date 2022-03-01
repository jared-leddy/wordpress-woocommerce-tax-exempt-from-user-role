<?php
// START PHP SNIPPET

function specialWholesaleTaxClass( $tax_class, $product ) {
    global $current_user;

    if (in_array('customer-nonprofit', 'customer-city', 'customer-state', 'customer-county', $current_user->roles))
        $tax_class = 'Zero Rate';
    else
        $tax_class = 'Standard Rate';

    return $tax_class;
}

add_filter( 'woocommerce_product_get_tax_class', 'specialWholesaleTaxClass', 1, 2 );
add_filter( 'woocommerce_product_variation_get_tax_class', 'specialWholesaleTaxClass', 1, 2 );

// END PHP SNIPPET
 ?>
