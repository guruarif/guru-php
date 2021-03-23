<?php

namespace App\Core\Middlewares;

/**
 *
 * Class BaseMiddleware
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package App\Core\Middlewares;
 */


abstract class BaseMiddleware
{
    abstract public function execute();
}