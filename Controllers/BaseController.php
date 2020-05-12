<?php


/**
 * Class BaseController
 */
class BaseController
{
    /**
     * @var array
     */
    private array $vars = [];
    /**
     * @var string
     */
    private string $layout = "index";

    /**
     * set vars for view
     * @param $d
     */
    function set($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }

    /**
     * render view
     * @param $filename
     */
    function render($filename)
    {
        extract($this->vars);
        ob_start();
        require(ROOT . "Views\\" . ucfirst(str_replace('Controller', '', get_class($this))) . '\\' . $filename . '.php');
        $layout_content = ob_get_clean();

        if ($this->layout == false)
        {
            $layout_content;
        }
        else
        {
            require(ROOT . "Views\\Layout\\" . $this->layout . '.php');
        }
    }
}
