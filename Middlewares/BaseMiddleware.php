<?php

namespace guruarif\guruphp\Middlewares;

/**
 *
 * Class BaseMiddleware
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package guruarif\guruphp\Middlewares;
 */


abstract class BaseMiddleware
{
    abstract public function execute();
}