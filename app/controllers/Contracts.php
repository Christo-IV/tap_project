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
            /*
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            */
            $id = $_POST['contract'];
            $this->contractsModel->removeContract($id);
        }

        $data = $this->contractsModel->getContracts();

        $this->view("contracts/clist", $data);
    }

    public function history()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        }

        $data = $this->contractsModel->getLog();

        $this->view("contracts/history", $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = array(
                'provider' => trim($_POST['provider']),
                'customer_name' => trim($_POST['customer_name']),
                'customer_email' => trim($_POST['customer_email']),
                'customer_phone' => trim($_POST['customer_phone']),
                'task' => trim($_POST['task']),
                'money' => trim($_POST['money']),
                'location' => trim($_POST['location'])
            );

            $this->contractsModel->addContract(
                $data['provider'],
                $data['customer_name'],
                $data['customer_email'],
                $data['customer_phone'],
                $data['task'],
                $data['location'],
                $data['money']
            );
            redirect('contracts/clist');
        } else {
            $data= array();
            $this->view('contracts/add', $data);
        }
    }

}