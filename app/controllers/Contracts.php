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
            /*echo '<pre>';
            print_r($_POST);
            echo '</pre>';*/
            $id = $_POST['submit'];
            $this->remove($id);
        }

        $data = $this->contractsModel->getContracts();

        $this->view("contracts/clist", $data);
    }

    public function remove($id)
    {
        $this->contractsModel->removeContract($id);
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

            // $provider ,$customer_name, $customer_email, $customer_phone, $task, $location, $money
            $this->contractsModel->addContract(
                $data['provider'],
                $data['customer_name'],
                $data['customer_email'],
                $data['customer_phone'],
                $data['task'],
                $data['location'],
                $data['money']
            );
            $this->view('contracts/add', $data);
        } else {
            $data= array();
            $this->view('contracts/add', $data);
        }
    }

}