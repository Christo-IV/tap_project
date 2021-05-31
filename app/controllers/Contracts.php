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
        $data = $this->contractsModel->getContracts();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(array_key_exists('remove', $_POST)) {
                $id = $_POST['remove'];
                $this->contractsModel->removeContract($id);
                $data = $this->contractsModel->getContracts();
            } else {
                switch ($_POST['header']) {
                    case 'contract_id':
                    case 'provider_id':
                    case 'customer_phone':
                    case 'money':
                        $data = sortNum($data, $_POST['header']);
                        break;
                    case 'customer_name':
                    case 'customer_email':
                    case 'location':
                    case 'task':
                        $data = sortStr($data, $_POST['header']);
                        break;
                }
            }
        }

        $this->view("contracts/clist", $data);
    }

    public function history()
    {
        $data = $this->contractsModel->getLog();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            switch ($_POST['header']) {
                case 'contract_id':
                case 'provider_id':
                case 'customer_phone':
                case 'money':
                    $data = sortNum($data, $_POST['header']);
                    break;
                case 'customer_name':
                case 'customer_email':
                case 'location':
                case 'task':
                    $data = sortStr($data, $_POST['header']);
                    break;
            }
        }

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