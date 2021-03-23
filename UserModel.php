<?php

namespace App\Core;

use App\Core\DB\DBModel;

/**
 *
 * Class UserModel
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package App\Core;
 */

abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;
}