<?php

namespace Simplecov;

class Helpres{

    public static function createButton($type, $class, $buttonText, $data = '', $href = '#')
    {
        switch($type)
        {
            case 'modal':
                $data = $data ? 'data-info="'. $data .'"' : '';
                echo '<a href="' . $href . '" class="' . $class . '" data-toggle="modal" data-target="#formModal" ' . $data . '><span>' . $buttonText . '</span></a>';
                break;

            case 'submit':
                echo '<button class="' . $class . '" type="submit" ' . $data . '><span>' . $buttonText . '</span></a>';
                break;

            case 'link':
                echo '<a href="' . $href . '" class="' . $class . '" ' . $data . '><span>' . $buttonText . '</span></a>';
                break;
        }
    }

    public static function createBgStyle($url, $position, $templatePath = true)
    {
        if($templatePath)
            $url = SITE_TEMPLATE_PATH . $url;
        echo 'style="background-image: url(' . $url . '); background-size: cover; background-position:' . $position . '"';
    }

    public static function getImageSrc($src)
    {
        echo SITE_TEMPLATE_PATH . '/assets/images' . $src;
    }
}