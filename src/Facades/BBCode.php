<?php
/**
 * Created by PhpStorm.
 * User: Codedepp
 * Date: 23/01/2019
 * Time: 19:17
 */

namespace Codedepp\BBCode\Facades;

use Illuminate\Support\Facades\Facade;

final class BBCode extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'bbcode';
    }
}
