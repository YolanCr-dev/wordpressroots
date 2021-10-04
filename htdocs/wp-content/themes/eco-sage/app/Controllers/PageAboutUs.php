<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageAboutUs extends Controller
{
    public function randomMessage(){
        return 'this message is rooted in the controller, available in page-about-us template file';
    }
}