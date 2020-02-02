<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2020-02-02
 * Time: 18:41
 */

namespace App\Traits;

/**
 * Class that allows there to only be once instance of this page created
 * Class UniquePage
 * @package App\Traits
 */
trait UniquePage {

    public function canCreate($member = null, $context = array())
    {
        return self::get()->count() === 0;
    }
}