<?php

namespace sergeymakinen\tests\facades\mocks;

use yii\base\Object;

class Component extends Object
{
    public $property = 'value';

    public function method($input = null)
    {
        return $input;
    }
}
