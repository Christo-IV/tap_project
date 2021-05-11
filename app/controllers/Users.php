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
            print_r($_POST['email']);
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            );
             if(empty($data['name'])){
                 $data['name_err'] = 'Please enter the name';
             }
             if(empty($data['email'])){
                 $data['email_err'] = 'Please enter the email';
             }
             if(empty($data['password'])){
                 $data['password_err'] = 'Please enter the password';
             }
             if(empty($data['confirm_password'])){
                 $data['confirm_password_err'] = 'Please confirm password';
             }
        } else {
            $this->view('users/register');
        }

    }

    public function login() {

        $this->view("users/login");
    }
}