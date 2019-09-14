<?php

namespace App\Builder\Impl;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;


class Element extends AbstractElement implements ElementInterface
{

    public function getMe($var)
    {
        return $var;
    }
}
