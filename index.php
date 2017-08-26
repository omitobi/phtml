<?php
/**
 * Created by PhpStorm.
 * User: omitobisam
 * Date: 26/08/2017
 * Time: 17:39
 */

include "vendor/autoload.php";


use Phtml\Element\Element;
//
$element = new Element();
$element->bgcolor = 'yellow';
$element->value = "24";

$inner = $element->inner = 'h1';
$inner->value = 'body';
echo $element;
echo $inner;

//echo $element;