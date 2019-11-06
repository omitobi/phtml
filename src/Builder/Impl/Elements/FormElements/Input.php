<?php

namespace App\Builder\Impl\Elements\FormElements;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;
use App\Builder\Impl\Element;


class Input extends Element
{

    public function __construct(array $sub_elements = [])
    {
        $this->makeNonCollapsible();
        parent::__construct('input', $sub_elements);
    }

    protected function scaffold()
    {
        $this->__set('type', 'text');
        $this->__set('value', '');
    }

}
