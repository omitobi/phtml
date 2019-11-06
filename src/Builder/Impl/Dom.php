<?php

namespace App\Builder\Impl;

use App\Builder\Abstracts\AbstractDom;
use App\Builder\Contracts\DomInterface;


class Dom extends AbstractDom implements DomInterface
{
    protected $elements = [];

    protected function initializeBaseElements()
    {
       $this->elements = [
           new Element('html', [
               new Element('head'),
               new Element('body'),
           ]),
        ];
    }

    public function __toString()
    {
        $html = '';
        
        foreach($this->elements as $element) {
            $html .= $element;
        }

        return $html;
    }
}
