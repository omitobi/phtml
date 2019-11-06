<?php

namespace App\Builder\Impl\Elements\BodyElements;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;
use App\Builder\Impl\Element;


class Br extends Element
{

    public function __construct()
    {
        $this->makeNonCollapsible();
        parent::__construct('br');
    }

    protected function scaffold()
    {
        $this->__set('href', '#');
    }

}
