<?php
class UserModelEditTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testUserModelEdit()
    {
        $user = new \models\UserModel();
        // первый ключ массива = 0, а в методе add в нулевому индексу добавляется единица
        $user->_users = array(
            // индекс = 0
            array(
                'id'        => '0',
                'firstName' => 'Ivan',
                'lastName'  => 'Petrov',
                'email'     => '1@mail.ru',
                'type'      => 'admin'
            ),
            // индекс = 1
            array(
                'id'        => '1',
                'firstName' => 'Тестюша',
                'lastName'  => 'Малинина',
                'email'     => '13@gmail.com',
                'type'      => 'guest'
            )
        );

        $id        = '1';
        $firstName = 'Юзер1';
        $lastName  = 'Фамилия1';
        $email     = '1@mail.ru';
        $type      = 'admin';

        $user->edit($id, $firstName, $lastName, $email, $type);
    }
}