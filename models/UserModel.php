<?php

namespace models;


use core\Model;

/**
 * Class UserModel
 * @package models
 */
class UserModel extends Model
{
    protected $_fileName = './data/allUsers.json';
    protected $_types    = array(
        'guest'    => 'Гость',
        'admin' => 'Админ'
    );
    public $_users = array();

    public function __construct()
    {
        if (file_exists($this->_fileName)) {
            $users = file_get_contents($this->_fileName);
            $this->_users = json_decode($users, true);
        }
    }

    /**
     * @param $firstName string имя пользователя
     * @param $lastName string фамилия пользователя
     * @param $email string мыло пользователя
     * @param $type string тип пользователя
     */
    public function add($firstName, $lastName, $email, $type)
    {
        $arrayKeys = array_keys($this->_users);
        $id = end($arrayKeys) + 1;
        $this->_users[$id] = array(
            'id'        => $id,
            'firstName' => $firstName,
            'lastName'  => $lastName,
            'email'     => $email,
            'type'      => $type,
        );

        $this->store();
    }

    /**
     * @param $id int переданный при редактировании айди пользователя
     * @param $firstName string имя пользователя
     * @param $lastName string фамилия пользователя
     * @param $email string мыло пользователя
     * @param $type string тип пользователя
     */
    public function edit($id, $firstName, $lastName, $email, $type)
    {
        if ($this->find($id)) {
            $this->_users[$id]['id'] = $id;
            $this->_users[$id]['firstName'] = $firstName;
            $this->_users[$id]['lastName']  = $lastName;
            $this->_users[$id]['email']     = $email;
            $this->_users[$id]['type']      = $type;
            $this->store();
        }
    }

    /**
     * @param $id int переданный при редактировании айди пользователя
     * @return mixed
     */
    public function find($id)
    {
        return $this->_users[$id];
    }

    /**
     * @param $id int переданный при редактировании айди пользователя
     */
    public function delete($id)
    {
        $this->find($id);
        unset($this->_users[$id]);
        $this->store();
    }

    protected function store()
    {
        file_put_contents($this->_fileName, json_encode($this->_users));
    }

    public function all()
    {
        return $this->_users;
    }
}