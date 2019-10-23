<?php

namespace App\Helpers;

class Helper
{
    public static function fullTitle($pageTitle)
    {
        $baseTitle = 'Ruby on Rails Tutorial Sample App';
        if ( empty($pageTitle)) {
            return $baseTitle;
        } else {
            return $pageTitle.' | '.$baseTitle;
        }
    }
                     
}

