<?php


class Page
{
    private $db;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }
    /*
    public function addUser() {
        $this->db->query('INSERT INTO users SET name=:name, email=:email, status=:status');
        $this->db->bind('name', 'user1');
        $this->db->bind('email', 'user1@host.loc');
        $this->db->bind('status', 'user');
        $this->db->execute();
    }

    public function getOneUser() {
        $this->db->query('SELECT * FROM users WHERE id=:id');
        $this->db->bind('id', 1);
        return $this->db->getOne();
    }

    public function getUsers() {
        $this->db->query('SELECT * FROM users');
        return $this->db->getAll();
    }

    public function usersCount() {
        $this->getUsers();
        return $this->db->rowCount();
    } */
}