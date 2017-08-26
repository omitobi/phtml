<?php
/**
 * Created by PhpStorm.
 * User: omitobisam
 * Date: 26/08/2017
 * Time: 17:25
 */

namespace Phtml;


class Phtml extends PElement
{
    function __construct()
    {

    }

    public function setElements()
    {
        $this->html = 'html';
        $this->head = 'head';
        $this->body = 'body';
    }


}