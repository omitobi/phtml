<?php

namespace App\Builder\Impl\Elements\BodyElements;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;
use App\Builder\Impl\Element;


class Span extends Element
{

    public function __construct(array $sub_elements = [])
    {
        parent::__construct('span', $sub_elements);
    }

    protected function scaffold()
    {
        
    }
}
