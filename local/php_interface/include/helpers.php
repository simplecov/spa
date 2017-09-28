<?php

namespace Simplecov;

class Helpres{

    /**
     * Check dir for concurrences
     *
     * @param string $curDir
     * @param array $allowDirs
     * @return bool
     */
    public static function checkCurPage($allowDirs = array())
    {
        foreach ($allowDirs as $dir)
        {
            if($dir == '/index.php')
                return true;

            if(\CSite::InDir($dir . '/index.php'))
                return true;
            else
                return false;
        }
    }

    /**
     * Echo completed button or link
     *
     * @param string $type
     * @param string $class
     * @param string $buttonText
     * @param string $data
     * @param string $href
     */
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

    /**
     * Echo bg image with styles
     *
     * @param string $url
     * @param string $position
     * @param bool $templatePath
     */
    public static function createBgStyle($url, $position, $templatePath = true)
    {
        if($templatePath)
            $url = SITE_TEMPLATE_PATH . $url;
        echo 'style="background-image: url(' . $url . '); background-size: cover; background-position:' . $position . '"';
    }

    /**
     * Echo image source
     *
     * @param string $src
     */
    public static function getImageSrc($src)
    {
        echo SITE_TEMPLATE_PATH . '/assets/images' . $src;
    }

    function includeSlider($type, $const)
    {

    }
}

global $helper;
$helper = new Helpres();