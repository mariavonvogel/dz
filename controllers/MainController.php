<?php

namespace controllers;

use core\Controller;
use models\UserModel;

class MainController extends Controller
{


    public function __construct()
    {
        $this->_model = new UserModel();
        parent::__construct();
    }

    public function actionIndex()
    {
        $id = $_GET['id'];

        if ($_GET['action'] == 'delete') {
            $this->actionDelete($id);
        } else {
            $this->_view->id = $id;
            $this->_view->generate('views/mainIndex.tpl');
        }


    }

    public function actionDelete($id)
    {
        if (!empty($id)) {
            $this->_model->delete($id);
            $data = json_encode($this->_model->_users);
            echo $data;
        }

//        header("Location: http://{$_SERVER['HTTP_HOST']}/user/output");
    }
}