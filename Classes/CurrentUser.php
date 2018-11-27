<?php
namespace App\Classes;

class CurrentUser
{
    public $id;
    public $name;
    public $role;

    public function __construct($id, $name = 'guest', $role = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->role = $role;
        $this->login();
    }

    protected function login()
    {
        $_SESSION['id'] = $this->id;
        $_SESSION['name'] = $this->name;
        $_SESSION['role'] = $this->role;
    }

    public static function get()
    {
        if (isset($_SESSION['id'])) {
            return new static($_SESSION['id'], $_SESSION['name'], $_SESSION['role']);
        } else {
            return new static(null);
        }
    }

    public static function logout()
    {
        unset($_SESSION['id']);
    }
}
