<?php


/**
 * Class Dispatcher
 */
class Dispatcher
{
    /**
     * @var Request
     */
    private Request $request;
    /**
     * @var ServicesContainer
     */
    private ServicesContainer $serviceContainer;

    /**
     * Dispatcher constructor.
     * @param PDO $connection
     */
    public function __construct(PDO $connection)
    {
        $this->serviceContainer = new ServicesContainer($connection);
    }

    /**
     * @return mixed
     */
    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();

        return call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    /**
     * Load controller based on url parameter
     * @return mixed
     */
    public function loadController()
    {
        $name = ucfirst($this->request->controller) . "Controller";
        $file = ROOT . 'Controllers\\' . $name . '.php';
        require($file);
        return new $name($this->serviceContainer);
    }
}
