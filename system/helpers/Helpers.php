<?php

function base_url()
{
    define('BASE_URL','http://localhost/framewok/');
    return BASE_URL;
}

function dep($data)
{
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}
