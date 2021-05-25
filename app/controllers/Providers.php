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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            $id = $_POST['submit'];
            $this->remove($id);
        }

        $data = $this->providersModel->getProviders();

        $this->view("providers/plist", $data);
    }

    public function remove($id)
    {
        $this->providersModel->removeProvider($id);
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
            $this->view('providers/add', $data);
        } else {
            $data= array();
            $this->view('providers/add', $data);
        }
    }

}
