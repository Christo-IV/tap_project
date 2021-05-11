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
             } else if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                 $data['email_err'] = 'Please enter valid email';
             }// This might not be working correctly currelty
                else if ($this->usersModel->findUserByEmail($data['email'])){
                 $data['email_err'] = 'Email is already taken';
             }
             if(empty($data['password'])){
                 $data['password_err'] = 'Please enter the password';
             } else if (strlen($data['password']) < 6) {
                 $data['password_err'] = 'Password must be at least 6 characters long';
             }
             if(empty($data['confirm_password'])){
                 $data['confirm_password_err'] = 'Please confirm password';
             } else if (strlen($data['confirm_password']) < 6) {
                 $data['confirm_password_err'] = 'Password must be at least 6 characters long';
             }else if ($data['password'] !== $data['confirm_password']) {
                 $data['confirm_password_err'] = 'Passwords must match!!!!<:(>';
             }
             $this->view('users/register', $data);
        } else {
            $this->view('users/register');
        }

    }

    public function login() {

        $this->view("users/login");
    }
}