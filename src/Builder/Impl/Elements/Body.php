<?php

namespace App\Builder\Impl\Elements;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;
use App\Builder\Impl\Element;


class Body extends Element
{

    public function __construct(array $sub_elements = [])
    {
        $this->scaffold();

        parent::__construct('body', $sub_elements);
    }

    protected function scaffold()
    {
        
    }

    protected function validateSubElements()
    {
        //todo: validate sub elements for head, and body only
    }

}
