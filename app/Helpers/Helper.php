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

    public static function gravatarFor($user, $size = 80)
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
        $about = '';
        switch (true) {
            case $diff < 60:
                //$unit = 'Second';
                return 'less than a minute ago.';
            case $diff < 2700:
                $unit = 'Minute';
                break;
            case $diff < 3600:
                return 'about 1 hour ago.';
            case $diff < 3600 * 24:
                $unit = 'Hour';
                $about = 'about ';
                break;
            default:
                $unit = 'Day';
        }
        $func = "diffIn".\Str::plural($unit);
        $diff = $time->$func(Carbon::now());
        return "{$about}{$diff} ".\Str::plural(lcfirst($unit), $diff)." ago.";
    }
}
