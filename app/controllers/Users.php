<?php


class Users extends Controller
{
    /**
     * users constructor.
     */
    public function __construct()
    {
        $this->usersModel = $this->model('User');
    }

    public function register() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

        } else {
            $this->view('users/register');
        }
    }

    public function login() {

        $this->view("users/login");
    }
}