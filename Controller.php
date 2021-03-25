<?php
namespace guruarif\guruphp;
use guruarif\guruphp\Middlewares\BaseMiddleware;
/**
 *
 * Class Controller
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package guruarif\guruphp;
 */

class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \guruarif\guruphp\Middlewares\BaseMiddleware[]
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