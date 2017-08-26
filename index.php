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

$element->_text = '<h1> It is working </h1>';

echo $element;