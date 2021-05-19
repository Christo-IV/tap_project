<?php


class User
{
    private $db;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM users WHERE email=:email');
        $this->db->bind(':email', $email);
        $user = $this->db->getOne();
        print_r($user);
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function register($name, $email, $password) {
//        echo '<pre>';
//        print_r($data);
//        print_r($data['name']);
//        echo '</pre>';

        $this->db->query('INSERT INTO users SET 
                name=:name,
                email=:email,
                password=:password
        ');
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);

        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login ($email, $password) {
        $this->db->query('SELECT * FROM users WHERE email=:email');
        $this->db->bind(':email', $email);
        $user = $this->db->getOne();
        $hashedPassword = $user->password;
        if(password_verify($password, $hashedPassword)) {
            return $user;
        } else {
            return false;
        }
}
}