<?php

namespace App\Helpers;

use Carbon\Carbon;

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

    public static function gravatar_for($user, $size = 80)
    {
        $gravatar_id = $user->email;
        $gravatar_url = "https://secure.gravatar.com/avatar/{$gravatar_id}?s={$size}";
        return \HTML::image($gravatar_url, $user->name, ['class' => 'gravatar']);
        
    }

    public static function hasVerified($user)
    {
        if (is_null($user)) {
            $auth = false;
        } else {
            $auth = !is_null($user->email_verified_at);
        }
        return $auth;
    }

    public static function timeAgoInWords($time)
    {
        $time = Carbon::parse($time);
        $diff = $time->diffInSeconds(Carbon::now());
        switch (true) {
        case $diff < 60:
            $unit = 'Second';
            break;
        case $diff < 3600:
            $unit = 'Minute';
            break;
        case $diff < 3600 * 24:
            $unit = 'Hour';
            break;
        default:
            $unit = 'Day';
        }
        $func = "diffIn".\Str::plural($unit);
        $diff = $time->$func(Carbon::now());
        return "{$diff} ".\Str::plural(mb_strtolower($unit), $diff)." ago.";
    }
}
