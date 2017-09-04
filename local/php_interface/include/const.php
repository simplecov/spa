<?php
/**
 * Большой слайдер на страницах
 */
define('MAIN_SLIDER', 1);

/**
 * Инфоблоки типа "Контент"
 */
define('IBLOCK_GALLERY', 5);
define('IBLOCK_CERTIFICATES', 2);
define('IBLOCK_SPECIALS', 4);

/**
 * Инфоблоки типа "Услуги"
 */
define('IBLOCK_SPA', 6);
define('IBLOCK_FITNESS', 3);
define('IBLOCK_MASSAGE', 7);


/**
 * Не обращать внимания
 */
$allowedDirs = array(
    '/index.php',
    '/about',
    '/beauty',
    //'/certificates',
    '/fitness-center',
    //'/gallery',
    '/massage',
    '/spa-center',
    //'/specials'
);