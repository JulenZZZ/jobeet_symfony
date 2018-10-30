<?php
/**
 * Created by PhpStorm.
 * User: ju.zulaika
 * Date: 24/10/2018
 * Time: 18:09
 */

class Jobeet
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}