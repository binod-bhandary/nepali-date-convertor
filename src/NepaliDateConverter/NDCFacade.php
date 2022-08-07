<?php
namespace Vinus\NepaliDateConverter;

use Illuminate\Support\Facades\Facade;

class NDCFacade  extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'npdate';
    }

}