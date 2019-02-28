<?php

namespace controllers;


use core\Controller;
use models\UserModel;
use views\UserView;

/**
 * Class UserController
 * @package controllers
 */
class UserController extends Controller
{
    protected $_id;
    protected $_firstName;
    protected $_lastName;
    protected $_email;
    protected $_type;

    public function __construct()
    {
        $this->_view  = new UserView();
        $this->_model = new UserModel();
    }

    public function actionCheck()
    {
        $this->_id        = $_POST['id'];
        $this->_firstName = $_POST['firstName'];
        $this->_lastName  = $_POST['lastName'];
        $this->_email     = $_POST['email'];
        $this->_type      = $_POST['type'];

        if (!empty($this->_id)) {
            $this->_model->edit($this->_id, $this->_firstName, $this->_lastName, $this->_email, $this->_type);
        } else {
            $this->_model->add($this->_firstName, $this->_lastName, $this->_email, $this->_type);
        }

        header("Location: http://{$_SERVER['HTTP_HOST']}/main/index");
    }

    public function actionOutput()
    {
        $this->_model->all();
        $data = json_decode(json_encode($this->_model->_users), true );
        $this->_view->render('views/outputUsers.tpl', $data);
    }
}