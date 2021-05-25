<?php


class Contracts extends Controller
{
    /**
     * pages constructor.
     */
    public function __construct()
    {
        $this->contractsModel = $this->model('Contract');
    }

    public function clist()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            $id = $_POST['submit'];
            $this->remove($id);
        }

        $data = $this->contractsModel->getProviders();

        $this->view("contracts/clist", $data);
    }

    public function remove($id)
    {
        $this->contractsModel->removeProvider($id);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'speciality' => trim($_POST['speciality']),
                'phone_number' => trim($_POST['phone_number']),
                'location' => trim($_POST['location']),
                'comment' => trim($_POST['comment'])
            );

            $this->contractsModel->addContract($data['name'], $data['email'], $data['phone_number'], $data['speciality'], $data['location'], $data['comment']);
            $this->view('contracts/add', $data);
        } else {
            $data= array();
            $this->view('contracts/add', $data);
        }
    }

}