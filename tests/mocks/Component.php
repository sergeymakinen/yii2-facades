<?php

namespace sergeymakinen\tests\mocks;

use yii\base\Object;

class Component extends Object
{
    public $property = 'value';

    public function method($input = null)
    {
        return $input;
    }
}
