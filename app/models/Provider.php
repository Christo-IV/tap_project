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

    public function getProviders()
    {
        $this->db->query('SELECT * FROM providers');
        return $this->db->getAll();
    }

    public function removeProvider($id)
    {
        $this->db->query('DELETE FROM providers WHERE id=:id');
        $this->db->bind('id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addProvider($name, $email, $phone_number, $speciality, $location, $comment = '')
    {
        $this->db->query('INSERT INTO providers SET name=:name, email=:email, phone_number=:phone_number, speciality=:speciality, location=:location, comment=:comment');
        $this->db->bind('name', $name);
        $this->db->bind('email', $email);
        $this->db->bind('phone_number', $phone_number);
        $this->db->bind('speciality', $speciality);
        $this->db->bind('location', $location);
        $this->db->bind('comment', $comment);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}