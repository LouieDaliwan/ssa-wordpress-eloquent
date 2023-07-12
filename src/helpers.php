<?php

function dd($arg) 
{
    echo '<pre>',print_r($arg,1),'</pre>';
    die();
}