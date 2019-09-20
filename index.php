<?php
/**
 * Created by PhpStorm.
 * User: omitobisam
 * Date: 26/08/2017
 * Time: 17:39
 */

include "vendor/autoload.php";

use App\Builder\Impl\Dom;
use App\Builder\Impl\Element;
use App\Builder\Impl\Elements\Html;
use App\Builder\Impl\Elements\Head;
use App\Builder\Impl\Elements\Title;
use App\Builder\Impl\Elements\Body;

$form = new Element('form',[
    'Enter your name',
    new Element('input'),
    new Element('button', ['Submit']),
]);

$form->action = '';
$form->method = 'Post';


$div = new Element('div', [
    new Element('span', ['First span ever. Span is good here too']),
    new Element('br'),
    'We just broke the line',
    new Element('br'),
    new Element('span', ['And break again because, Span is good here too']),
    new Element('br'),
    $form,
    "<br> And up there we have a form ;)"
]);

$div->name = 'Ninja';
$div->width = '900px';
$div->height = '1000px';
$div->id = 'Ninja';

$body = new Element('body', [$div]);
$body->bgcolor = 'yellow';

// echo $body;
echo new Html([
    new Head([
        new Title(['my first title'])
    ]),
    new Body(['sdsds'])
]);

//echo $element;