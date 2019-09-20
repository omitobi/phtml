<?php

namespace App\Builder\Impl\Elements\FormElements;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;
use App\Builder\Impl\Element;


class Label extends Element
{

    public function __construct(array $sub_elements = [])
    {
        parent::__construct('label', $sub_elements);
    }

    protected function scaffold()
    {
        $this->__set('for', '');
    }

}
