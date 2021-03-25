<?php

namespace guruarif\guruphp\Middlewares;

use guruarif\guruphp\Application;
use guruarif\guruphp\Exception\ForbiddenException;

/**
 *
 * Class AuthMiddleware
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package guruarif\guruphp\Middlewares;
 */

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    /**
     * AuthMiddleware constructor.
     * @param array $actions
     */
    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }


    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }


}