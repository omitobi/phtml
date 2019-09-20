<?php

namespace App\Builder\Impl\Elements\FormElements;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;
use App\Builder\Impl\Element;


class Button extends Element
{

    public function __construct(array $sub_elements = ['Submit'])
    {
        parent::__construct('button', $sub_elements);
    }

    protected function scaffold()
    {
        $this->__set('name', 'submit');
    }

}
