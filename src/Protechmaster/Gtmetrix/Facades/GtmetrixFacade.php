<?php
/**
 * Created by PhpStorm.
 * User: rrafia
 * Date: 12/30/2014
 * Time: 2:04 PM
 */

namespace Protechmaster\Gtmetrix\Facades;

use Illuminate\Support\Facades\Facade;


class GtmetrixFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'GtmetrixScore';
    }

}