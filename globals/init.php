<?php

include '../vendor/autoload.php';


use Phtml\Element\Element;

function element($element = '')
{
    return new Element($element);
}