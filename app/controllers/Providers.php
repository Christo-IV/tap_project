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

    public function plist() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    public function remove($id) {
        $this->providersModel->removeProvider($id);
    }
}