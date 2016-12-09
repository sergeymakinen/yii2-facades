<?php

namespace sergeymakinen\tests\facades\mocks;

class Component2Facade extends ComponentFacade
{
    public static function getFacadeComponentId()
    {
        return 'component2';
    }
}
