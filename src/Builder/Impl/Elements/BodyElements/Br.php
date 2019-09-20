<?php

namespace App\Builder\Impl\Elements\BodyElements;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;
use App\Builder\Impl\Element;


class Br extends Element
{

    public function __construct(array $sub_elements)
    {
        $this->makeNonCollapsible();
        parent::__construct('br', $sub_elements);
    }

    protected function scaffold()
    {
        $this->__set('href', '#');
    }

    protected function makeNonCollapsible()
    {
        $this->is_collapsible = false;
    }

}
