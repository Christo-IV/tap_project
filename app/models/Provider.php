<?php


class Provider
{
    private $db;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProviders() {
        $this->db->query('SELECT * FROM providers');
        return $this->db->getAll();
    }
}