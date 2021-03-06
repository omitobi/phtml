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
use App\Builder\Impl\Boot;
use App\Builder\Impl\Elements\Html;
use App\Builder\Impl\Elements\Head;
use App\Builder\Impl\Elements\Title;
use App\Builder\Impl\Elements\Body;

use App\Builder\Impl\Elements\BodyElements\Div;
use App\Builder\Impl\Elements\BodyElements\Span;
use App\Builder\Impl\Elements\BodyElements\Form;
use App\Builder\Impl\Elements\BodyElements\A;

use App\Builder\Impl\Elements\FormElements\Input;
use App\Builder\Impl\Elements\FormElements\Button;
use App\Builder\Impl\Elements\FormElements\Label;


$form = new Form([
    new Label(['Enter your name']),
    new Input(),
    new Button(),
]);


$div = new Div([
    new Span(['First span ever. Span is good here too']),
    new Element('br'),
    'We just broke the line',
    new Element('br'),
    new Span(['And break again because, Span is good here too']),
    new Element('br'),
    $form,
    "<br> And up there we have a form ;)",
    "<br> So we add a link <br>",
    new A(['Here\'s a beautiful link'])
]);

$div->name = 'Ninja';
$div->width = '900px';
$div->height = '1000px';
$div->id = 'Ninja';

$body = new Body([$div]);
$body->bgcolor = 'yellow';

// echo $body;
new Html([
    new Head([
        new Title(['my first title'])
    ]),
    $body
]);

$boot = (new Boot);
$boot->access(function ($boot){
    $boot->setHtml([
        
        $boot->setBody([
        
            $boot->setForm([
                new Label(['Label 1']),
                new Input(),
                new Label(['Label 2']),
                new Input(),
                'aaa'
            ])

        ])
    ]);
});

echo $boot;

//echo $element;