<?php
namespace raag\Session;

class Session
{
    private $name;

    public function __construct($name = "MYSESSION")
    {
        $this->name = $name;
    }

    public function start()
    {
        session_name($this->name);

        if (!empty(session_id())) {
            session_destroy();
        }
        session_start();
    }

    public function has($key)
    {
        return array_key_exists($key, $_SESSION);
    }

    public function set($key, $val)
    {
        $_SESSION[$key] = $val;
    }

    public function get($key, $default = false)
    {
        return (self::has($key)) ? $_SESSION[$key] : $default;
    }

    public function destroy()
    {
        session_destroy();
    }

    public function delete($key)
    {
        if (self::has($key)) {
            unset($_SESSION[$key]);
        }
    }

    public function dump()
    {
        var_dump($_SESSION);
    }
}
