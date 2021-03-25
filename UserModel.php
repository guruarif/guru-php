<?php

namespace guruarif\guruphp;

use guruarif\guruphp\DB\DBModel;

/**
 *
 * Class UserModel
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package guruarif\guruphp;
 */

abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;
}