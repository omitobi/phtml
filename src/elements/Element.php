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
     * @var string $_element
     */
    public $_element;
    public $element_;
    public $_text;


    function __construct($element = '')
    {
        if($element)
            $this->setElement($element);
    }

    public function setElement($_element)
    {
        $this->_element = $_element;
    }

    function __set($name, $value)
    {
        if ($name === 'inner') {
            $this->inner = new self($value);
        } else {
            $this->{$name} = $value;
        }
    }

    function __get($name)
    {
//        if(!property_exists($this, $name)){
//            throw new \Exception("'$name' does not exist in Class ".__CLASS__);
//        };
        if($name === '_e_') {
//            die('something happended');
            return new self();
        }
        return $this->{$name};
    }

    function __toString()
    {
        $jsoned = json_encode($this);
        $arrayed = json_decode($jsoned, true);
        $string = "<$this->_element ";
        foreach ($arrayed as $item => $value) {
            if(!in_array($item, ['_element', 'element_', '_text', '_e_', 'inner'])) {
                $string .= "$item='$value' ";
            }
        }
        $string .= '>';

        if ($this->_text) {
            $string .= $this->_text;
        }
        if( $this->element_) {
            $string .= "</$this->element_>";
        }
        return $string;
    }

    public function _e_($element)
    {
        return new self($element);
    }

}