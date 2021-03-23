<?php
namespace App\Core;
use App\Core\Middlewares\BaseMiddleware;
/**
 *
 * Class Controller
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package App\Core;
 */

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \App\Core\Middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return Middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }


}