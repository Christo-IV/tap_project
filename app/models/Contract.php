<?php


class Contract
{
    private $db;

    /**
     * Page constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getContracts()
    {
        $this->db->query('SELECT * FROM contracts');
        return $this->db->getAll();
    }

    public function removeContract($id)
    {
        $this->db->query('DELETE FROM contracts WHERE contract_id=:id');
        $this->db->bind('id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function addContract($provider ,$customer_name, $customer_email, $customer_phone, $task, $location, $money)
    {
        $this->db->query('INSERT INTO contracts SET provider_id=:provider, customer_name=:name, customer_email=:email, customer_phone=:phone_number, task=:task, location=:location, money=:money');
        $this->db->bind('provider', $provider);
        $this->db->bind('name', $customer_name);
        $this->db->bind('email', $customer_email);
        $this->db->bind('phone_number', $customer_phone);
        $this->db->bind('task', $task);
        $this->db->bind('location', $location);
        $this->db->bind('money', $money);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getLog()
    {
        $this->db->query('SELECT * FROM log');
        return $this->db->getAll();
    }
}