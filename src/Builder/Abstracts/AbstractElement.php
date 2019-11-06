<?php

namespace App\Builder\Abstracts;

use App\Builder\Contracts\ElementInterface;

class AbstractElement implements ElementInterface
{
    
    protected function makeNonCollapsible()
    {
        $this->is_collapsible = false;
    }
}
