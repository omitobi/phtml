<?php
/**
 * Created by PhpStorm.
 * User: omitobisam
 * Date: 26/08/2017
 * Time: 17:35
 */

namespace Phtml\Element;


class Element
{
    /**
     * @var string $element
     */
    protected $element;
    protected $_text;


    function __construct($element = 'body')
    {
        $this->setElement($element);
    }

    public function setElement($element)
    {
        $this->element = $element;
    }

    function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    function __get($name)
    {
//        if(!property_exists($this, $name)){
//            throw new \Exception("'$name' does not exist in Class ".__CLASS__);
//        };
        return $this->{$name};
    }

    function __toString()
    {
        $jsoned = json_encode($this);
        $arrayed = json_decode($jsoned, true);
        $string = "<$this->element ";
        foreach ($arrayed as $item => $value) {
            if(!in_array($item, ['element', '_text'])) {
                $string .= "$item='$value' ";
            }
        }
        $string .= '>';
        if($this->_text) {
            $string .= $this->_text;
        }
        $string .= "</$this->element>";
        return $string;
    }


}