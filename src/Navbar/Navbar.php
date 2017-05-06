<?php
namespace raag\Navbar;

class Navbar implements \Anax\Common\ConfigureInterface, \Anax\Common\AppInjectableInterface
{
    use \Anax\Common\ConfigureTrait, \Anax\Common\AppInjectableTrait;
    /**
     * Get HTML for the navbar.
     *
     * @return string as HTML with the navbar.
     */
    public function getHTML()
    {
        $navbar = $this->config;
        $app = $this->app;


        $html = "<div id='nav'> <ul>";
        $requestPath = $_SERVER['REQUEST_URI'];
        $path = explode("/", $requestPath);
        foreach ($navbar["items"] as $key => $value) {
            $url[$key] = $app->url->create($value["route"]);
            $class = " class='nonCurrent'";
            if (end($path) == $value["route"]) {
                $class = " class='current'";
            }
            $html .= "<li><a href=" . $url[$key] . $class . ">" . $value["text"] . "</a></li>";
        }
        $html .= "</ul></div>";
        return $html;
    }
}
