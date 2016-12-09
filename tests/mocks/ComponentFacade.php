<?php

namespace sergeymakinen\tests\facades\mocks;

use sergeymakinen\facades\Facade;

/**
 * @method static mixed method(mixed $input = null)
 * @method static mixed getProperty()
 * @method static void setProperty(mixed $value)
 */
class ComponentFacade extends Facade
{
    public static function getFacadeComponentId()
    {
        return 'component';
    }
}
