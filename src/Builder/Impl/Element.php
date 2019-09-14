<?php

namespace App\Builder\Impl;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;


class Element extends AbstractElement implements ElementInterface
{
    protected $element;
    protected $element_name;
    protected $sub_elements = [];
    protected $properties = [];


    public function __construct(string $element_name, array $sub_elements = [])
    {
        $this->element_name = $element_name;
        $this->sub_elements = $sub_elements;

        $this->scaffold();
    }

    protected function scaffold()
    {
        $this->__set('name', '');
        $this->__set('value', '');
    }

    public function __set($name, $value)
    {
        if ('element_name' === strtolower($name)) {
            throw new \Exception("You cannot override the element's name", 1); 
        }

        if ($name === 'subElement') {
            $this->sub_elements[] = $this->subElement($value);
        } else {
            $this->properties[$name] = $value;
        }
    }

    protected function subElement($value)
    {
        if ($value instanceof Element) {
            return $value;
        }

       return new self($value);
    }

    public function toHtml()
    {
        return $this->makePreTag().
            $this->makeSubElements().
            $this->makePostTag();
    }

    protected function makePreTag()
    {
        $string = "<$this->element_name ";

        foreach ($this->properties as $item => $value) {
            if(! in_array($item, ['element', 'sub_elements', 'element_name'])) {
                $string .= "$item='$value' ";
            }
        }

        $string .= '>';

        return $string;
    }

    protected function makeSubElements()
    {
        $string = '';
        foreach ($this->sub_elements as $key => $value) {
            $string .= $value;
        }

        return $string;
    }

    protected function makePostTag()
    {
        return ('</'.($this->element_name).'>');
    }

    public function __toString()
    {
        return $this->toHtml();
    }

}
