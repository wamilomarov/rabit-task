<?php


/**
 * Class Request
 */
class Request
{
    /**
     * @var mixed
     */
    public $url;
    /**
     * @var string
     */
    public string $action;
    /**
     * @var array
     */
    public array $params;
    /**
     * @var string
     */
    public string $controller;

    /**
     * Request constructor.
     */
    public function __construct()
    {
        $this->url = $_SERVER["REQUEST_URI"];
    }
}
