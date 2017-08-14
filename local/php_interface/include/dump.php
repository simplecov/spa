<?php
function dump($data, $exit = false)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';

    if($exit)
        die;
}