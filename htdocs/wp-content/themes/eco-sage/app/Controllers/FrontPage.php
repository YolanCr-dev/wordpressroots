<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function wcproducts(){
        $args = array(
            'category' => array( 'garden' ),
            'orderby' => 'name',
        );
        
        $products = wc_get_products( $args );
        return $products;
    }
}
