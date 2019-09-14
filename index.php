<?php
/**
 * Created by PhpStorm.
 * User: omitobisam
 * Date: 26/08/2017
 * Time: 17:39
 */

include "vendor/autoload.php";

use App\Builder\Impl\Dom;
use App\Builder\Impl\Element;


$form = new Element();

echo $form->getMe('ninja');

//echo $element;