<?php


/**
 * Class Router
 */
class Router
{
    /**
     * Parse url and find according controller action
     * Needs some 404 handling
     * @param $url
     * @param $request
     */
    static public function parse($url, $request)
    {
        $url = trim($url);

        if ($url == "/")
        {
            $request->controller = "home";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 1);
            $request->controller = $explode_url[0] ?? "home";
            $request->action = $explode_url[1] ?? "index";
            $request->params = array_slice($explode_url, 2);
        }

    }
}
