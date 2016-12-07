<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 07.12.16
 * Time: 18:32
 */

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Testmongodb extends Eloquent
{
    protected $collection = 'unicorns';
}