<?php

namespace sergeymakinen\tests\mocks;

class Component
{
    public $property = 'value';

    public function method($input = null)
    {
        return $input;
    }
}
