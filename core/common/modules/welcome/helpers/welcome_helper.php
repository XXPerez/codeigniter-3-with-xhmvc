<?php


if (!function_exists('welcome')) {
    function welcome($string)
    {
        return str_replace('Helo','Hello',$string);
    }
}
