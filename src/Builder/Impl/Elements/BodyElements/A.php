<?php

namespace App\Builder\Impl\Elements\BodyElements;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;
use App\Builder\Impl\Element;


class A extends Element
{

    public function __construct(array $sub_elements)
    {
        parent::__construct('a', $sub_elements);
    }

    protected function scaffold()
    {
        $this->__set('href', '#');
    }

}
