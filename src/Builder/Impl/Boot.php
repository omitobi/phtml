<?php

namespace App\Builder\Impl;

use App\Builder\Contracts\ElementInterface;
use App\Builder\Abstracts\AbstractElement;


class Boot
{

    protected $elements = [];

    protected $class_paths = [
        '' => 'App\Builder\Impl\Elements',
        'form' => 'App\Builder\Impl\Elements\FormElements',
        'body' => 'App\Builder\Impl\Elements\BodyElements',
    ];

    protected $element_categories = [
        'html' => '',
        'head' => '',
        'body' => '',
        'title' => '',
        'form' => 'body',
        'a' => 'body',
        'br' => 'body',
        'div' => 'body',
        'span' => 'body',
        'button' => 'form',
        'input' => 'form',
        'label' => 'form',
    ];

    public function __construct()
    {

    }

    public function access(\Closure $closure)
    {
        return $closure($this);
    }

    public function toHtml()
    {
        $html = '';

        foreach ($this->elements as $key => $element) {
            $html .= $element;
        }

        return $html;
    }

    public function __toString()
    {
        return $this->toHtml();
    }

    public function __call($method, $parameters)
    {
        if (strstr($method, 'set') === $method) {
            $method_name = strtolower(substr($method, 3));

            if (in_array($method_name, array_keys($this->element_categories), true)) {
                
                $element_class = 
                    $this->class_paths[$this->element_categories[$method_name]]
                        .'\\'.ucfirst($method_name);
                        
                $this->elements[$method_name] = new $element_class(...$parameters);
            }
            
            return json_encode([$this->elements[$method_name], $method_name, strstr($method, 'set'), $method, $parameters]);
        }
    }
}
