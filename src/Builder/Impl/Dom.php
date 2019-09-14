<?php

namespace App\Builder\Impl;

use App\Builder\Abstracts\AbstractDom;
use App\Builder\Contracts\DomInterface;


class Dom extends AbstractDom implements DomInterface
{

    public function getMe($var = null)
    {
       return $var;
    }
}
