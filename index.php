<?php
/**
 * Created by PhpStorm.
 * User: omitobisam
 * Date: 26/08/2017
 * Time: 17:39
 */

include "vendor/autoload.php";
include "globals/global.php";

$body = $element->_e_;
$body->_element = 'body';
$body->bgcolor = 'yellow';

echo $body;
//another element

$h1 = $element->_e_;
$h1->_element = 'h1';
$h1->_text = 'something';
$h1->element_ = 'h1';
echo $h1;

$form = $element->_e_;
$form->_element = 'form';
$form->method = 'post';
$form->class = 'form';

$form->_text = 'Name :';

$input = $element->_e_;
$input->_element = 'input';
$input->type = 'text';
$input->value = 'Something here...';
$input->placeholder = 'Something here is working...';

$form->_text .= $input;


$input = $element->_e_;
$input->_element = 'input';
$input->type = 'button';
$input->value = 'Submit';

$form->_text .= $input;

$form->_element = 'form';

echo $form;

//echo $element;