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
        $data = $this->providersModel->getProviders();

        $this->view("providers/plist", $data);
    }
}