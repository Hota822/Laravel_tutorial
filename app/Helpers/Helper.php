<?php

namespace App\Helpers;


class Helper
{
    public static function fullTitle($pageTitle)
    {
        $baseTitle = 'Ruby on Rails Tutorial Sample App';
        if (empty($pageTitle)) {
            return $baseTitle;
        }
        return $pageTitle.' | '.$baseTitle;
    }

    public static function gravatar_for($user)
    {
        $gravatar_id = $user->email;
        $gravatar_url = "https://secure.gravatar.com/avatar/{$gravatar_id}";
        return \HTML::image($gravatar_url, $user->name, ['class' => 'gravatar']);
    }
}
