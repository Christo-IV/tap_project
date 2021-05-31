<?php


class Providers extends Controller
{
    /**
     * pages constructor.
     */
    public function __construct()
    {
        $this->providersModel = $this->model('Provider');
    }

    public function plist()
    {
        $data = $this->providersModel->getProviders();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if(array_key_exists('remove', $_POST)) {
                $id = $_POST['remove'];
                $this->providersModel->removeProvider($id);
                $data = $this->providersModel->getProviders();
            } else {
                switch ($_POST['header']) {
                    case 'provider_id':
                    case 'phone_number':
                        $data = sortNum($data, $_POST['header']);
                        break;
                    case 'name':
                    case 'email':
                    case 'location':
                    case 'task':
                    case 'comment':
                        $data = sortStr($data, $_POST['header']);
                        break;
                }
            }
        }


        $this->view('providers/plist', $data);
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

            $this->providersModel->addProvider($data['name'], $data['email'], $data['phone_number'], $data['speciality'], $data['location'], $data['comment']);
            //$this->view('providers/add', $data);
            redirect('providers/plist');
        } else {
            $data= array();
            $this->view('providers/add', $data);
        }
    }
}
